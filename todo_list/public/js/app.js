// import './bootstrap';
import task from './task.js';
const app = {
    init: async function(){
        task.init();
    }
};

document.addEventListener("DOMContentLoaded", ()=>app.init());