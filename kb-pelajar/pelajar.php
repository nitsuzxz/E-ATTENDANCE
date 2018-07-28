<?php include("../config/db.php") ?>
<?php include("./add_pelajar.php") ?>
<?php include("./update_pelajar.php") ?>

<?php include("../assets/side-navkb.php") ?>

<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EATTENDANCE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/scss/style.css">
    <link href="../assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

              <header id="header" class="header">

            <div class="header-menu">


                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                    </div>
                </div>



                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../images/profilepic.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
                            <a class="nav-link" href="../index.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        </header><!-- /header -->

       
         <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                         <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Pengguna</a></li>
                            <li class="active">Pelajar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Tambah Pelajar</h4>
                            </div>
                            <div class="card-body">
                                <?php include ("./insert_pelajar.php")?>
                                <h3></h3>
                               <form method="post" enctype="multipart/form-data">
                                 <?php include("./uploads_pelajar.php") ?>
                                <label>Pilih fail CSV:</label>
                                <input type="file" name="file" /><br />
                                <input type="submit" name="submit" value="IMPORT" class="btn btn-primary" />                 
                                </form>
                            </div>
                        </div>
                    </div>
                    
    
     
           

   <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">PELAJAR</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">No.NDP</th>
                                  <th scope="col">Kursus</th>
                                  <th scope="col">Semester</th>
                                  <th scope="col">Kata Laluan</th>
                                  <th scope="col">Kad Pengenalan</th>
                                  <th scope="col">Alamat</th>
                                  <th scope="col"></th>
                                  <th scope="col"></th> 
                                  <th scope="col"></th>
                                  <th scope="col"></th>        
                                </tr>
                              </thead>
                            
                              <tbody>
                                <?php include("./view_pelajar.php") ?>
                              </tbody>

                            </table>

                        </div>
                    </div>
                </div>
     <?php include("../assets/modal.php") ?>
        
    <!-- Right Panel -->


    <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

</div>
</body>
</html>
