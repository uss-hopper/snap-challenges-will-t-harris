const axios = require('axios');

axios.get(' https://dog.ceo/api/breeds/list/all ').then(response => {
    const dogs = response.data;
});

const element = document.getElementById('target');
