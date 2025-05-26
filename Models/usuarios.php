<?php
    class Usuarios {
        public function __construct(
            public int $id = 0,
            public string $nome = '',
            public string $email = '',
            public string $senha = '',
            public string $data_cadastro = '',
            public string $foto_perfil = '',
            public string $bio = '',
            public int $livros_lidos = 0,
            public int $livros_lendo = 0,
            public int $livros_desejados = 0
        ){}
        public function getId() {
            return $this->id;   
        }
        public function getNome() {
            return $this->nome;   
        }
        public function getEmail() {
            return $this->email;   
        }
        public function getSenha() {
            return $this->senha;
        }
        public function getDataCadastro() {
            return $this->data_cadastro;   
        }
        public function getFotoPerfil() {
            return $this->foto_perfil;   
        }
        public function getBio() {
            return $this->bio;   
        }
        public function getLivrosLidos() {
            return $this->livros_lidos;   
        }
        public function getLivrosLendo() {
            return $this->livros_lendo;  
        }
        public function getLivrosDesejados() {
            return $this->livros_desejados;   
        }
    }
    

?>