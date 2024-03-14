import serveur from "./serveur.js";

const task = {
    init: async function(){
        this.taskListContainerElement = document.querySelector("#tasksListContainer");
        try{
            const tasks = await serveur.getTasks();
            this.showTasks(tasks);
        }catch(error){
            alert(error.message);
        }
    },
    showTasks: function(tasks){
        console.log(tasks.data);
        const fragmentElement = document.createDocumentFragment();

        for(const task of tasks.data){
            const taskElement = this.createTaskElement(task);
            fragmentElement.append(taskElement);
        }

        this.taskListContainerElement.append(fragmentElement);
    },
    createTaskElement: function(task){
        const liElement = document.createElement("li");
        const pElement = document.createElement("p");
        const deleteElement = document.createElement("div");

        pElement.textContent = task.name;
        liElement.append(pElement);

        return liElement;
    },
    handleClickDelete: async function(event, id){
        try{
            const article = event.currentTarget.parentElement;
            await serveur.deleteTask(id);
            article.remove();
        }catch(error){
            alert(error.message);
        }
    }
}

export default task;