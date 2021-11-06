<?php
include_once "Model/NoteModel.php";
class InoteController
{
    private $noteModel;

    public function __construct()
    {
        $this->noteModel = new NoteModel();
    }

    public function index()
    {
        $notes = $this->noteModel->getAll();
        include_once "View/Inotes/list.php";
    }
    public function showFormCreate()
    {
        include_once "View/Inotes/add.php";
    }

    public function create($data)
    {
//        $filepath = "";
//        if (isset($_FILES["file"])) {
//            $filepath = "uploads/" . $_FILES["file"]["name"];
//            if (move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) {
//                echo "<img src=" . $filepath . " height=200 width=300 />";
//            } else {
//                echo "Error !!";
//            }
//        }
//        $data2 = [
//            "name" => $data['name'],
//            "price" => $data['price'],
//            "description" => $data['desc'],
//            "image" => $filepath
//        ];
//
//        $this->noteModel->create($data2);
//        header("location:index.php");
    }

    public function showFormUpdate()
    {
        include_once "View/Inotes/update.php";
    }

    public function editProduct($id, $request)
    {
//        $product = $this->productModel->getById($id);
//
////        if ($_SERVER['REQUEST_METHOD']== "POST"){
//        $data = [
//            "name" => $request['name'],
//            "price" => $request['price'],
//            "description" => $request['desc'],
//            "id" => $id
//        ];
//        $this->productModel->edit($data);
//        header("location:index.php");
////        }
    }
}