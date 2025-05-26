<?php
    class UsuariosDAO {
        public function __construct(private $db = null){}

        public function cadastro(Usuarios $usuario) {
            $sql = "INSERT INTO usuarios (nome, email, senha, data_cadastro, foto_perfil, bio, livros_lidos, livros_lendo, livros_desejados) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            try {
                $stm = $this->db->prepare($sql);

                $stm->bindValue(1, $usuario->getNome(), PDO::PARAM_STR);
                $stm->bindValue(2, $usuario->getEmail(), PDO::PARAM_STR);
                $stm->bindValue(3, $usuario->getSenha(), PDO::PARAM_STR);
                $stm->bindValue(4, $usuario->getDataCadastro(), PDO::PARAM_STR);
                $stm->bindValue(5, $usuario->getFotoPerfil(), PDO::PARAM_STR);
                $stm->bindValue(6, $usuario->getBio(), PDO::PARAM_STR);
                $stm->bindValue(7, $usuario->getLivrosLidos(), PDO::PARAM_INT);
                $stm->bindValue(8, $usuario->getLivrosLendo(), PDO::PARAM_INT);
                $stm->bindValue(9, $usuario->getLivrosDesejados(), PDO::PARAM_INT);

                $stm->execute();
            } catch (PDOException $e) {
                $this->db = null;
                echo "Erro ao cadastrar: " . $e->getMessage();
                die();
            }
        }

        public function login(Usuarios $usuario) {
            $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";

            try {
                $stm = $this->db->prepare($sql);

                $stm->bindValue(1, $usuario->getEmail(), PDO::PARAM_STR);
                $stm->bindValue(2, $usuario->getSenha(), PDO::PARAM_STR);

                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
                
            } catch (PDOException $e) {
                $this->db = null;
                echo "Erro ao logar: " . $e->getMessage();
                die();
            }
        }
    }


?>