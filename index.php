<?php
include_once "Controller/InoteController.php";
//include_once "Controller/AuthController.php";
//include_once "Controller/NoteManagementController.php";


//session_star();

$inoteController = new InoteController();
//$authController = new AuthController();
//$notemanagementController = new NoteManagementController();

$page = (isset($_GET["page"])?$_GET["page"]:"");
//$username = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
<body>
<div class="navbar">
<!--    <p>Name: --><?php //echo $username; ?><!--</p>-->
<!--    <a href="index.php?page=logout">Logout</a>-->
    <a href="index.php?page=notes-list">Inotes</a>
<!--    <a href="index.php?page=notemanagements-list">NoteManagements</a>-->
</div>
<?php
switch ($page) {
    case "notes-list":
        $inoteController->index();
        break;

//    case "notemanagements-list":
//        $notemanagementController->index();
//        break;


    case "notes-add":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            //show form add
            $inoteController->showFormAdd();
        } else {
            $inoteController->add($_REQUEST);
        }
        break;
    case "notes-update":
        $id = $_GET["id"];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $inoteController->showFormUpdate();
        } else {
            $inoteController->editInote($id, $_REQUEST);
        }

        break;
    case "notes-delete":
        $inoteController->deleteInotes($_REQUEST["id"]);
        break;


//    case "login":
//        if ($_SERVER["REQUEST_METHOD"] == "GET") {
//            $authController->showFormLogin();
//        } else {
//            $authController->login($_REQUEST);
//        }
//        break;
//    case "logout":
//        $authController->logout();
//        break;
    default:
        $inoteController->index();
}
?>
</body>
</html>
