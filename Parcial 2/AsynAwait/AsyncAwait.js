const btnllamar = document.getElementById('btnLlamar');
const apiData = document.getElementById('apiData');
var image = document.querySelector('img');

const llamarfto = () => {
    fetch('https://dog.ceo/api/breeds/image/random')
    .then(respuesta => respuesta.json())
    .then(data => {
        console.log(data);
        image.src =data.message;
    })
}

btnllamar.addEventListener('click', llamarfto);