import serveur from "./serveur";

const task = {
    init: async function(){
        console.log("Init called");
        this.taskListContainerElement = document.querySelector("#taskListContainer");
        try{
            const tasks = await serveur.getTasks();
            this.showTasks(tasks);
        }catch(error){
            alert(error.message);
        }
    },
    showTasks: function(tasks){
        console.log(tasks);
    }
}

export default task;