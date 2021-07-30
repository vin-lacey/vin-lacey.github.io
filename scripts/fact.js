// Gives me a random fact on my homepage
// thanks to the useless facts API: https://uselessfacts.jsph.pl

let factOutput = document.getElementById('random-fact')

fetch('https://uselessfacts.jsph.pl/random.json?language=en')
  .then(response => response.json())
  .then(data => factOutput.textContent = data.text);
