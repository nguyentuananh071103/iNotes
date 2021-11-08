<?php
include_once "Model/NoteModel.php";
$noteModel = new NoteModel();

if (isset($_GET["id"])){
    $id = $_GET["id"];
    if ($noteModel->getById($id)!== null){
        $notes = $noteModel->delete($id);
        header("location:index.php");
    }
}
