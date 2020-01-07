// place your code below

fetch('http://localhost:3000/products/')
    .then(resp => {
        return resp.json();
    })
    .then(data => {
        console.log(data);
    })


console.log(`Hello world!`);