const express = require('express');
const expressLayouts = require('express-ejs-layouts');
const app = express();
const morgan = require('morgan');
const bodyParser = require('body-parser');
const mongoose = require('mongoose');
const cors = require('cors');
require("dotenv").config();
const productRoutes = require('../api/routes/products');
const orderRoutes = require('../api/routes/orders');
const userRoutes = require('../api/routes/user');
const indexRoutes = require('../api/routes/index');
const passport = require('passport');
const flash = require("connect-flash");

app.use(flash());
var session = require('express-session');

//...



const url = require('url');
var fs = require('fs');
app.use(cors());

require('../config/passport')(passport);


mongoose.connect(
    "mongodb+srv://admin:admin123@node-rest-library-t0qfq.mongodb.net/test?retryWrites=true&w=majority", {
        useNewUrlParser: true,
        useUnifiedTopology: true
    }

);
mongoose.Promise = global.Promise;




app.use(morgan('dev'));
app.use('/uploads', express.static('uploads'));
app.use(bodyParser.urlencoded({
    extended: false
}));
app.use(bodyParser.json());

app.use((req, res, next) => {
    res.header('Acces-Control-Allow-Origin', '*');
    res.header('Acces-Control-Allow-Headers', '*');
    if (req.method === 'OPTIONS') {
        res.header('Acces-Control-Allow-Methods', 'PUT', 'POST', 'PATCH', 'DELETE', 'GET');
        return res.status(200).json({});
    }
    next();
});
//EJS
app.use(expressLayouts);
app.set('view engine', 'ejs');



//Routes which should handle request
app.use('/products', productRoutes);
app.use('/orders', orderRoutes);
app.use('/user', userRoutes);
app.use('/', indexRoutes);
app.use('/myFiles', express.static('public'));
app.use((req, res, next) => {
    const error = new Error('Not found');
    error.status = 404;
    next(error);
});


app.use((error, req, res, next) => {
    res.status(error.status || 500);
    res.json({
        error: {
            message: error.message
        }
    });
});







module.exports = app;

// function renderHTML(path, response) {
//     fs.readFile(path, function (err, html) {

//         if (err) throw err;
//         response.write(html);
//         response.end();
//     });

// }

// module.exports = {
//     handleRequest: function (request, resposne) {
//         resposne.writeHead(200, {
//             'Content-Type': 'text/html'
//         });

//         var path = url.parse(request.url).pathname;
//         switch (path) {
//             case '/':
//                 renderHTML('./index.html', response);
//                 break;
//             case '/login':
//                 renderHTML('./login.html', response);
//                 break;
//             default:
//                 response.writeHead(404);
//                 response.write("Nie ma takiej strony");
//                 response.end();

//         }

//     }
// };