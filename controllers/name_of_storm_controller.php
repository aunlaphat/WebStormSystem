<?php class nameOfStormController
   {

    public function index()
    {
        
        $nameOfStormList = nameOfStormModel::getAll();
        require_once('./views/name_of_storm/index_nameOfStorm.php');
    }

   public function newNameOfStorm()
    {
        
        $nameofstorm_list = nameOfStormModel::getAll();
        $country_list = countryModel::getAllC();
        $status_list = statusModel::getAllS();
        $column_list = columnModel::getAllCo();
        $nameano_list = nameOfAnotherModel::getAllNa();
     
        require_once('./views/name_of_storm/newNameOfStorm.php');
    }

   public function addNameOfStorm(){

        
        $SID = $_GET['SID'];
        $CID = $_GET['CID'];
        $COID = $_GET['COID'];
        $Sname = $_GET['Sname'];
        $SEname = $_GET['SEname'];
        $SM = $_GET['SM'];
        $naID = $_GET['naID'];
        $staSID = $_GET['staSID'];
        $SYS = $_GET['SYS'];
        $SYE = $_GET['SYE'];
       
        nameOfStormModel::add($SID, $CID, $COID, $Sname, $SEname, $SM, $naID, $staSID, $SYS, $SYE);
        
        nameOfStormController::index();
       
    }

   public function updateForm(){
        $SID = $_GET['SID'];
        $nameofstorm_ulist = nameOfStormModel::get($SID);
        $Nameofstorm_list = nameOfStormModel::getAll();
        
        $CID = $_GET['CID'];
        $country_ulist = countryModel::get($CID);
        $Country_list = countryModel::getAllC();
        
        $staSID = $_GET['staSID'];
        $status_ulist = countryModel::get($staSID);
        $Status_list = statusModel::getAllS();
        
        $COID = $_GET['COID'];
        $column_ulist = countryModel::get($COID);
        $Column_list = columnModel::getAllCo();

        $naID = $_GET['naID'];
        $nameano_ulist = countryModel::get($naID);
        $Nameano_list = nameOfAnotherModel::getAllNa();
        require_once("./views/name_of_storm/updateForm.php");
        
    }

   public function update(){
       $SID = $_GET['SID'];
       $CID = $_GET['CID'];
       $COID = $_GET['COID'];
       $Sname = $_GET['Sname'];
       $SEname = $_GET['SEname'];
       $SM = $_GET['SM'];
       $naID = $_GET['naID'];
       $staSID = $_GET['staSID'];
       $SYS = $_GET['SYS'];
       $SYE = $_GET['SYE'];
      
        nameOfStormModel::update($SID, $CID, $COID, $Sname, $SEname, $SM, $naID, $staSID, $SYS, $SYE);
        nameOfStormController::index();
       
    }

   public function deleteConfirm(){
        $SID = $_GET['SID'];
        $nameofstorm_dlist = nameOfStormModel::get($SID);

        require_once("./views/name_of_storm/deleteConfirm.php");
    }

    public function delete(){
        $SID = $_GET['SID'];

        nameOfStormModel::delete($SID);

        nameOfStormController::index();
    }
   }
?>