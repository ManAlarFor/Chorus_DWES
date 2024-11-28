<?php 

    class Usuario{

        public string $nombre ;
        public string $apellido ;
        public string $correo ;
        public string | null $perfil ;
        public string | null $descripcion ;
        public int      $id; 
        public int      $edad ; 
        public array | null $funcion ; 

        public function __construct($id, $nombre, $apellido, $correo, $perfil, $edad, $descripcion){

            $this->id = $id ;
            $this->nombre = $nombre ;
            $this->apellido = $apellido ;
            $this->correo = $correo ;
            $this->perfil = $perfil ;
            $this->edad = $edad ;
            $this->descripcion = $descripcion ;

        }

        public function getFuncion($funcion) {
            $this->funcion = $funcion ;
        }

    }

?>