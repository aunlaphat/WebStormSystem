<?php class countryController
   {
    
    public function index()
    {
        
        $countryList = countryModel::getAllC();
        require_once('./views/country/index_country.php');
    }

   public function newCountry()
    {
       
        $country_list = countryModel::getAllC();
        require_once('./views/country/newCountry.php');
    }

    public function addCountry(){

        $CID = $_GET['CID'];
        $Cname = $_GET['Cname'];

      
        countryModel::add($CID, $Cname);
       
        countryController::index();
    
    }

   public function updateForm(){
        $CID = $_GET['CID'];
        $country_ulist = countryModel::get($CID);
        $countryList = countryModel::getAllC();
        require_once("./views/country/updateForm.php");
     
    }

    public function update(){
        $CID = $_GET['CID'];
        $Cname = $_GET['Cname'];
       
        countryModel::update($CID, $Cname);
     
        countryController::index();
        
    }

    public function deleteConfirm(){
        $CID = $_GET['CID'];
        $country_dlist = countryModel::get($CID);

        require_once("./views/country/deleteConfirm.php");
    }

    public function delete(){
        $CID = $_GET['CID'];

        countryModel::delete($CID);

        countryController::index();
    }

   }
?>