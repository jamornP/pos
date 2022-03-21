<?php require $_SERVER['DOCUMENT_ROOT']."/POS/vendor/autoload.php" ?>
<?php 
use App\Model\Manager;
$managerObj = new Manager;

if($_REQUEST['action']=='delete'){
    $managerObj->deleteManager($_REQUEST['id']);
}else{
    $managerObj->addManager($_REQUEST);
}


 header("location: index.php");

?>