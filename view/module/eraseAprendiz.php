<?php
    //echo "Llego";
    eraseAprendiz();

    function eraseAprendiz(){
        try {
            $objDtoAprendiz = new Aprendiz();
            $objDtoAprendiz -> setCodigo($_GET['codigo']);
            $objDaoAprendiz = new AprendizModel($objDtoAprendiz);
            if ($objDaoAprendiz -> mIderaseAprendiz() == true) {
                echo "
                    <script>
                        Swal.fire(
                            'Borrado!',
                            'El registro ha sido borrado',
                            'success'
                        )
                    </script>
                ";
                include_once("view/module/aprendiz.php");
            }
        } catch (PDOException $e) {
            echo "Error en el borrado del registro " . $e -> getMessage();
        }
    }
?>