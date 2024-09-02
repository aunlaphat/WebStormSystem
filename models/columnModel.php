<?php

    class columnModel{

        public $COID;
        public $COND;


        public function __construct($COID, $COND)
        {
            $this->COID = $COID;
            $this->COND = $COND;
        }

        public static function get($COID){
            require("connection_connect.php");
            $sql = "select * from columnStorm where columnID = '$COID' ";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $COID = $my_row[columnID];
            $COND = $my_row[columnName];
            require("connection_close.php");
            return new columnModel($COID, $COND);
        }


        public static function getAllCo(){
            $columnList = [];
            require("connection_connect.php");
            $sql = "select * from columnStorm" ;
            $result = $conn->query($sql);
            while ($my_row = $result->fetch_assoc()) 
            {
                $COID = $my_row[columnID];
                $COND = $my_row[columnName];

                $columnList[] = new columnModel($COID, $COND);
            }
            require("connection_close.php");
            return $columnList;
        }

        public static function add($COID, $COND)
        {
            require("connection_connect.php");
            $sql = "INSERT INTO columnStorm( columnID, columnName) VALUES ('$COID', '$COND')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

       public static function update($COID, $COND)
        {
            require("connection_connect.php");
            $sql = "UPDATE columnStorm SET columnName = '$COND' where columnID = '$COID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

       public static function delete($COID)
        {
            require("connection_connect.php");
            $sql = "DELETE FROM columnStorm WHERE columnID = '$COID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }

    }
?>