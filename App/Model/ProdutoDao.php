<?php 

namespace App\Model;

// Os quatros métodos CRUD
class ProdutoDao {
   public function create(Produto $p) {

      $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?,?)';

      $insert = Conexao::getConn()->prepare($sql);
      $insert->bindValue(1, $p->getNome());
      $insert->bindValue(2, $p->getDescricao());
      $insert->execute();

   }

   public function read() {

      $sql = 'SELECT * FROM produtos';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->execute();

      if($stmt->rowCount() > 0){
         $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
         return $resultado;
      } else { 
         return [];
      }
   }

   public function update(Produto $p) {

      $sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $p->getNome());
      $stmt->bindValue(2, $p->getDescricao());
      $stmt->bindValue(3, $p->getId());

      $stmt->execute();

   }

   public function delete(int $id) {

      $sql = 'DELETE FROM produtos WHERE id = ?';

      $stmt = Conexao::getConn()->prepare($sql);
      $stmt->bindValue(1, $id, \PDO::PARAM_INT);
      $stmt->execute();

   }

}