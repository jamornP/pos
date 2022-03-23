<?php require $_SERVER['DOCUMENT_ROOT']."/POS/vendor/autoload.php"; ?>
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
                    <div class="card-header bg-warning text-white d-flex justify-content-between">
                        <h4> ข้อมูลสมาชิก</h4>
                        <a href="form.php" class="btn btn-success text-white btn-sm">เพิ่มสมาชิกใหม่</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>role</th>
                                    <th>created_at</th>
                                    <th>จัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  
                                    use App\Model\Manager;

                                    $managerObj = new Manager();

                                    $managers = $managerObj->getAllManager();
                                    $n=0;
                                    foreach($managers as $manager) {
                                        $n++;
                                        echo "
                                            <tr valign='middle'>
                                                <td>{$n}</td>
                                                <td>{$manager['name']}</td>
                                                <td>{$manager['email']}</td>
                                                <td>{$manager['role']}</td>
                                                <td>{$manager['created_at']}</td>
                                                <td class='text-white'><div class='d-grid gap-2 d-md-flex '>
                                                <a href='form.php?id={$manager['id']}&action=edit' class='me-mr-2'>แก้ไข</a>
                                                <a href='save.php?id={$manager['id']}&action=delete'>ลบ</a>
                                                
                                              </div></td>  
                                            </tr>
                                        ";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>