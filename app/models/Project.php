<?php

class Project extends Db
{
    private $id;
    private $Name;
    private $startDate;
    private $endDate;

    public function getid()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->Name;
    }
    public function getstartDate()
    {
        return $this->startDate;
    }
    public function getendDate()
    {
        return $this->endDate;
    }
    // setters
    public function setid($id)
    {
        $this->id = $id;
    }
    public function setName($Name)
    {
        $this->Name = $Name;
    }
    public function setstartDate($startDate)
    {
        $this->startDate = $startDate;
    }
    public function setendDate($endDate)
    {
        $this->endDate = $endDate;
    }


    public function addproject($user_id)
    {
        $Name = $this->getName();
        $startDate = $this->getstartDate();
        $endDate = $this->getendDate();
        $user_id = $_SESSION["user-id"];

        $stmt = $this->connect()->prepare("INSERT INTO project (name, start_date, end_date, user_id) VALUES (:name, :start_date, :end_date, :user_id)");
        $stmt->bindParam(":name", $Name);
        $stmt->bindParam(":start_date", $startDate);
        $stmt->bindParam(":end_date", $endDate);
        $stmt->bindParam(":user_id", $user_id);

        if ($stmt->execute()) {
            return true;
        } else {

            return false;
        }
    }
    // getprojects:
    public function getprojects($user_id)
    {
        try {
            $user_id = $_SESSION["user-id"];
            $stmt = $this->connect()->prepare("SELECT * FROM project where user_id=:user_id");
            $stmt->bindParam(":user_id",$user_id);
            $stmt->execute();
            $data = $stmt->fetchAll();
            if (count($data) > 0) {
                return $data;
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function getprojectRow($id)
    {
        $id = $this->getid();
        try {
            $stmt = $this->connect()->prepare("SELECT * FROM project WHERE idproject =$id");
            if ($stmt->execute()) {
                return $stmt->fetch();
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function updateproject()
    {
        $id = $this->getid();
        $Name = $this->getName();
        $startDate = $this->getstartDate();
        $endDate = $this->getendDate();
        $user_id = $_SESSION["user-id"];
        try {
            $stmt = $this->connect()->prepare("UPDATE project SET idproject =:id,name = :name, start_date = :start_date, end_date = :end_date,user_id=:user_id WHERE idproject =:id");
            $stmt->bindParam(":name", $Name);
            $stmt->bindParam(":start_date", $startDate);
            $stmt->bindParam(":end_date", $endDate);
            $stmt->bindParam(":user_id", $user_id);
            $stmt->bindParam("id", $id);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    // delete project:
    public function deleteproject()
    {
        $id = $this->getid();
        try {
            $stmt = $this->connect()->prepare("DELETE FROM project WHERE idproject =:id");
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
