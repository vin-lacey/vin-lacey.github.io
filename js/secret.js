// the secret sauce
let secretId = document.getElementById('secret');

secretId.style.display = 'none';          // Hide on page load

// reveal secret when my photo is clicked.
function clickPhoto() {
  secretId.style.display = 'block';
}
