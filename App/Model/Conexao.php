<?php 

namespace App\Model;

class Conexao {
   // Atributo instance
   private static $instance;

   // Método
   public static function getConn() {
      if(!isset(self::$instance)):

         try {
            self::$instance = new \PDO(
                'mysql:host=localhost;dbname=pdo;charset=utf8',
                'root',
                ''
            );
        } catch (\PDOException $e) {
            die('Erro ao conectar: ' . $e->getMessage());
        }
        
      endif;

      return self::$instance;
   }
}