// Gives me a random fact on my homepage
// thanks to the useless facts API: https://uselessfacts.jsph.pl

const factOutput = document.getElementById('random-fact')
const factButton = document.getElementById('fact-button')

const factFetch = () => {
  fetch('https://uselessfacts.jsph.pl/random.json?language=en')
    .then(response => response.json())
    .then(data => factOutput.textContent = data.text);
}

factFetch()

factButton.addEventListener( 'click', () => factFetch() )
