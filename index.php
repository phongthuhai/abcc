<?php
require_once 'app/controllers/SinhVienController.php';

$controller = new SinhVienController();
$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($action == 'create') $controller->create();
elseif ($action == 'store') $controller->store();
elseif ($action == 'edit') $controller->edit($id);
elseif ($action == 'update') $controller->update($id);
elseif ($action == 'delete') $controller->delete($id);
elseif ($action == 'detail') $controller->detail($id);
else $controller->index();
