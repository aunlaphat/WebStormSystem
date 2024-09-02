<?php class columnController
   {
    public function index()
    {
      
        $columnList = columnModel::getAllCo();
        require_once('./views/column/index_column.php');
    }

   public function newColumn()
    {
    
        $column_list = columnModel::getAllCo();
        require_once('./views/column/newColumn.php');
    }

    public function addColumn(){

        $COID = $_GET['COID'];
        $COND = $_GET['COND'];

     
        columnModel::add($COID, $COND);
     
        columnController::index();
       
    }

   public function updateForm(){
        $COID = $_GET['COID'];
        $column_ulist = columnModel::get($COID);
        $columnList = columnModel::getAllCo();
        require_once("./views/column/updateForm.php");
       
    }

    public function update(){
        $COID = $_GET['COID'];
        $COND = $_GET['COND'];
       
        columnModel::update($COID, $COND);
       
        columnController::index();
      
    }

    public function deleteConfirm(){
        $COID = $_GET['COID'];
        $column_dlist = columnModel::get($COID);

        require_once("./views/column/deleteConfirm.php");
    }

    public function delete(){
        $COID = $_GET['COID'];

        columnModel::delete($COID);

        columnController::index();
    }
   }
?>