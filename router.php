<?php
switch (htmlspecialchars($_GET['p'] ?? "home")) {
    case 'home':
        include "pages/home.view.php";
        break;
    case 'add-task':
        include "pages/add-task.view.php";
        break;
    default:
        include "pages/error.view.php";
}