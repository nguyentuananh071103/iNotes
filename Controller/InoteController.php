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
        $types = $this->noteModel->getAll();
        $notes = $this->noteModel->getAll();
        include_once "View/Inotes/list.php";
    }

    public function showFormAdd()
    {
        include_once "View/Inotes/add.php";
    }

    public function add($data)
    {
        $data2 = [
            "title" => $data['title'],
            "content" => $data['content'],
            "description" => $data['desc']
        ];
        $this->noteModel->add($data2);
        header("location:index.php");
    }

    public function deleteInotes($id)
    {
        if ($this->noteModel->getById($id) !== null) {
            $this->noteModel->delete($id);
            header("location:index.php");
        }
    }

    public function showFormUpdate()
    {
        $id = $_REQUEST["id"];
        $note = $this->noteModel->getById($id);
        include_once "View/Inotes/update.php";
    }
    public function editInote($id, $request){
        $notes = $this->noteModel->getById($id);

        $data = [
            "title" => $request['title'],
            "content" => $request['content'],
//            "description" =>$request['desc'],
            "id" => $id
        ];
        $this->noteModel->edit($data);
        header("location:index.php");
    }

}
