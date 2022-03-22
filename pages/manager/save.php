<?php require $_SERVER['DOCUMENT_ROOT']."/POS/vendor/autoload.php" ?>
<?php 
use App\Model\Manager;
$managerObj = new Manager;

if($_REQUEST['action']=='delete'){
    $managerObj->deleteManager($_REQUEST['id']);
}
elseif($_REQUEST['action']=='edit'){
    $manager = $_REQUEST;
    unset($manager['action']);
    $managerObj->updateManager($manager);
}
elseif($_REQUEST['action']=='add'){
    $manager = $_REQUEST;
    unset($manager['action']);
    unset($manager['id']);
    $managerObj->addManager($manager);
}


 header("location: index.php");

?>