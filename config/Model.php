<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 10/04/2019
 * Time: 11:52
 */
namespace config;

abstract class  Model
{
    private static $_dbb;

    // Instancie la connexion
     private static function setBdd(){
      self::$_dbb = new \PDO('mysql:host=localhost;dbname=db_name;charset=utf8', 'root', '');
      self::$_dbb->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
    }

    // Récupere la connexion
    protected function getBdd() :\PDO{
     if(self::$_dbb == null){
        self::setBdd();
     }
     return self::$_dbb;
   }

   




  
    // TOUTES LES CLASSSES DAO UTILISERONS CES METHODES
    //$object
    abstract public function insert($user);
    abstract public function findAll();
    abstract public function findOne($id);
    abstract public function update($id);
    abstract public function delete($id);

}