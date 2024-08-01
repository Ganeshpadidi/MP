function makeAjaxRequest() {
    // Get form data
    var formData = new FormData(document.getElementById('updateTypeForm'));

    // Create a new XMLHttpRequest
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../backend/updatetype.php', true); // Update the correct PHP script path
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Update the resultContainer with the response
                document.getElementById('responseContainer').innerHTML = xhr.responseText;
            } else {
                // Handle the error here
                console.error('AJAX request failed with status ' + xhr.status);
            }
        }
    };

    xhr.send(formData);
}

// Add an event listener to the form submission
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('updateTypeForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting normally
        makeAjaxRequest(); // Call the AJAX function
    });
});
