<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบจัดการสินค้า</title>
    <link rel="stylesheet" href="../theme/css/bootstrap-theme.css">
    <!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
</head>
<body class="font-mali">
    <section class="bg-light min-vh-100">
        <nav class="navbar navbar-expand-sm navbar-dark bg-danger">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">POD</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-sm-3 col-md-2">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            The current link item
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                        <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                        <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                        <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
                    </div>
                </div>
                <div class="col">
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert—check it out!
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="images/avataaars.png" class="w-100" alt="">
                                        </div>
                                        <div class="col-sm">
                                            <h3 class="my-4">Jamorn Pengsuay</h3>
                                            <p>morn</p>
                                            <p>Conputer science</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm bg-success text-white">
                                            <div class="text-center my-3">
                                                <h2>37</h2>
                                                <p>Age</p>
                                            </div>
                                        </div>
                                        <div class="col-sm bg-danger text-white">
                                            <div class="text-center  my-3"">
                                                <h2>37</h2>
                                                <p>Age</p>
                                            </div>
                                        </div>
                                        <div class="col-sm bg-warning text-white">
                                            <div class="text-center  my-3"">
                                                <h2>37</h2>
                                                <p>Age</p>
                                            </div>
                                        </div>
                                        <div class="col-sm bg-info text-white">
                                            <div class="text-center  my-3"">
                                                <h2>37</h2>
                                                <p>Age</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card h-100">
                                <div class="card-body ">
                                    <h3 class=" my-4">You go</h3>
                                    <h5 class="mt-3">เขียน</h5>
                                    <div class="progress">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h5 class="mt-3">อ่าน</h5>
                                    <div class="progress">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h5 class="mt-3">ฟัง</h5>
                                    <div class="progress">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h5 class="mt-3">พูด</h5>
                                    <div class="progress">
                                        <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <img src="https://picsum.photos/id/237/400/300" class="w-100" alt="">
                                                </div>
                                                <div class="col-sm">
                                                    <h3>Lorem, ipsum dolor.</h3>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-sm-3">
                                                    <img src="https://picsum.photos/id/238/400/300" class="w-100" alt="">
                                                </div>
                                                <div class="col-sm">
                                                    <h3>Lorem, ipsum dolor.</h3>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <img src="https://picsum.photos/id/239/400/300" class="w-100" alt="">
                                                </div>
                                                <div class="col-sm">
                                                    <h3>Lorem, ipsum dolor.</h3>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-sm-3">
                                                    <img src="https://picsum.photos/id/240/400/300" class="w-100" alt="">
                                                </div>
                                                <div class="col-sm">
                                                    <h3>Lorem, ipsum dolor.</h3>
                                                    <p>Lorem ipsum dolor sit amet.</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4>Item menager</h4>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-success" style="margin-right: 2px">+ Add</a>
                                        <button type="button" class="btn btn-primary" style="margin-right: 2px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            Modal
                                        </button>
                                        <div class="dropdown">
                                            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                Dropdown
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="card-body">
                                    <p>DataTable</p>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Item</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>มะม่วง</td>
                                                <td>2</td>
                                                <td>50</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>มะขาม</td>
                                                <td>1</td>
                                                <td>35</td>
                                                <td>35</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>มะเฟือง</td>
                                                <td>2</td>
                                                <td>35</td>
                                                <td>70</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item "><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <img src="https://picsum.photos/id/250/400/300" class="w-100">
                                    <h3 class="my-3">Lorem, ipsum dolor.</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A veritatis voluptatibus cum itaque iusto culpa sint odit autem perspiciatis sapiente suscipit ex eius dolore quasi assumenda inventore quo, doloribus labore aliquam, veniam ullam. Explicabo quo eius a, odio, vitae ipsam alias esse recusandae rerum in modi non nobis repudiandae. Unde!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <img src="https://picsum.photos/id/251/400/300" class="w-100">
                                    <h3 class="my-3">Lorem, ipsum dolor.</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A veritatis voluptatibus cum itaque iusto culpa sint odit autem perspiciatis sapiente suscipit ex eius dolore quasi assumenda inventore quo, doloribus labore aliquam, veniam ullam. Explicabo quo eius a, odio, vitae ipsam alias esse recusandae rerum in modi non nobis repudiandae. Unde!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <img src="https://picsum.photos/id/252/400/300" class="w-100">
                                    <h3 class="my-3">Lorem, ipsum dolor.</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A veritatis voluptatibus cum itaque iusto culpa sint odit autem perspiciatis sapiente suscipit ex eius dolore quasi assumenda inventore quo, doloribus labore aliquam, veniam ullam. Explicabo quo eius a, odio, vitae ipsam alias esse recusandae rerum in modi non nobis repudiandae. Unde!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card">
                                <div class="card-body">
                                    <img src="https://picsum.photos/id/253/400/300" class="w-100">
                                    <h3 class="my-3">Lorem, ipsum dolor.</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A veritatis voluptatibus cum itaque iusto culpa sint odit autem perspiciatis sapiente suscipit ex eius dolore quasi assumenda inventore quo, doloribus labore aliquam, veniam ullam. Explicabo quo eius a, odio, vitae ipsam alias esse recusandae rerum in modi non nobis repudiandae. Unde!</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row mt-3 bg-primary text-white">
                        <div class="col-sm-6">
                            <h3>POD Jamorn</h3>
                            <p>Copyright 2022</p>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> -->
</body>
</html>