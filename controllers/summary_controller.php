<?php class summaryController
   {

    public function index()
    {
        $sumList = summaryModel::getAll();
        require_once('./views/summary/index_summary.php');
    }

    public function search()
    {
        
        $key = $_GET['key'];
        $sumList = summaryModel::search($key);
        require_once('./views/summary/index_summary.php');
        
    }

   }
?>