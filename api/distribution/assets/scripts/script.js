$(function () {
    if (!$('#distTable tbody tr').length) return;

    $('#distTable').DataTable({
        pageLength: 10,
        lengthMenu: [
            [5, 10, 15, 25, 50, 100, 250, 500, -1],
            ['5', '10', '15', '25', '50', '100', '250', '500', 'All']
        ],
        order: [
            [0, 'asc']
        ],
        scrollX: true,
        scrollY: '62vh',
        scrollCollapse: true,
        dom: '<"dt-top-row"lf>rtip<"dt-btn-row"B>',
        buttons: [{
            extend: 'copy',
            text: '<i class="fas fa-copy"></i> Copy',
            className: 'btn btn-sm btn-outline-secondary',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'csv',
            text: '<i class="fas fa-file-csv"></i> CSV',
            className: 'btn btn-sm btn-outline-secondary',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'excel',
            text: '<i class="fas fa-file-excel"></i> Excel',
            className: 'btn btn-sm btn-outline-secondary',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'pdf',
            text: '<i class="fas fa-file-pdf"></i> PDF',
            className: 'btn btn-sm btn-outline-secondary',
            orientation: 'landscape',
            pageSize: 'A3',
            exportOptions: {
                columns: ':visible'
            }
        },
        {
            extend: 'print',
            text: '<i class="fas fa-print"></i> Print',
            className: 'btn btn-sm btn-outline-secondary',
            exportOptions: {
                columns: ':visible'
            }
        },
        ],
        language: {
            search: '',
            searchPlaceholder: 'Quick search…',
            lengthMenu: 'Show _MENU_',
            info: '_START_–_END_ of _TOTAL_',
            infoFiltered: '(from _MAX_)',
            zeroRecords: 'No matching records',
            paginate: {
                first: '«',
                last: '»',
                next: '›',
                previous: '‹'
            },
        },
        initComplete() {
            // move buttons into the top bar area for visual grouping
            $('.dt-btn-row').hide();
        }
    });

    // Hide overlay when done
    $('#loadOverlay').removeClass('on');
});

function clearFilters() {
    window.location.href = window.location.pathname;
}

function removeFilter(key) {
    const p = new URLSearchParams(window.location.search);
    p.delete(key);
    const s = p.toString();
    window.location.href = window.location.pathname + (s ? '?' + s : '');
}

function exportData(fmt) {
    const qs = new URLSearchParams($('#filterForm').serialize()).toString();
    window.location.href = '?' + qs + '&export=' + fmt;
}

function copyAPI() {
    const qs = new URLSearchParams($('#filterForm').serialize()).toString();
    const url = location.origin + location.pathname + '?api=1&action=records' + (qs ? '&' + qs : '');
    navigator.clipboard.writeText(url)
        .then(() => toast('API URL copied to clipboard', 'ok'))
        .catch(() => {
            prompt('Copy this URL:', url);
        });
}

function toast(msg, type = 'ok') {
    const el = document.createElement('div');
    el.className = 'toast-msg ' + type;
    el.innerHTML = `<i class="fas fa-${type === 'ok' ? 'check-circle' : 'exclamation-circle'}"></i> ${msg}`;
    document.getElementById('toastShelf').appendChild(el);
    setTimeout(() => el.remove(), 3500);
}

// Hide overlay if already loaded (no-op if not shown)
window.addEventListener('load', () => document.getElementById('loadOverlay').classList.remove('on'));