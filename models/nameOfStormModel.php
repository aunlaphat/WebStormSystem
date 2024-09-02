<?php

    class nameOfStormModel{

        public $SID;
        public $CID;
        public $Cname;
        public $COID;
        public $COND;
        public $Sname;
        public $SEname;
        public $SM;
        public $naID;
        public $naName;
        public $staSID;
        public $staNSID;
        public $SYS;
        public $SYE;

        public function __construct($SID, $CID, $COID, $COND, $Cname, $Sname, $SEname, $SM, $naID, $naName, $staSID, $staNSID, $SYS, $SYE)
        {
         
            $this->SID = $SID;
            $this->CID = $CID;
            $this->COID = $COID;
            $this->COND = $COND;
            $this->Cname = $Cname;
            $this->Sname = $Sname;
            $this->SEname = $SEname;
            $this->SM = $SM;
            $this->naID = $naID;
            $this->naName = $naName;
            $this->staSID = $staSID;
            $this->staNSID = $staNSID;
            $this->SYS = $SYS;
            $this->SYE = $SYE;
        }

        public static function get($SID){
            require("connection_connect.php");
            $sql = "select * from nameOfStorm natural join country natural join statusOfStorm natural join columnStorm natural join stormOfAnother where stormID = '$SID' ";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $SID = $my_row[stormID];
            $CID = $my_row[countryID];
            $COID = $my_row[columnID];
            $COND = $my_row[columnName];
            $Cname = $my_row[countryName];
            $Sname = $my_row[stormName];
            $SEname = $my_row[stormEngName];
            $SM = $my_row[stormMean];
            $naID = $my_row[stormAnotherID];
            $naName = $my_row[stormAnotherName];
            $staSID = $my_row[statusSID];
            $staNSID = $my_row[statusSName];
            $SYS = $my_row[stormYearStart];
            $SYE = $my_row[stormYearExp];
            require("connection_close.php");
            return new nameOfStormModel($SID, $CID, $COID, $COND, $Cname, $Sname, $SEname, $SM, $naID, $naName, $staSID, $staNSID, $SYS, $SYE);
        }

        public static function getAll(){
            $nameOfStormList = [];
            require("connection_connect.php");
            $sql = "select * from nameOfStorm, country, statusOfStorm, columnStorm, stormOfAnother where nameOfStorm.countryID=country.countryID AND nameOfStorm.statusSID=statusOfStorm.statusSID AND nameOfStorm.columnID =  columnStorm.columnID AND nameOfStorm.stormAnotherID = stormOfAnother.stormAnotherID" ;
            $result = $conn->query($sql);
           
            while ($my_row = $result->fetch_assoc()) 
            {
               
                $SID = $my_row[stormID];
                $CID = $my_row[countryID];
                $COID = $my_row[columnID];
                $COND = $my_row[columnName];
                $Cname = $my_row[countryName];
                $Sname = $my_row[stormName];
                $SEname = $my_row[stormEngName];
                $SM = $my_row[stormMean];
                $naID = $my_row[stormAnotherID];
                $naName = $my_row[stormAnotherName];
                $staSID = $my_row[statusSID];
                $staNSID = $my_row[statusSName];
                $SYS = $my_row[stormYearStart];
                $SYE = $my_row[stormYearExp];

                $nameOfStormList[] = new nameOfStormModel($SID, $CID, $COID, $COND, $Cname, $Sname, $SEname, $SM, $naID, $naName, $staSID, $staNSID, $SYS, $SYE);
            }
            require("connection_close.php");
            return $nameOfStormList;
        }

        public static function add($SID, $CID, $COID, $Sname, $SEname, $SM, $naID, $staSID, $SYS, $SYE)
        {
            require("connection_connect.php");
            $sql = "INSERT INTO nameOfStorm( stormID, countryID,  columnID, stormName, stormEngName, stormMean, stormAnotherID, statusSID,  stormYearStart, stormYearExp) VALUES ('$SID', '$CID', '$COID', '$Sname', '$SEname', '$SM', '$naID', '$staSID', '$SYS', '$SYE')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

       public static function update($SID, $CID, $COID, $Sname, $SEname, $SM, $naID, $staSID, $SYS, $SYE)
        {
            require("connection_connect.php");
            $sql = "UPDATE nameOfStorm SET countryID = '$CID', columnID = '$COID', stormName = '$Sname', stormEngName = '$SEname', stormMean = '$SM', stormAnotherID = '$naID', statusSID = '$staSID',  stormYearStart = '$SYS', stormYearExp = '$SYE' where stormID = '$SID' ";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

       public static function delete($SID)
        {
            require("connection_connect.php");
            $sql = "DELETE FROM nameOfStorm WHERE stormID = '$SID'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }

    }
?>