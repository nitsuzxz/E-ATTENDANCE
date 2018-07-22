<?php include("../config/db.php") ?>
<?php include("./add_pelajar.php") ?>
<?php include("./update_pelajar.php") ?>
<?php include("../assets/side-nav.php") ?>

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

          <?php include("../assets/header.php") ?>

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
        
       <?php include ("./insert_pelajar.php")?>
       
       


                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">PENGAJAR</strong>
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
    <!-- Right Panel -->


    <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

</div>
</body>
</html>
