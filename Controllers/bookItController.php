<?php
    class BookItController {

        private $db;

        public function __construct()
        {
            $this->db = Conexao::getInstancia();
        }

        public function login(){
            session_start();

            $valido = true; 

            if($_SERVER['REQUEST_METHOD'] === 'POST') {

                if (empty($_POST["email"]) || $_POST["email"] == 0) {
                    $valido = false;
                } 
                if (empty($_POST["pass"]) || $_POST["pass"] == 0) {
                    $valido = false;
                } 

                if($valido) {
                    $usuario = new Usuarios(email:$_POST["email"], senha:md5($_POST["pass"]));
                    
                    $usuarioDAO = new UsuariosDAO($this->db);
                    $ret = $usuarioDAO->login($usuario);

                    if(count($ret) == 1) {
                        $_SESSION['id'] = $ret[0]->id;
                        $_SESSION['nome'] = $ret[0]->nome;
                        $_SESSION['email'] = $ret[0]->email;
                        $_SESSION['data_cadastro'] = $ret[0]->data_cadastro;
                        $_SESSION['foto_perfil'] = $ret[0]->foto_perfil;
                        $_SESSION['bio'] = $ret[0]->bio;
                        $_SESSION['bio'] = $ret[0]->bio;
                        $_SESSION['livros_lidos'] = $ret[0]->livros_lidos;
                        $_SESSION['livros_lendo'] = $ret[0]->livros_lendo;
                        $_SESSION['livros_desejados'] = $ret[0]->livros_desejados;

                        header("location: dashboard");
                        require_once "Views/initialPage.php";
                        die();
                    } else {
                        echo "Verifique os dados inseridos";
                    }
                }
            }
            require_once "Views/login.php";
        }

        public function signUp()  {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $valido = true;

                if (empty($_POST["name"]) || $_POST["name"] == 0) {
                    $valido = false;
                } 
                if (empty($_POST["email"]) || $_POST["email"] == 0) {
                    $valido = false;
                } 
                if (empty($_POST["pass"]) || $_POST["pass"] == 0) {
                    $valido = false;
                } 

                if($valido) {

                    $usuario = new Usuarios(
                        id: 0,
                        nome: $_POST["name"],
                        email: $_POST["email"],
                        senha: md5($_POST["pass"]),
                        data_cadastro: date('Y-m-d H:i:s')
                    );

                    $usuarioDAO = new UsuariosDAO($this->db);
                    $usuarioDAO->cadastro($usuario);
                    var_dump($usuario);
                    header("location: login");
                    require_once "Views/login.php";
                    exit();
                }
            }
            require_once "Views/signUp.php";
        }

        public function initialPage() {
            require_once "Views/initialPage.php";
        }

        public function bookshelf() {
            require_once "Views/bookshelf.php";
        }

        public function mostrarLivrosLidos() {
            session_start();

            if (!isset($_SESSION['id'])) {
                header("location: login");
                exit();
            }

            $usuarioId = $_SESSION['id'];
            $livrosDAO = new LivrosLidosDAO($this->db);
            $ret = $livrosDAO->buscarLivroLidoPorUsuario($usuarioId);

            require_once "Views/bookshelf.php";
        }

        public function perfil() {
            require_once "Views/perfil.php";
        }

        public function sair() {
            require_once "views/logout.php";
        }

        public function sairAction() {
            require_once "views/logoutAction.php";
        }

    }

?>