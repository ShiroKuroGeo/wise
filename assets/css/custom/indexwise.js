function navigateToRoute() {
    var selectedValue = document.getElementById("exampleSelect").value;
    if (selectedValue) {
        window.location.href = "{{ route('category-concern-employee', ['value' => '']) }}/" + selectedValue;
    }
}

function reloadContentAndCheck() {
    $('#modalContent').html('Checking...');
    $('#loadingBtn').html('Waiting...');

    setTimeout(function() {
        checkUser();
    }, 500);
}

function checkUser() {
    var formData = $('#checkForm').serialize();

    $.ajax({
        type: 'POST',
        url: "{{ route('check-user-employee') }}",
        data: formData,
        dataType: 'json',
        success: function(response) {
            $('#modalContent').html(response.message);
            $('#loadingBtn').html('Check');
        },
        error: function(error) {
            console.log(error);
        }
    });
}