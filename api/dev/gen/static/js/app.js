document.addEventListener('DOMContentLoaded', function () {
    // Load tables list
    fetch('/api/tables')
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                const tablesList = document.getElementById('tables-list');
                const tableSelect = document.getElementById('table-select');

                data.tables.forEach(table => {
                    // Add to buttons list
                    const item = document.createElement('button');
                    item.className = 'list-group-item list-group-item-action';
                    item.textContent = table;
                    item.addEventListener('click', () => loadTableData(table));
                    tablesList.appendChild(item);

                    // Add to dropdown
                    const option = document.createElement('option');
                    option.value = table;
                    option.textContent = table;
                    tableSelect.appendChild(option);
                });

                // Load first table by default
                if (data.tables.length > 0) {
                    loadTableData(data.tables[0]);
                    tableSelect.value = data.tables[0];
                }
            }
        });

    // Refresh button
    document.getElementById('refresh-btn')?.addEventListener('click', function () {
        const activeTable = document.querySelector('#tables-list .active');
        if (activeTable) {
            loadTableData(activeTable.textContent);
        }
    });

    // Table select dropdown
    document.getElementById('table-select')?.addEventListener('change', function () {
        loadTableData(this.value);
    });
});

function loadTableData(tableName) {
    // Highlight selected table
    document.querySelectorAll('#tables-list button').forEach(btn => {
        btn.classList.remove('active');
        if (btn.textContent === tableName) {
            btn.classList.add('active');
        }
    });

    // Update dropdown selection
    const tableSelect = document.getElementById('table-select');
    if (tableSelect) {
        tableSelect.value = tableName;
    }

    // Fetch table data
    fetch(`/api/${tableName}?action=list&records=100`)
        .then(response => response.json())
        .then(data => {
            if (data.success && data.data.length > 0) {
                renderTable(data.data);
            }
        });

    // Fetch table schema
    fetch(`/api/${tableName}/schema`)
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                console.log('Schema:', data.schema);
            }
        });
}

function renderTable(data) {
    const headers = document.getElementById('table-headers');
    const body = document.getElementById('table-body');

    // Clear existing content
    headers.innerHTML = '';
    body.innerHTML = '';

    // Create headers
    Object.keys(data[0]).forEach(key => {
        const th = document.createElement('th');
        th.textContent = key;
        headers.appendChild(th);
    });

    // Create rows
    data.forEach(row => {
        const tr = document.createElement('tr');
        Object.values(row).forEach(value => {
            const td = document.createElement('td');
            td.textContent = value !== null ? value : 'NULL';
            tr.appendChild(td);
        });
        body.appendChild(tr);
    });
}