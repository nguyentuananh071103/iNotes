<?php
include_once "Controller/InoteController.php";
include_once "Controller/AuthController.php";

//session_star();

$inoteController = new InoteController();
$authController = new AuthController();

$page = (isset($_GET["page"])?$_GET["page"]:"");
$username = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <style>
            body{
                background-color: #627CCA;
            }
        </style>
    </head>
<body>
<div class="navbar">

</div>
<?php
switch ($page) {
    case "notes-list":
        $inoteController->index();
        break;

    case "notes-add":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
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


    case "login":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $authController->showFormLogin();
        } else {
            $authController->login($_REQUEST);
        }
        break;
    case "logout":
        $authController->logout();
        break;

    case "register":
         if ($_SERVER["REQUEST_METHOD"] == "GET") {
             $authController->showFormRegister();
         }else {
          $authController->register($_REQUEST);
         }
        break;


    default:
        $inoteController->index();
}
?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
