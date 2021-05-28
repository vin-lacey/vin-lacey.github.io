// the secret sauce
const secretId = document.getElementById('secret')

secretId.style.display = 'none';          // Hide on page load

let imageMe = document.getElementById("image-me")

// reveal secret when my photo is clicked.

imageMe.addEventListener("click",
  () => secretId.style.display = 'block') // click the photo for an easter egg
