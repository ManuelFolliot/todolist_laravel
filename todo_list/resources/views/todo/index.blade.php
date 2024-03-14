<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Todo List</title>
</head>

<body>
    <header>
        <h1>Liste des tâches à accomplir</h1>
    </header>
    <main>
        <button name="add-task-button" id="add-task-button">
            Ajouter une tâche
        </button>
        <div id="tasksListContainer">
            <ul>

            </ul>
        </div>
    </main>
    <script type="module" src="{{ asset('js/app.js') }}"></script>
</body>

</html>
