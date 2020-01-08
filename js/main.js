// place your code below
const wszystkie_ksiazki = document.querySelector('.wszystkie_ksiazki')

fetch('http://localhost:3000/products/')
    .then(resp => {
        return resp.json();
    })
    .then(data => {
        const repos = data;
        for (var i = 0; i < 5; i++) {
            wszystkie_ksiazki.innerHTML += `<div><img src="assets/img/logoblue.png" width="20" height="20" hspace="5">${repos.products[i].name}</div>`
        }

    })

//console.log(`Hello world!`);

const wolne_ksiazki = document.querySelector('.wolne_ksiazki')
fetch('http://localhost:3000/products/')
    .then(resp => {
        return resp.json();
    })
    .then(data => {
        const repos = data;
        for (var i = 0; i < 5; i++) {
            wolne_ksiazki.innerHTML += `<div><img src="assets/img/logogreen.png" width="20" height="20" hspace="5">${repos.products[i].name}</div>`
        }

    })

const zalogowany = document.querySelector('.zalogowany')
fetch('http://localhost:3000/products/')
    .then(resp => {
        return resp.json();
    })
    .then(data => {
        const repos = data;
        for (var i = 0; i < 5; i++) {
            zalogowany.innerHTML += `<div><img src="assets/img/logogreen.png" width="20" height="20" hspace="5">${repos.products[i].name}</div>`
        }

    })

