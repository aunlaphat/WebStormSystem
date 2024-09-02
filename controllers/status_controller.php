<?php class statusController
   {

    public function index()
    {
        $statusList = statusModel::getAllS();
        require_once('./views/status/index_status.php');
    }

   public function newStatus()
    {
        $status_list = statusModel::getAllS();
        require_once('./views/status/newStatus.php');
    }

    public function addStatus(){

        $staSID = $_GET['staSID'];
        $staNSID = $_GET['staNSID'];

        statusModel::add($staSID, $staNSID);
      
        statusController::index();
        
    }

   public function updateForm(){
        $staSID = $_GET['staSID'];
        $status_ulist = statusModel::get($staSID);
        $statusList = statusModel::getAllS();
        require_once("./views/status/updateForm.php");
    }

    public function update(){
        $staSID = $_GET['staSID'];
        $staNSID = $_GET['staNSID'];
        statusModel::update($staSID, $staNSID);
    
        statusController::index();
    }

    public function deleteConfirm(){
        $staSID = $_GET['staSID'];
        $status_dlist = statusModel::get($staSID);

        require_once("./views/status/deleteConfirm.php");
    }

    public function delete(){
        $staSID = $_GET['staSID'];

        statusModel::delete($staSID);

        statusController::index();
    }

   }
?>