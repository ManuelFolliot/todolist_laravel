import './bootstrap';
import task from './task';
const app = {
    init: async function(){
        task.init();
    }
};

document.addEventListener("DOMContentLoaded", ()=>app.init());