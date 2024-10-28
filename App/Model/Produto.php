<?php 

namespace App\Model;
class Produto {

   // Campos dos bancos de dados.
   private $id, $nome, $descricao;

   public function getId() {
      return $this->id;
   }

   public function setId($id) {
      $this->id = $id;
   }

   public function getNome() {
      return $this->nome;
   }

   public function setNome($nome) {
      $this->nome = $nome;
   }

   public function getDescricao() {
      return $this->descricao;
   }

   public function setDescricao($descricao) {
      $this->descricao = $descricao;
   }
}