function makeFindCostAjaxRequest() {
    // Get form data
    var formData = new FormData(document.getElementById('myForm'));

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../admin/backend/findcost.php', true); // Update the correct PHP script path
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Update the resultContainer with the response
                document.getElementById('resultContainer').innerHTML = xhr.responseText;
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
    // Your code here, including the event listener setup
    document.getElementById('myForm').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting normally
        makeFindCostAjaxRequest(); // Call the AJAX function
    });
});
