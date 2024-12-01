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


        /**
         * @param  string|null $funcion
         * @return void
         */
        public function setFuncion($funcion) {
            $this->funcion = $funcion ;
        }


        /**
         * @param  string $nombre
         * @return void
         */
        public function setNombre($nombre) {
            $this->nombre = $nombre ;
        }


        /**
         * @param  string $apellido
         * @return void
         */
        public function setApellido($apellido) {
            $this->apellido = $apellido ;
        }


        /**
         * @param  int $edad
         * @return void
         */
        public function setEdad($edad) {
            $this->edad = $edad ;
        }


        /**
         * @param  string $correo
         * @return void
         */
        public function setCorreo($correo) {
            $this->correo = $correo ;
        }


        /**
         * @param  string $descripcion
         * @return void
         */
        public function setDescripcion($descripcion) {
            $this->descripcion = $descripcion ;
        }


        /**
         * @param  string $perfil
         * @return void
         */
        public function setPerfil($perfil) {
            $this->perfil = $perfil ;
        }


    }

?>