<?php

 final class Connection 
 {
    private static ?self $instance = null;
    private static string $name;

    public function __construct() {}

    public function __clone() {}

    public function __wakeup() {}

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Get the value of name
     */ 
    public static function getName()
    {
        return self::$name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public static function setName($name)
    {
        self::$name = $name;
    }

 }

 $connection = Connection::getInstance();
 $connection::setName('MySQL');

 $connection2 = clone $connection;

 var_dump($connection2::getName());