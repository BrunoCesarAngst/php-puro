<?php 
    class MainController {
        public function index () {
            if (!isset($_SESSION["login"])) {
                header("Location: ?c=m&a=l");
            }
            require "views/header.php";
            require "views/home.php";
            require "views/footer.php";
        }

        public function login () {
            require "views/auth/login.php";
        }

        public function sessionDestroy() {
            session_destroy();
            header("Location: index.php?c=m&a=l");
        }
    }
?>