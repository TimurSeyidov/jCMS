<?php
    class MainController extends CController{
        public function actionIndex(){
            $this->render("index", array("a" => "sdf"));
        }
        
    }
?>
