
function makeAjaxRequest() {

    var formData = new FormData(document.getElementById('insertform'));

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../admin/backend/insert.php', true); // Update the correct PHP script path
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Update the resultContainer with the response
                document.getElementById('resultContainer4').innerHTML = xhr.responseText;
            } else {
                // Handle the error here
                console.error('AJAX request failed with status ' + xhr.status);
            }
        }
    };

    xhr.send(formData);
}
console.log('JavaScript file is being executed');

// Add an event listener to the form submission
document.addEventListener('DOMContentLoaded', function () {
    // Your code here, including the event listener setup
    document.getElementById('insertform').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting normally
        makeAjaxRequest(); // Call the AJAX function
    });
});

