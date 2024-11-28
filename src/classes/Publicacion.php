<?php 

    class Publicacion {

        protected int $id ;
        protected string $titulo ;
        protected string $contenido ;
        protected string | null $imagen ;
        
        /**
         * __construct
         *
         * @param  mixed $id
         * @param  mixed $titulo
         * @param  mixed $contenido
         * @param  mixed $imagen
         * @return void
         */
        public function __construct($id, $titulo, $contenido, $imagen){

            $this->id = $id ;
            $this->titulo = $titulo ;
            $this->contenido = $contenido ;
            $this->imagen = $imagen ;

        }

    }

?>