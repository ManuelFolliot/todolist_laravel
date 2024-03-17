import task from "./task.js";
import serveur from "./serveur.js";
const form = {
    init: async function(){
        this.addTaskButtonElement = document.querySelector("#add-task-button");
        this.formContainerElement = document.querySelector(".form-container");
        this.formElement = document.querySelector("form");
        this.inputTitleElement = document.querySelector("#task-name");
        this.selectCategoryElement = document.querySelector("#category");

        try{
            await this.loadCategories();
        }catch(error){
            alert(error.message);
        }
    },
    loadCategories: async function(){
        try{
            const categories = await serveur.getCategories();
            for(const category of categories.data){
                const option = document.createElement("option");
                option.value = category.id;
                option.textContent = category.name;
                this.selectCategoryElement.append(option);
            }
        }catch(error){
            throw new Error(error.message);
        }
    }
}