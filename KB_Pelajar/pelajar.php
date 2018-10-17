<?php include("../config/db.php") ;
 include("../assets/side-navkb.php");
 include("./add_pelajar.php") ;
 include("./update_pelajar.php") ;


?>

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
                                    <input class="form-control mr-sm-2" type="text" id="psearch" placeholder="Search ..." aria-label="Search">
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


        <form method="post" enctype="multipart/form-data">
            <div class="card">

                <div class="card-header">
                    <h4>Tambah Pelajar</h4>
                </div>
                <div class="card-body">

                    <label class=" form-control-label">Nama Pelajar</label>
                    <input type="text" class=" form-control" placeholder="Pelajar" name="nama_pelajar" value="<?php echo (isset($nama_pelajar)) ? $nama_pelajar : ''; ?>" required>
                    <label class=" form-control-label">No Daftar Pelajar</label>
                    <input type="text" class=" form-control" placeholder="No.NDP" name="no_ndp" value="<?php echo (isset($no_ndp)) ? $no_ndp : ''; ?>" required>
                    <label class=" form-control-label">Kad Pengenalan</label>
                    <input type="text" class=" form-control" placeholder="Kad Pengenalan" name="ic" value="<?php echo (isset($ic)) ? $ic : ''; ?>" required>




                    <label class=" form-control-label">Bahagian</label>
                    <select name="bahagian" class=" form-control" required>

                        <?php
                                $res = mysqli_query($connection, "select * from bahagian where id={$_SESSION['bahagian']}");

                                while($row=mysqli_fetch_array($res)) {
                                     $ids= $row['id'];
                                      $ns= $row['bahagian'];
                                ?>

                        <option value="<?php echo $ids?>">
                            <?php echo  $ns?>
                        </option>
                        <?php
                                }

                              ?>
                    </select>

                    <label class=" form-control-label">Kelas</label>
                    <select name="kelas" class=" form-control" required>
                        <option value="">Kelas..</option>
                        <option value="1" <?php echo (isset($kelas) && $kelas=='1' ) ? ' selected=selected' : '' ; ?>>Kelas 1 </option>
                        <option value="2" <?php echo (isset($kelas) && $kelas=='2' ) ? ' selected=selected' : '' ; ?>>Kelas 2</option>
                        <option value="3" <?php echo (isset($kelas) && $kelas=='3' ) ? ' selected=selected' : '' ; ?>>Kelas 3 </option>
                        <option value="4" <?php echo (isset($kelas) && $kelas=='4' ) ? ' selected=selected' : '' ; ?>>Kelas 4 </option>
                    </select>

                    <label class=" form-control-label">Sesi</label>
                    <select name="sesi" class=" form-control" required>
                        <option value="">Sila Pilih</option>
                        <?php
                                $res = mysqli_query($connection, "select * from sesi");

                                while($row=mysqli_fetch_array($res)) {
                                     $sesi= $row['ids'];
                                      $ss= $row['sesi'];
                                ?>

                        <option value="<?php echo $sesi?>">
                            <?php echo  $ss?>
                        </option>
                        <?php
                                }

                              ?>
                    </select>


                </div>

                <div class="card-footer">
                    <?php
			if (isset($_GET['edit'])) {
                
                echo '<button class="btn btn-success" type="button" onclick="modalEdit()"   >Kemaskini</button> <a href="./pelajar.php" button type="button" class="btn btn-danger">Batal</button></a>
                    <button style="display:none;" type="submit" id="submitEdit" name="kpelajar"  >Kemaskini</button>
                ';
             
			} else {
				echo '<button class="btn btn-success" type="submit" name="tpelajar"  >Tambah</button>';
			}
			?>


                </div>
            </div>
        </form>


        <form method="post" enctype="multipart/form-data">
            <div class="card">

                <div class="card-body">

                    <?php include("./uploads_pelajar.php") ?>
                    <label>Senarai Pengajar</label>
                    <input type="file" name="file" /><br />



                </div>
                <div class="card-footer">
                    <input type="submit" name="submit" value="IMPORT" class="btn btn-primary" />
                </div>
            </div>
        </form>



        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">PELAJAR</strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>

                                <th scope="col">Nama</th>
                                <th scope="col">Kad Pengenalan</th>
                                <th scope="col">No.NDP</th>
                                <th scope="col">Kursus</th>
                                <th scope="col">Sesi</th>
                                <th scope="col">Kelas</th>

                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody id="ptable">
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
