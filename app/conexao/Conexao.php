<?php


class Conexao {
   
   public static $instance;

   private function __construct() {
       //
   }

   public static function getConexao() {



  /*      
        $host = 'localhost; port=5432';
        $dbname = 'webhotelao2';
        $user = 'postgres';
        $pass = 'aldo1020';
*/

        $host = 'ec2-18-214-208-89.compute-1.amazonaws.com;port=5432';
        $dbname = 'delsshoqbjdfj6';
        $user = 'aioldlgokyquas';
        $pass = 'a8a4a687cc1dd8a245b82edf905cb70cc341ed9d689178bf289031920b82de1e';
        



        try {
      
            if (!isset(self::$instance)) {
                self::$instance = new \PDO('pgsql:host='.$host.';dbname=' . $dbname . ';options=\'--client_encoding=UTF8\'', $user, $pass);
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(\PDO::ATTR_ORACLE_NULLS, \PDO::NULL_EMPTY_STRING);
            }

            return self::$instance;

        
        } catch (Exception $ex) {
            echo $ex.'<br>';
        }
        
   }

}
