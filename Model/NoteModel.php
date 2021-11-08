<?php
include_once "database/DB.php";
include_once "BaseModel.php";

class NoteModel extends BaseModel
{
    protected $table = "notes";

    public function add($data)
    {
        $sql = "INSERT INTO $this->table (`title`,`content`) VALUE(?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["title"]);
        $stmt->bindParam(2, $data["content"]);
        $stmt->execute();
    }

    public function edit($data)
    {
        try {
            $sql = "UPDATE $this->table SET `title`  = ?,`content`=? WHERE `type_id` = ?";
            $stmt = $this->dbConnect->prepare($sql);
            $stmt->bindParam(1, $data["title"]);
            $stmt->bindParam(2, $data["content"]);
            $stmt->bindParam(3, $data["type_id"]);
            $stmt->execute();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
}