// Function to populate the dropdown in the second form
console.log('Script for second form executed');

function populateSecondFormDropdown() {
  var dropdown = document.getElementById('secondFormTypeDropdown'); // Update with the actual ID of your dropdown
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var types = JSON.parse(xhr.responseText);

      // Clear existing options
      dropdown.innerHTML = '';

      // Add a default option
      var defaultOption = document.createElement('option');
      defaultOption.value = '';
      defaultOption.text = 'Select Type';
      dropdown.appendChild(defaultOption);

      // Add options from the fetched data
      for (var i = 0; i < types.length; i++) {
        var option = document.createElement('option');
        option.value = types[i];
        option.text = types[i];
        dropdown.appendChild(option);
      }
    }
  };

  // Make a GET request to the PHP file that retrieves types
  xhr.open('POST', '../../admin/backend/gettype.php', true); // Update the correct PHP script path
  xhr.send();
}

// Add an event listener to ensure this script runs when the page loads
document.addEventListener('DOMContentLoaded', function () {
  populateSecondFormDropdown();
});
