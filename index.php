<?php
include_once "Controller/InoteController.php";


session_start();
$page = (isset($_GET["page"])?$_GET["page"]:"");

$inoteController = new InoteController();

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
    <a href="index.php?page=notes-list">Inotes</a>
</div>
<?php
switch ($page) {
    case "notes-list":
        $inoteController->index();
        break;
    case "notes-create":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            //show form create
            $inoteController->showFormCreate();
        } else {
            //tao san pham
            $inoteController->create($_REQUEST);
        }
        break;
    case "notes-update":
        $id = $_GET["id"];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $inoteController->showFormUpdate();
        } else {
            $inoteController->editProduct($id, $_REQUEST);
        }

        break;
}

?>
</body>
</html>
