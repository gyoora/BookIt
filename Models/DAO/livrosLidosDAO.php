<?php
class LivrosLidosDAO {
    public function __construct(private $db = null) {}

    public function buscarLivroLidoPorUsuario($usuario_id) {
        $sql = "SELECT * FROM livros_lidos WHERE usuario_id = ?";
        $stm = $this->db->prepare($sql);
        $stm->bindValue(1, $usuario_id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_OBJ);
    }
}
?>