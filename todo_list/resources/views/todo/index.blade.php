<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Todo List</title>
</head>

<body class="container">
    <header>
        <h1>Liste des tâches à accomplir</h1>
    </header>
    <main>
        <button name="add-task-button" id="add-task-button">
            Ajouter une tâche
        </button>
        <ul id="tasksListContainer">

        </ul>
        <div class="form-container">
            <form>
                <h2>Nouvelle tâche</h2>
                <label for="task-name">Nom de la tâche</label>
                <input name="id" id="task-id" type="hidden">
                <input name="name" id="task-name" placeholder="nom de la tâche" type="text" required>
                <select name="category" id="category">

                </select>
                <button>Ajouter</button>
            </form>
        </div>

    </main>
    <script type="module" src="{{ asset('js/app.js') }}"></script>
</body>

</html>
