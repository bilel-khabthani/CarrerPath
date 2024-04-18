$(document).ready(function() {
    $('form#addUserForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: 'path/to/UserControllerHandler.php', // Modify as needed
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                console.log('User Added:', response);
                // Additional UI feedback can be added here
            },
            error: function(error) {
                console.error('Error Adding User:', error);
                // Display error feedback on the UI
            }
        });
    });
});
