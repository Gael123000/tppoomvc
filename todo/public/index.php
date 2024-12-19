<?php
if (!file_exists(__DIR__ . '/../core/Database.php')) {
    die("Fichier Database.php introuvable !");
}
require_once __DIR__ . '/../core/Database.php';

if (!file_exists(__DIR__ . '/../core/Router.php')) {
    die("Fichier Router.php introuvable !");
}
require_once __DIR__ . '/../core/Router.php';

if (!file_exists(__DIR__ . '/../app/models/Task.php')) {
    die("Fichier Task.php introuvable !");
}
require_once __DIR__ . '/../app/models/Task.php';

if (!file_exists(__DIR__ . '/../app/controllers/TaskController.php')) {
    die("Fichier TaskController.php introuvable !");
}
require_once __DIR__ . '/../app/controllers/TaskController.php';
$router = new Router();
$router->add('/', [new TaskController, 'index']);
$router->add('/create', [new TaskController, 'create']);
$router->add('/complete', function () {
    $id = $_POST['id'] ?? null;
    (new TaskController)->markAsCompleted($id);
});
$router->add('/delete', function () {
    $id = $_POST['id'] ?? null;
    (new TaskController)->delete($id);
});
$router->dispatch();

