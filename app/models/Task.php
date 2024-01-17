<?php
class Task
{
    private $idTask;
    private $titleTask;
    private $descTask;
    private $deadline;
    private $status;
    public $conn;

    function __construct()
    {
        $Dbinstance = new Db();
        $this->conn = $Dbinstance->connect();
    }
    public function getIdta()
    {
        return $this->idTask;
    }

    public function setIdta($idTask)
    {
        $this->idTask = $idTask;
    }
    public function getTitle()
    {
        return $this->titleTask;
    }

    public function setTitle($titleTask)
    {
        $this->titleTask = $titleTask;
    }

    public function getDescta()
    {
        return $this->descTask;
    }

    public function setDescta($descTask)
    {
        $this->descTask = $descTask;
    }
    public function getDeadline()
    {
        return $this->deadline;
    }

    public function setdeadline($deadline)
    {
        $this->deadline = $deadline;
    }
    public function getStatut()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }


    public function addTask($user_id, $project_id)
    {
        // $user_id = $_SESSION["user-id"];
        $stmt = $this->conn->prepare("INSERT INTO task (title,description,status,deadline,user_id,id_project) values(:title,:description,:status,:deadline,:user_id,:id_project)");
        $stmt->bindParam(':title', $this->titleTask);
        $stmt->bindParam(':description', $this->descTask);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':deadline', $this->deadline);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':id_project', $project_id);
        if ($stmt->execute()) {
            return true;
        }
    }
    public function getTasks($user_id, $project_id)
    {
        try {
            // $user_id = $_SESSION["user-id"];
            // $project_id = $_SESSION["idproject"];
            $stmt = $this->conn->prepare("SELECT * FROM task where user_id=:user_id and id_project=:id_project and archive is null ORDER BY deadline DESC");
            $stmt->bindParam(":user_id", $user_id);
            $stmt->bindParam(":id_project", $project_id);
            $stmt->execute();
            $data = $stmt->fetchAll();
            if (count($data) > 0) {
                return $data;
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function Archive($idTask)
    {
        try {
            $stmt = $this->conn->prepare("UPDATE task set archive=1 where id_task=:id_task");
            $stmt->bindParam(":id_task", $idTask);
            if ($stmt->execute()) {
                return
                    $stmt->execute();
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function gettaskRow($id)
    {
        try {
            $id = $this->getIdta();
            $stmt = $this->conn->prepare("SELECT * FROM task WHERE id_task =$id");
            if ($stmt->execute()) {
                return $stmt->fetch();
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function updateTask($id)
    {
        try {
            $id = $this->getIdta();
            $user_id = $_SESSION["user-id"];
            $project_id = $_SESSION["idproject"];
            $stmt = $this->conn->prepare("UPDATE task SET title=:title, description=:desc, status=:status, deadline=:deadline, user_id=:user_id, id_project=:id_project WHERE id_task=:id");
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(':title', $this->titleTask);
            $stmt->bindParam(':desc', $this->descTask);
            $stmt->bindParam(':status', $this->status);
            $stmt->bindParam(':deadline', $this->deadline);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':id_project', $project_id);
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function statistictask($status)
    {
        try {
            $stmt = $this->conn->prepare("SELECT count(id_task) from task where status=:status");
            $stmt->bindParam("status", $status);
            if ($stmt->execute()) {
                return $stmt->fetchColumn();
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function searchTask()
    {
        try {
            $this->titleTask = "%{$this->titleTask}%";
            $this->descTask = "%{$this->descTask}%";

            $stmt = $this->conn->prepare("SELECT * FROM task WHERE title LIKE :title OR description LIKE :desc AND archive is null");
            $stmt->bindParam(':title', $this->titleTask);
            $stmt->bindParam(':desc', $this->descTask);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $result = $stmt->fetchAll();
                return $result;
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function taskProject()
    {
        try {
            $stmt = $this->conn->prepare("SELECT project.name, COUNT(id_task) AS numberoftask FROM task JOIN project ON task.id_project = project.idproject GROUP BY id_project ORDER BY numberoftask DESC LIMIT 1;");
            if ($stmt->execute()) {
                return $stmt->fetch();
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function taskDone()
    {
        try {
            $stmt = $this->conn->prepare("SELECT project.name, COUNT(id_task) AS numberoftaskdone FROM task JOIN project ON task.id_project = project.idproject where status='done' GROUP BY id_project ORDER BY numberoftaskdone DESC LIMIT 1");
            if ($stmt->execute()) {
                return $stmt->fetch();
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function taskProjectth()
    {
        try {
            $stmt = $this->conn->prepare("SELECT project.name, COUNT(id_task) AS numberoftaskdone FROM task JOIN project ON task.id_project = project.idproject where status='done' GROUP BY id_project ORDER BY numberoftaskdone ASC LIMIT 1");
            if ($stmt->execute()) {
                return $stmt->fetch();
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function task()
    {
        try {
            $stmt = $this->conn->prepare("SELECT project.name, COUNT(id_task) AS numberoftaskdone
            FROM task
            JOIN project ON task.id_project = project.idproject
            WHERE status IN ('to do', 'in progress')
            GROUP BY id_project
            ORDER BY numberoftaskdone DESC
            LIMIT 1;
            ");
            if ($stmt->execute()) {
                return $stmt->fetch();
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
