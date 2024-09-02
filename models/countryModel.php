<?php

    class countryModel{

        public $CID;
        public $Cname;


        public function __construct($CID, $Cname)
        {
            $this->CID = $CID;
            $this->Cname = $Cname;
        }

        public static function get($CID){
            require("connection_connect.php");
            $sql = "select * from country  where countryID = '$CID'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $CID = $my_row[countryID];
            $Cname = $my_row[countryName];
            require("connection_close.php");
            return new countryModel($CID, $Cname);
        }

        public static function getAllC(){
            $countryList = [];
            require("connection_connect.php");
            $sql = "select * from country" ;
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) 
            {
                $CID = $my_row[countryID];
                $Cname = $my_row[countryName];
                $countryList[] = new countryModel($CID, $Cname);
            }
            require("connection_close.php");
            return $countryList;
        }

       public static function add($CID, $Cname)
        {
            require("connection_connect.php");
            $sql = "INSERT INTO country( countryID, countryName) VALUES ( '$CID', '$Cname')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

       public static function update($CID, $Cname)
        {
            require("connection_connect.php");
            $sql = "UPDATE country SET  countryName = '$Cname' where countryID = '$CID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

       public static function delete($CID)
        {
            require("connection_connect.php");
            $sql = "DELETE FROM country WHERE countryID = '$CID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }

    }
?>