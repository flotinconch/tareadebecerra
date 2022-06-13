<?php
    session_start();

    class template{

        public function getIntro(){
            if (isset($_SESSION['login'])==true){
                require_once("view/template.php");
            }else {
                require_once("view/module/login.php");
            }
            
        }
    }

?>