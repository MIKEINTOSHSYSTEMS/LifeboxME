<?php
// element/test_ajax.php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Test AJAX Endpoint</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        input,
        button,
        select {
            padding: 8px;
            margin: 5px;
        }

        #result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            min-height: 100px;
        }

        .loading {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
        }

        .success {
            background-color: #d1e7dd;
            border: 1px solid #badbcc;
        }

        .error {
            background-color: #f8d7da;
            border: 1px solid #f5c2c7;
        }

        .test-container {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <h2>Test AJAX Value Type Endpoint</h2>

    <div class="test-container">
        <h3>Test Configuration</h3>
        <div>
            <label>Data Element ID: <input type="number" id="de_id" value="1" min="1"></label>
        </div>
        <div>
            <label>Endpoint:
                <select id="endpoint">
                    <option value="ajax_get_value_type_test.php">Test Version (no auth)</option>
                    <option value="ajax_get_value_type.php">Production Version (requires login)</option>
                </select>
            </label>
        </div>
        <div>
            <button onclick="testAjax()">Test AJAX</button>
            <button onclick="testMultiple()">Test Multiple IDs</button>
        </div>
    </div>

    <div id="result" class="loading">Ready to test...</div>

    <div class="test-container">
        <h3>Quick Test Buttons</h3>
        <button onclick="quickTest(1)">Test ID 1</button>
        <button onclick="quickTest(2)">Test ID 2</button>
        <button onclick="quickTest(3)">Test ID 3</button>
        <button onclick="quickTest(4)">Test ID 4</button>
        <button onclick="quickTest(5)">Test ID 5</button>
    </div>

    <script>
        function quickTest(id) {
            $('#de_id').val(id);
            testAjax();
        }

        function testAjax() {
            var deId = $('#de_id').val();
            var endpoint = $('#endpoint').val();

            if (!deId || deId < 1) {
                showResult('Please enter a valid Data Element ID', 'error');
                return;
            }

            showResult('Testing Data Element ID: ' + deId + ' using ' + endpoint + '...', 'loading');

            $.ajax({
                url: endpoint,
                type: 'POST',
                data: {
                    action: 'get_value_type',
                    data_element_id: deId
                },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        var html = '<strong>✅ Success!</strong><br>' +
                            'Data Element ID: ' + deId + '<br>' +
                            'Value Type: <strong style="color: #0d6efd;">' + response.value_type + '</strong>';

                        if (response.note) {
                            html += '<br><small>' + response.note + '</small>';
                        }

                        showResult(html, 'success');
                    } else {
                        showResult(
                            '<strong>❌ Error:</strong><br>' +
                            'Data Element ID: ' + deId + '<br>' +
                            'Message: ' + response.message,
                            'error'
                        );
                    }
                },
                error: function(xhr, status, error) {
                    var errorMsg = '<strong>❌ AJAX Error:</strong><br>' +
                        'Endpoint: ' + endpoint + '<br>' +
                        'Status: ' + status + '<br>' +
                        'Error: ' + error;

                    if (xhr.responseText) {
                        try {
                            var jsonResponse = JSON.parse(xhr.responseText);
                            errorMsg += '<br>Message: ' + jsonResponse.message;
                        } catch (e) {
                            // Show first 500 chars of response
                            errorMsg += '<br>Response: ' + xhr.responseText.substring(0, 500);
                        }
                    }

                    showResult(errorMsg, 'error');

                    // Suggest trying test version if production fails
                    if (endpoint === 'ajax_get_value_type.php') {
                        $('#result').append(
                            '<br><br><button onclick="switchToTest()">Switch to Test Version</button>'
                        );
                    }
                }
            });
        }

        function testMultiple() {
            var ids = [1, 2, 3, 4, 5];
            var endpoint = $('#endpoint').val();
            var results = [];
            var completed = 0;

            showResult('Testing multiple IDs: ' + ids.join(', ') + '...', 'loading');

            ids.forEach(function(id) {
                $.ajax({
                    url: endpoint,
                    type: 'POST',
                    data: {
                        action: 'get_value_type',
                        data_element_id: id
                    },
                    dataType: 'json',
                    success: function(response) {
                        completed++;
                        if (response.success) {
                            results.push('✅ ID ' + id + ': ' + response.value_type);
                        } else {
                            results.push('❌ ID ' + id + ': ' + response.message);
                        }

                        if (completed === ids.length) {
                            showResult(
                                '<strong>Multiple Test Results:</strong><br>' +
                                results.join('<br>'),
                                completed === ids.length ? 'success' : 'error'
                            );
                        }
                    },
                    error: function() {
                        completed++;
                        results.push('❌ ID ' + id + ': AJAX Error');

                        if (completed === ids.length) {
                            showResult(
                                '<strong>Multiple Test Results:</strong><br>' +
                                results.join('<br>'),
                                'error'
                            );
                        }
                    }
                });
            });
        }

        function switchToTest() {
            $('#endpoint').val('ajax_get_value_type_test.php');
            testAjax();
        }

        function showResult(message, type) {
            $('#result')
                .html(message)
                .removeClass('loading success error')
                .addClass(type);
        }

        // Auto-test on page load
        $(document).ready(function() {
            setTimeout(function() {
                testAjax();
            }, 1000);
        });
    </script>
</body>

</html>