<?php

    class statusModel{

        public $staSID;
        public $staNSID;


        public function __construct($staSID, $staNSID)
        {
            $this->staSID = $staSID;
            $this->staNSID = $staNSID;
        }

        public static function get($staSID){
            require("connection_connect.php");
            $sql = "select * from statusOfStorm where statusSID = '$staSID' ";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $staSID = $my_row[statusSID];
            $staNSID = $my_row[statusSName];
            require("connection_close.php");
            return new statusModel($staSID, $staNSID);
        }


        public static function getAllS(){
            $statusList = [];
            require("connection_connect.php");
            $sql = "select * from statusOfStorm " ;
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) 
            {
                $staSID = $my_row[statusSID];
                $staNSID = $my_row[statusSName];

                $statusList[] = new statusModel($staSID, $staNSID);
            }
            require("connection_close.php");
            return $statusList;
        }

        public static function add($staSID, $staNSID)
        {
            require("connection_connect.php");
            $sql = "INSERT INTO statusOfStorm( statusSID, statusSName) VALUES ('$staSID', '$staNSID')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

       public static function update($staSID, $staNSID)
        {
            require("connection_connect.php");
            $sql = "UPDATE statusOfStorm SET statusSName = '$staNSID' where statusSID = '$staSID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

       public static function delete($staSID)
        {
            require("connection_connect.php");
            $sql = "DELETE FROM statusOfStorm WHERE statusSID = '$staSID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }

    }
?>