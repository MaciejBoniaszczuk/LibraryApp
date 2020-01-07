// place your code below
const list = document.querySelector('.testowy_div')


fetch('http://localhost:3000/products/')
    .then(resp => {
        return resp.json();
    })
    .then(data => {
        const repos = data;
        for (var i = 0; i < 4; i++) {
            list.innerHTML += `<div>${repos.products[i].name}</div>`
        }

    })