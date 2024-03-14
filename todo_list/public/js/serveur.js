const serveur = {
    url: "http://127.0.0.1:8000/api",
    getTasks: async function(){
        try{
            const response = await fetch(`${this.url}/tasks`);

            if(!response.ok){
                throw new Error(`Fetch failed: ${Response.status}`);
            }

            const tasks = await response.json();
            return tasks;

        }catch(error){
            throw new Error(error.message);
        }
    },
    deleteTask: async function(id){
        try{
            const response = await fetch(`${this.url}/tasks/${id}`, {
                method: "DELETE",
            });

            if(!response.ok){
                throw new Error(`Fetch failed : ${response.status}`);
            }

            return response;
            
        }catch(error){
            throw new Error(error.message);
        }
    }
}

export default serveur;