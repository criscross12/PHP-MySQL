<?php

    class Alumnos_model{
        private $db;
        private $alumnos;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->alumnos = array();
        }

        public function get_Alumnos(){
            $sql = "SELECT Nombre, IdUsuario FROM `usuarios` WHERE TipoUsuario = 3";
            $result = $this->db->query($sql);
            while ($row = $result->fetch_assoc()) {
                $this->alumnos[] = $row;
            }
            return $this->alumnos;
        }
     

    }