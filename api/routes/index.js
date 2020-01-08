const express = require('express');
const router = express.Router();

router.get('/', (req, res) => res.render('welcome'));
router.get('/mailexists', (req, res) => res.render('mailexists'));
router.get('/dashboard', (req, res) => res.render('dashboard'));
router.get('/authfailed', (req, res) => res.render('authfailed'));

module.exports = router;