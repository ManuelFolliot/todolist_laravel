// import './bootstrap';
import task from './task.js';
import serveur from './serveur.js';
const app = {
    init: async function(){
        task.init();
    }
};

document.addEventListener("DOMContentLoaded", ()=>app.init());