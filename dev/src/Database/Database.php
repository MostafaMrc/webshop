<?php


class Database
{
   private static string $dbHost = '127.0.0.1';
   private static string $dbName = 'webshop_cookiesnmilk';
   private static string $dbUser = 'root';
   private static string $dbPass = '';

   private static $dbConnection = null;
   private static $dbStatement = null;

   private static function connect()
   {
      try {
         self::$dbConnection = new PDO(
            "mysql:host=".self::$dbHost.";dbname=".self::$dbName,
            self::$dbUser,
            self::$dbPass);
      } catch(PDOException $e) {}
   }

   public static function query(string $sql, array $placeholders = [])
   {
      if(is_null(self::$dbConnection)) {
         self::connect();
      }

      self::$dbStatement = self::$dbConnection->prepare($sql);
      self::$dbStatement->execute($placeholders);
   }

   public static function getAll()
   {
      if(is_null(self::$dbConnection) || is_null(self::$dbStatement)) {
         return [];
      }

      return self::$dbStatement->fetchAll(PDO::FETCH_ASSOC);
   }

   public static function get()
   {
      if(is_null(self::$dbConnection) || is_null(self::$dbStatement)) {
         return [];
      }

      return self::$dbStatement->fetch(PDO::FETCH_ASSOC);
   }
}