<?php

class DataBase { 

    protected function dbConnect(){ 

            $db = new PDO('mysql:host=localhost;dbname=rdk_financial;charset=utf8','root', '',[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);

            return $db;
    }

}