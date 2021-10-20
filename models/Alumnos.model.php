<?php

    class Alumnos_model{
        private $db;
        private $alumnos;

        public function __construct(){
            $this->db = Conectar::conexion();
            $this->alumnos = array();
        }

        public function get_Alumnos(){
            $sql = "";
        }

    }