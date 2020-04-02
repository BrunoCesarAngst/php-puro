<?php 
    class UsersController {
        public function validateLogin(){
            $login = $_POST["login"];
            require("models/UsersModel.php");
            $User = new UsersModel();
            $User -> consultUser($login);
            $result = $User -> getsQuery();

            if ($line = $result -> fetch_assoc()){
                if ($line["pass"] == $_POST["pass"]){
                    $_SESSION["idUser"] = $line["idUser"];
                    $_SESSION["login"] = $line["login"];
                    $_SESSION["name"] = $line["name"];

                    header("Location: index.php?c=m&a=i");
                } else {
                    $alert = "Senha Errada";
                    require "views/auth/login.php";
                }
            } else {
                $alert = "Não exite";
                require "views/auth/login.php";
            }
        }
    }
?>