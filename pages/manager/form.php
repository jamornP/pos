<?php require $_SERVER['DOCUMENT_ROOT']."/POS/vendor/autoload.php" ?>
<?php
   use App\Model\Manager;

   if($_REQUEST['action']=='edit'){
       $managerObj = new Manager;
       $manager = $managerObj->getManagerById($_REQUEST['id']);
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager</title>
    <link rel="stylesheet" href="../../theme/css/bootstrap-theme.css">
</head>

<body class="font-mali wh-100">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center"  >
                        <h4>เพิ่มข้อมูลสมาชิก</h4>
                        <a href="index.php" class="btn btn-warning btn-sm">ย้อนกลับ</a>
                    </div>
                    <div class="card-body">
                        <form action="save.php" method="get">
                            <div class="form-group">
                                <label for="name">ชื่อ-สกุล</label>
                                <input class="form-control" type="text" id="name" name="name" value="<?php echo $manager['name'];?>">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input class="form-control" type="email" id="email" name="email" value="<?php echo $manager['email'];?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" name="password" value="<?php echo $manager['password'];?>">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>