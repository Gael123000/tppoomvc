<head>
    <title>Projet</title>
    <link href="style.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/55ca7da4ba.js" crossorigin="anonymous"></script>
<!--    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="">
    <div class="d-flex justify-content-center" id="bghead">
        <h1 class="">Liste des projets</h1>
    </div>
    <div class="d-flex justify-content-center position-fixed bg-white top-50 start-50 translate-middle flex-column rounded-5 shadow-lg" style="width: 900px; height: 500px; background-color: rgba(237,238,239,0.51);">
        <div class="m-3">
            <a href="/createProject" class="btn btn-primary">Créer un projet <i class="fa-solid fa-pen-to-square"></i></a>
        </div>
        <div class=" m-4 h-100 overflow-auto">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
<!--                    <th>Action</th>-->
                </tr>
                </thead>
                <tbody>
                <?php foreach ($projects as $project): ?>
                    <tr>
                        <td><?= $project['id'] ?></td>
                        <td><?= $project['name'] ?></td>
                        <td><?= $project['description'] ?></td>
<!--                        <td>-->
<!--                            --><?php //if (!$project['is_completed']): ?>
<!--                                <form method="POST" action="/complete">-->
<!--                                    <input type="hidden" name="id" value="--><?php //=$project['id']?><!--">-->
<!--                                    <button type="submit" class="btn btn-success">Terminée <i class="fa-solid fa-check"></i></button>-->
<!--                                </form>-->
<!--                            --><?php //endif; ?>
<!--                            <form method="POST" action="/delete">-->
<!--                                <input type="hidden" name="id" value="--><?php //=$project['id']?><!--">-->
<!--                                <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></button>-->
<!--                            </form>-->
<!--                        </td>-->
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

