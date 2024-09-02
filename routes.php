<?php
$controllers = array('pages'=>['home','error']
,'name_of_storm'=>['index','newNameOfStorm','addNameOfStorm','updateForm','update','deleteConfirm','delete']
,'country'=>['index','newCountry','addCountry','updateForm','update','deleteConfirm','delete']
,'name_of_another'=>['index','newNameAnother','addNameOfAnother','updateForm','update','deleteConfirm','delete']
,'status'=>['index','newStatus','addStatus','updateForm','update','deleteConfirm','delete']
,'column'=>['index','newColumn','addColumn','updateForm','update','deleteConfirm','delete']
,'summary'=>['index','search']
);
function call($controller,$action)
{
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages": $controller = new PagesController();
                    break;

        case "summary": 
                    require_once("models/summaryModel.php");
                    require_once("models/nameOfStormModel.php");
                    require_once("models/countryModel.php");
                    require_once("models/statusModel.php");
                    require_once("models/columnModel.php");
                    require_once("models/nameOfAnotherModel.php");
                    $controller = new summaryController();
                    break;

                    
        case "name_of_storm": 
                    require_once("models/nameOfStormModel.php");
                    require_once("models/countryModel.php");
                    require_once("models/statusModel.php");
                    require_once("models/columnModel.php");
                    require_once("models/nameOfAnotherModel.php");
                    $controller = new nameOfStormController();
                    break;

        case "country": 
                    require_once("models/countryModel.php");
                    $controller = new countryController();
                    break;

        case "name_of_another": 
                    require_once("models/nameOfAnotherModel.php");
                    $controller = new nameOfAnotherController();
                    break;

        case "status": 
                    require_once("models/statusModel.php");
                    $controller = new statusController();
                    break;

        case "column": 
                    require_once("models/columnModel.php");
                    $controller = new columnController();
                    break;
    }
    $controller->{$action}();
}
if(array_key_exists($controller,$controllers))
{
    
    if(in_array($action,$controllers[$controller]))
    {   
        call($controller,$action); }
    else{
        call('pages','error');
    }
}
else { call('pages','error');}
?>