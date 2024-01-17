<?php
class ProjectController extends Controller
{

    public function index($error = "")
    {
        if (isUserLogged()) {
            if (isset($_SESSION["user-id"])) {
                $user_id = $_SESSION["user-id"];
            } else {
                echo "User ID not found in the session.";
            }
            $this->view("project/project", "", ["error" => $error,"project" => $this->displayproject($user_id)]);
            $this->view->render();
        } else {
            redirect('user/log_in');
        }
    }
    public function addproject($error = "")
    {
        
        $this->view("project/addproject", "", ["error" => $error]);
        $this->view->render();
    }

    public function Add_project()
    {
        if (isset($_POST["submit"])) {
            $name = $_POST["nameprojet"];
            $startdate = $_POST["startdate"];
            $enddate = $_POST["enddate"];
            if (isset($_SESSION["user-id"])) {
                $user_id = $_SESSION["user-id"];
            } else {
                echo "User ID not found in the session.";
            }

            $this->model("project");
            $Name = $this->validateData($name);
            $this->model->setName($Name);
            $startDate = $this->validateData($startdate);
            $this->model->setstartDate($startDate);
            $endDate = $this->validateData($enddate);
            $this->model->setendDate($endDate);
            $addproject = $this->model->addproject($user_id);

            if ($addproject) {
                $this->index("Project Added Successfully!");
                exit;
            } else {
                $this->index("project/project");
            };
        }
    }
    // display project:
    public function displayproject($user_id)
    {
        $this->model("project");
        $project = $this->model->getprojects($user_id);
     
        return $project;
    }
    // updateproject:
    public function displayprojectRow($id)
    {
        $this->model("project");
        $this->model->setid($id);
        $project = $this->model->getprojectRow($id);
        return $project;
    }
    public function updateproject($id, $error = "")
    {
        if (isUserLogged()) {
        $project = $this->displayprojectRow($id);
        $this->view("project/updateproject", "", ["error" => $error, "project" => $project]);
        $this->view->render();
        } else {
            redirect('user/log_in');
        }
    }
    public function update_project()
    {
        if (isset($_POST["submit"])) {
            $name = $_POST["nameprojet"];
            $startdate = $_POST["startdate"];
            $enddate = $_POST["enddate"];
            $id = $_POST["id"];
            if (isset($_SESSION["user-id"])) {
                $user_id = $_SESSION["user-id"];
            } else {
                echo "User ID not found in the session.";
            }

            $this->model("project");
            $id=$this->validateData($id);
            $this->model->setid($id);
            $Name = $this->validateData($name);
            $this->model->setName($Name);
            $startDate = $this->validateData($startdate);
            $this->model->setstartDate($startDate);
            $endDate = $this->validateData($enddate);
            $this->model->setendDate($endDate);
            $updateProject = $this->model->updateProject();

            if ($updateProject) {
                redirect("project");
                exit;
            } else {
                $this->updateproject($id, "Failed to update project.");
            }
        }
    }
    // delet project:
    public function delete_project($id)
    {
        $this->model("project");
        $this->model->setid($id);
        $result = $this->model->deleteproject();
        redirect("project");
    }
    public function validateData($data)
    {
        if (isset($data) and !empty($data)) {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }
}
