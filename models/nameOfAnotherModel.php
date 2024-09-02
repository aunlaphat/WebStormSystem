<?php

    class nameOfAnotherModel{

        public $naID;
        public $naName;


        public function __construct($naID, $naName)
        {
            $this->naID = $naID;
            $this->naName = $naName;
        }

        public static function get($naID){
            require("connection_connect.php");
            $sql = "select * from stormOfAnother where stormAnotherID = '$naID' ";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $naID = $my_row[stormAnotherID];
            $naName = $my_row[stormAnotherName];
            require("connection_close.php");
            return new nameOfAnotherModel($naID, $naName);
        }


        public static function getAllNa(){
            $nameanoList = [];
            require("connection_connect.php");
            $sql = "select * from stormOfAnother" ;
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) 
            {
                $naID = $my_row[stormAnotherID];
                $naName = $my_row[stormAnotherName];

                $nameanoList[] = new nameOfAnotherModel($naID, $naName);
            }
            require("connection_close.php");
            return $nameanoList;
        }

        public static function add($naID, $naName)
        {
            require("connection_connect.php");
            $sql = "INSERT INTO stormOfAnother( stormAnotherID, stormAnotherName) VALUES ('$naID', '$naName')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

       public static function update($naID, $naName)
        {
            require("connection_connect.php");
            $sql = "UPDATE stormOfAnother SET stormAnotherName = '$naName' where stormAnotherID = '$naID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

       public static function delete($naID)
        {
            require("connection_connect.php");
            $sql = "DELETE FROM stormOfAnother WHERE stormAnotherID = '$naID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }

    }
?>