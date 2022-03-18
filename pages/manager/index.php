<?php require $_SERVER['DOCUMENT_ROOT']."/POS/vendor/autoload.php" ?>
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
                    <h4 class="card-header bg-info">PHP PDO</h4>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>role</th>
                                    <th>created_at</th>
                                    <th>edit</th>
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
                                            <tr class='align-items-center'>
                                                <td>{$n}</td>
                                                <td>{$manager['name']}</td>
                                                <td>{$manager['email']}</td>
                                                <td>{$manager['role']}</td>
                                                <td>{$manager['created_at']}</td>
                                                <td><div class='d-grid gap-2 d-md-flex justify-content-md-end'>
                                                <button class='btn btn-warning me-md-2' type='button'>Edit</button>
                                                <button class='btn btn-danger' type='button'>Delete</button>
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