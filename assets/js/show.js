function fetchTestDetails() {
    var test_name = document.getElementById('test_name').value;
    if (test_name !== '') {
        $.ajax({
            url: 'fetch_test_details.php',
            type: 'POST',
            data: { test_name: test_name },
            success: function(response) {
                var data = JSON.parse(response);
                if (data !== null && Object.keys(data).length > 0) {
                    document.getElementById('test_number').value = data.test_number;
                    document.getElementById('dep_name').value = data.dep_name;
                } else {
                    // If test details not found, clear the fields
                    document.getElementById('test_number').value = '';
                    document.getElementById('dep_name').value = '';
                }
            }
        });
    } else {
        // If no test name selected, clear the fields
        document.getElementById('test_number').value = '';
        document.getElementById('dep_name').value = '';
    }
}
