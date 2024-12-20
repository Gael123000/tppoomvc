<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<div class="d-flex justify-content-center">
    <h1>Ajouter une tâche</h1>
</div>
<div class="d-flex flex-row-reverse justify-content-center align-items-center">
    <form method="POST">
        <label for="title" class="form-label">Titre :</label>
        <input type="text" name="title" class="form-control" required>
        <label for="description" class="form-label">Description :</label>
        <input type="text" name="description" class="form-control" required>
        <button type="submit" class="btn btn-primary mt-4 ms-5">Ajouter</button>
    </form>
</div>
