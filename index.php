<?php
require_once '../src/config/database.php';
require_once '../src/controllers/ContactController.php';
require_once '../src/controllers/EventController.php';

$controller = null;

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'about':
            require '../src/views/about.php';
            break;
        case 'contact':
            $controller = new ContactController();
            $controller->showContactPage();
            break;
        case 'events':
            $controller = new EventController();
            $controller->showEventsPage();
            break;
        default:
            require '../src/views/home.php';
            break;
    }
} else {
    require '../src/views/home.php';
}
?>