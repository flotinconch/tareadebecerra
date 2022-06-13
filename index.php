<?php
   

    /////////////////////////////////////////////
    //                 CONTROLLER              //
    /////////////////////////////////////////////
    require_once("controller/userController.php");
    require_once("controller/templateController.php");
    require_once("controller/aprendizController.php");
    require_once("controller/matriculaController.php");
    
    /////////////////////////////////////////////
    //                   MODEL                 //
    /////////////////////////////////////////////
    require_once("model/dao/userDao.php");
    require_once("model/dto/userDto.php");
    require_once("model/dao/aprendizDao.php");
    require_once("model/dto/aprendizDto.php");
    require_once("model/dao/matriculaDao.php");
    require_once("model/dto/matriculaDto.php");

  /////////////////////////////////////////////
    //                 CONEXION                //
    /////////////////////////////////////////////
    require_once("model/conexion.php");

     /////////////////////////////////////////////
                    /* run */
    $objArranque = new Template();
    $objArranque -> getIntro();
    
?>