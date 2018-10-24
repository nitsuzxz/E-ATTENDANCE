<?php include("../config/db.php") ?>
<?php include("../assets/side-nav.php") ?>

<!doctype html>

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

    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>


<body>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
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

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <form action="./1.php" method="POST" class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Rekod Kehadiran Rasmi</strong>
                            </div>
                            <div class="card-body card-block">

                                <div class="form-group">
                                    <label class=" form-control-label">Bahagian</label>
                                    <select id="jbahagian" name="jbahagian"  class="form-control" required>

                                        <option value="">Sila Pilih</option>
                                        <?php
                                $res = mysqli_query($connection, "select * from bahagian  ");

                                while($row=mysqli_fetch_array($res)) {
                                     $idb= $row['id'];
                                      $bhgn= $row['bahagian'];
                                ?>

                                        <option value="<?php echo $idb?>">
                                            <?php echo $bhgn?>
                                        </option>
                                        <?php
                                }

                              ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Sesi</label>
                                    <select id="sel_sesi" name="sel_sesi" onchange="kelas()" class="form-control" required>

                                        <option value="">Sila Pilih</option>
                                        <?php
                                $res = mysqli_query($connection, "select * from sesi  ");

                                while($row=mysqli_fetch_array($res)) {
                                     $idsesi= $row['ids'];
                                      $sesi= $row['sesi'];
                                ?>

                                        <option value="<?php echo $idsesi?>">
                                            <?php echo $sesi?>
                                        </option>
                                        <?php
                                }

                              ?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label class=" form-control-label">Kelas</label>
                                    <div id="sel_kelas">
                                        <select class="form-control" name="sel_kelas" disabled>
                                            <option value="" disabled selected>Sila Pilih</option>
                                        </select>
                                    </div>
                                </div>




                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar-check-o">
                                        </i>
                                    </div>
                                    <input class="form-control" id="date" value="" name="date" placeholder="Tarikh Mula" type="text" required />
                                </div>

                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar-check-o">
                                        </i>
                                    </div>
                                    <input class="form-control" id="date2" value="" name="date2" placeholder="Tarikh Akhir" type="text" required />
                                </div>

                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success" type="submit" name="download">Muat Turun</button>
                            </div>
                        </div>
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

                                <th scope="col">Nama</th>
                                <th scope="col">Slot tidak hadir</th>
                                <th scope="col">Laporan Kehadiran</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <tbody id="ptable">
                            <?php include("./cpelajar.php") ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
    <!-- Right Panel -->


    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

    <script type="text/javascript">
        function kelas() {

            var xmlhttp = new XMLHttpRequest();
            var sel_sesi1 = document.getElementById('sel_sesi').value;
            xmlhttp.open("GET", "drop_official.php?sesi=" + sel_sesi1, false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
            console.log('ajax ', xmlhttp.response);
            document.getElementById('sel_kelas').innerHTML = xmlhttp.responseText;
            $('select').material_select();
        }




        $(document).ready(function() {
            var date_input = $('input[name="date"]'); //our date input has the name "date"
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })

        $(document).ready(function() {
            var date_input = $('input[name="date2"]'); //our date input has the name "date"
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            date_input.datepicker({
                format: 'yyyy/mm/dd',
                container: container,
                todayHighlight: true,
                autoclose: true,
            })
        })

    </script>



</body>

</html>
