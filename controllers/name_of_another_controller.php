<?php class nameOfAnotherController
   {
    public function index()
    {
        $nameanoList = nameOfAnotherModel::getAllNa();
        require_once('./views/name_of_another/index_nameOfAnother.php');
    }

   public function newNameAnother()
    {
      
        $nameano_list = nameOfAnotherModel::getAllNa();
        require_once('./views/name_of_another/newNameAnother.php');
    }

    public function addNameOfAnother(){

        $naID = $_GET['naID'];
        $naName = $_GET['naName'];

    
        nameOfAnotherModel::add($naID, $naName);
       
        nameOfAnotherController::index();
      
    }

   public function updateForm(){
        $naID = $_GET['naID'];
        $nameano_ulist = nameOfAnotherModel::get($naID);
        $nameanoList = nameOfAnotherModel::getAllNa();

        require_once("./views/name_of_another/updateForm.php");
        
    }

    public function update(){
        $naID = $_GET['naID'];
        $naName = $_GET['naName'];
        
        nameOfAnotherModel::update($naID, $naName);
       
        nameOfAnotherController::index();
       
    }

    public function deleteConfirm(){
        $naID = $_GET['naID'];
        $nameano_dlist = nameOfAnotherModel::get($naID);

        require_once("./views/name_of_another/deleteConfirm.php");
    }

    public function delete(){
        $naID = $_GET['naID'];
        nameOfAnotherModel::delete($naID);
        nameOfAnotherController::index();
    }
   }
?>