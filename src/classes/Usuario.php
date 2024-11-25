<?php 

    class Usuario{

        public string $nombre ;
        public string $apellido ;
        public string $correo ;
        public string $perfil ;
        public int    $edad ;

        public function __construct($nombre, $apellido, $correo, $perfil, $edad){

            $this->nombre = $nombre ;
            $this->apellido = $apellido ;
            $this->correo = $correo ;
            $this->perfil = $perfil ;
            $this->edad = $edad ;

        }

    }

?>