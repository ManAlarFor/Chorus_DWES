<?php 

    class Usuario{

        public int $id; 
        public string $nombre ;
        public string $apellido ;
        public string $correo ;
        public string | null $perfil ;
        public string | null $descripcion ;
        public int $edad ; 
        public array | null $funcion ; 
        
        /**
         * __construct
         *
         * @param  mixed $id
         * @param  mixed $nombre
         * @param  mixed $apellido
         * @param  mixed $correo
         * @param  mixed $perfil
         * @param  mixed $edad
         * @param  mixed $descripcion
         * @return void
         */
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