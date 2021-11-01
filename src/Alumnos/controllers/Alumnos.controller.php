<?php

    class AlumnosController{
        public function index(){

            require_once "models/Alumnos.model.php";
            $alumno = new Alumnos_model();
            $data["Nombre"] = "Alumnos";
            $data["IdUsuario "] = $alumno->get_Alumnos();

            require_once "views/Alumnos/Alumnos.php";
            
        }

        public function error(){
            include_once("../views/Alumnos.php");
        }

        public function create(){
            
        }

        public function update(){

        }

        public function Delete(){
            //code here
        }
    }

?>