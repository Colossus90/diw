<?php
/**
 * Created by PhpStorm.
 * User: Jens Mollen
 * Date: 5/22/2016
 * Time: 5:25 PM
 */

    class User
    {
        //member variabelen
        private $m_sUserName;
        private $m_sEmail;
        private $m_sPassword;


        // SETTER
        public function __set($p_sProperty, $p_vValue)
        {
            switch ($p_sProperty) {
                case "Username":
                    $this->m_sUserName = $p_vValue;
                    break;
                case "Password":
                    $this->m_sPassword = $p_vValue;
                    break;
                case "Email":
                    $this->m_sEmail = $p_vValue;
                    break;
            }
        }

        // GETTER
        public function __get($p_sProperty)
        {
            $vResult = null;
            switch ($p_sProperty) {
                case "Username":
                    $vResult = $this->m_sUserName;
                    break;
                case "Email":
                    $vResult = $this->m_sEmail;
                    break;
                case "Password":
                    $vResult = $this->m_sPassword;
                    break;
            }
            return $vResult;
        }

        public function login()
        {
            $conn = new PDO('mysql:host=localhost;dbname=diw', "root", "");
            $query = $conn->prepare("SELECT * from users where username = :username");
            $query->bindValue(":username", $this->m_sUserName);
            $query->execute();
            if ($query->rowCount() > 0) {
                $result = $query->fetch(PDO::FETCH_ASSOC);
                $_SESSION['id'] = $result['id'];
                $_SESSION['username'] = $result['username'];
                $password = $this->m_sPassword;
                $hash = $result['password'];
                if (password_verify($password, $hash)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        public function register()
        {
            try{
                $conn = new PDO('mysql:host=localhost;dbname=diw', "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

                $stmt = $conn->prepare("INSERT INTO users (username, email, password) values (:username, :email, :password )");
                $stmt->bindValue(":username", $this->Username);
                $stmt->bindValue(":email", $this->Email);
                $options = ['cost' => 12];
                $password = password_hash($this->m_sPassword, PASSWORD_DEFAULT, $options);
                $stmt->bindValue(":password", $password);
                $stmt->execute();

                //die(json_encode(array('outcome' => true)));
            }
            catch(PDOException $ex){
                die(json_encode(array('outcome' => false, 'message' => $ex)));
            }
        }
    }
?>