<?php
?>
<html>

<script>
    // Test with a single data element
    $.ajax({
        url: '/app/element/save_data_element.php',
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            values: [{
                data_element_id: 1,
                period_type: 'monthly',
                period_year: 2024,
                period_month: 4,
                value: 100
            }]
        }),
        success: function(response) {
            console.log('Save response:', response);
            if (response.saved > 0) {
                alert('Success! Saved ' + response.saved + ' record(s)');
            } else {
                alert('Error: ' + JSON.stringify(response.details));
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error:', error);
            alert('AJAX Error: ' + error);
        }
    });
</script>

</html>