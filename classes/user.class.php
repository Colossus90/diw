<?php
/**
 * Created by PhpStorm.
 * User: Jens Mollen
 * Date: 5/22/2016
 * Time: 5:25 PM
 */

    class User {
        //member variabelen
        private $m_sUserName;
        private $m_sEmail;
        private $m_sPassword;


        // SETTER
        public function __set($p_sProperty, $p_vValue)
        {
            switch($p_sProperty) {
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
            switch($p_sProperty)
            {
                case "UserName":
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
            $conn = new PDO('mysql:host=localhost;dbname=diw', "root", "root");
        }

        public function register()
        {
            $conn = new PDO('mysql:host=localhost;dbname=diw', "root", "root");
        }

}










?>