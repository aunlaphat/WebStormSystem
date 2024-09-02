<?php

    class summaryModel{

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


        public static function getAll(){
            $sumList = [];
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

                $sumList[] = new summaryModel($SID, $CID, $COID, $COND, $Cname, $Sname, $SEname, $SM, $naID, $naName, $staSID, $staNSID, $SYS, $SYE);
            }
            require("connection_close.php");
            return $sumList;
        }

        public static function search($key)
        {
        
            require("connection_connect.php");
            
            $sql = "select * from nameOfStorm 
            INNER JOIN country on nameOfStorm.countryID = country.countryID
            INNER JOIN statusOfStorm on statusOfStorm.statusSID = nameOfStorm.statusSID
            INNER JOIN columnStorm  on columnStorm.columnID = nameOfStorm.columnID
            INNER JOIN stormOfAnother on stormOfAnother.stormAnotherID = nameOfStorm.stormAnotherID
            where  stormID like '%$key%' or stormName like '%$key%' or stormEngName like '%$key%' or
            countryName like '%$key%' or columnName like '%$key%' or stormMean like '%$key%' or
            stormYearStart like '%$key%' or statusSName like '%$key%' or stormAnotherName like '%$key%'
            or stormYearExp like '%$key%' ";
          
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
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
                $sumList[] = new summaryModel($SID, $CID, $COID, $COND, $Cname, $Sname, $SEname, $SM, $naID, $naName, $staSID, $staNSID, $SYS, $SYE);
            }
            require("connection_close.php");
    
            return $sumList;

        }

    }
?>