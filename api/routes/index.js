const express = require('express');
const router = express.Router();
const {
    ensureAuthenticated
} = require('../../config/auth');

router.get('/', (req, res) => res.render('welcome'));
router.get('/mailexists', (req, res) => res.render('mailexists'));
router.get('/dashboard', (req, res) => res.render('dashboard'));
router.get('/authfailed', (req, res) => res.render('authfailed'));
router.get('/spis', (req, res) => res.render('spis'));
router.get('/addBook', (req, res) => res.render('addBook'));


module.exports = router;