<head>
    <title>Gestion des tâches</title>
<!--    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="font-mono">
    <div class="container ">
        <h1 class="flex container justify-center p-5 font-semibold text-4xl">Liste des tâches</h1>
    </div>
    <div class="w-full max-w-96 bg-gray-200">
    <a href="/create" class="bg-cyan-900 rounded-lg">Ajouter une tâche</a>
<!--        <div>-->
            <table class="table-auto">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tasks as $task): ?>
                    <tr>
                        <td><?= $task['id'] ?></td>
                        <td><?= $task['title'] ?></td>
                        <td><?= $task['is_completed'] ? 'Terminée' : 'En cours' ?></td>
                        <td>
                            <?php if (!$task['is_completed']): ?>
                                <form method="POST" action="/complete">
                                    <input type="hidden" name="id" value="<?=$task['id']?>">
                                    <button type="submit">Marquer comme terminée</button>
                                </form>
                            <?php endif; ?>
                            <form method="POST" action="/delete">
                                <input type="hidden" name="id" value="<?=$task['id']?>">
                                <button type="submit">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
<!--        </div>-->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

