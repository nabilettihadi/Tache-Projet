<?php


class UserController extends Controller
{
    public function index($error = "")
    {
        $this->view("signup", "", ["error" => $error]);
        $this->view->render();
    }
    public function log_in($error = "")
    {
        $this->view("login", "", ["error" => $error]);
        $this->view->render();
    }
    public function home($error = "")
    {

        $this->view("task/home", "", ["error" => $error]);
        $this->view->render();
    }
    public function project($error=""){
        $this->view("project/project", "", ["error" => $error]);    
        $this->view->render();
    }
    public function Usersignup()
    {
        if (isset($_POST["submit"])) {
            $firstName =  $_POST["firstname"];
            $lastName = $_POST["lastname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $data = array(
                "f_name" => $this->validateData($firstName, 'name'),
                "l_name" => $this->validateData($lastName, 'name'),
                "email" => filter_var($this->validateData($email, 'email'), FILTER_SANITIZE_EMAIL),
                "password" => password_hash($this->validateData($password, 'password'), PASSWORD_DEFAULT),
            );

            $this->model("user");
            $first_Name = $this->validateData($firstName, 'name');
            $this->model->setfirstName($first_Name);
            $last_Name = $this->validateData($lastName, 'name');
            $this->model->setlastName($last_Name);
            $e_mail= filter_var($this->validateData($email, 'email'), FILTER_SANITIZE_EMAIL);
            $this->model->setemail($e_mail);
            $hashedPassword = password_hash($this->validateData($password, 'password'), PASSWORD_DEFAULT);
            $this->model->setpassword($hashedPassword);

            $existed_Persone = $this->model->validateUser();

            if ($existed_Persone) {
                $this->index("This Email Already Exist!");
                exit;
            } else {
                redirect("user/log_in");}

            // Sign up the user
            $this->model->Signup();
        }
    }

    public function validateData($data, $dataType)
    {
        // regex 
        switch ($dataType) {
            case 'name':
                $pattern = '/^[A-Za-z ]{3,}$/';
                break;
            case 'email':
                $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
                break;
            case 'password':
                $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/';
                break;
            default:
                break;
        }
        if (isset($data) && !empty($data)) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            if (preg_match($pattern, $data))
                return $data;
        }

        return false;
    }
    public function Userlogin()
    {
        if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            $this->model("user");

            $this->model->setemail($email);
           $this->model->setpassword($password);


            $user = $this->model->logIn();
            if ($user !== false && $email= $user['email']&& password_verify($password, $user['password'])) {
                $_SESSION['authorize'] = true;
                $_SESSION["user-id"] = $user["iduser"];
                $_SESSION["name-id"] = $user["firstname"];

               
                redirect("project");
            } else {
                $this->log_in("This account does not exist or the password is incorrect.");
                exit;
            }
        } else {
            header("Location: http://localhost/DataWare_Version3//public/home/");
        }
    }
    public function logout()
    {

        if (session_destroy()) {
            redirect('user/log_in');
        }
    }

}
