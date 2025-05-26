<?php
class LivroLido {
    public function __construct(
        private int $id = 0,
        private int $usuario_id = 0,
        private string $google_book_id = '',
        private string $titulo = '',
        private string $autor = '',
        private string $capa_url = '',
        private string $data_leitura = ''
    ){}

        public function getId() {
            return $this->id;   
        }
        public function getUsuarioId() {
            return $this->usuario_id;   
        }
        public function getGoogleBookId() {
            return $this->google_book_id;   
        }
        public function getTitulo() {
            return $this->titulo;   
        }
        public function getAutor() {
            return $this->id;   
        }
        public function getCapaUrl() {
            return $this->id;   
        }
        public function getDataLeitura() {
            return $this->id;   
        }
    
}

?>
