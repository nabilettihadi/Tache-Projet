 <?php
    class User extends Db
    {
        private $firstName;
        private $lastName;
        private $email;
        private $password;
    
        // getters
        public function getfirstName()
        {
            return $this->firstName;
        }
        public function getlasttName()
        {
            return $this->lastName;
        }
        public function getemail()
        {
            return $this->email;
        }
        public function getpassword()
        {
            return $this->password;
        }
        // setters
        public function setfirstName($firstName)
        {
            $this->firstName=$firstName;
        }
        public function setlastName($lastName)
        {
            $this->lastName = $lastName;
        }
        public function setemail($email)
        {
             $this->email=$email;
        }
        public function setpassword($password)
        {
             $this->password=$password;
        }
        //registeration function
        public function Signup()
        {
            try {
                $stmt = $this->connect()->prepare("INSERT INTO user (firstname,lastname,email,password) values(:firstname,:lastname,:email,:password)");
                $stmt->bindParam("firstname", $this->getfirstName());
                $stmt->bindParam("lastname", $this->getlasttName());
                $stmt->bindParam("email", $this->getemail());
                $stmt->bindParam("password", $this->getpassword());
                return  $stmt->execute();
             
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        public function validateUser()
        {
            try {
                $email= $this->getemail();
                $stmt = $this->connect()->prepare("SELECT email FROM `user` WHERE email =:email");
                $stmt->bindParam(":email",$email);
                $stmt->execute();
                if ($stmt->fetch()) {
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
        public function logIn()
        {
            try {
                $stmt = $this->connect()->prepare("SELECT * from user where email=:email");
                $stmt->execute(['email' => $this->getemail()]);
                return $stmt->fetch();
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }

    }
