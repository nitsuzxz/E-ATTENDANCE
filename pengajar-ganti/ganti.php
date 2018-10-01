<?php 
 include("../config/db.php");
 include("../assets/side-nav.php");
 include("./dropganti.php");
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

    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>


<body>

    <div id="right-panel" class="right-panel">
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

        <!-- /header -->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Subjek</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Subjek</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <form action="" method="POST" class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Kehadiran</strong>
                            </div>
                            <div class="card-body card-block">

                                <div class="form-group">
                                    <label class=" form-control-label">Pengajar</label>
                                    <select id="ganti_pengajar" name="ganti_pengajar" onchange="ganti_hari()" class="form-control" required>

                                        <option value="">Sila Pilih</option>
                                        <?php
                                $res = mysqli_query($connection, "select * from pengajar where bahagian='{$_SESSION['bahagian']}' ");

                                while($row=mysqli_fetch_array($res)) {
                                     $pid= $row['id_pengajar'];
                                      $namap= $row['nama_pengajar'];
                                ?>

                                        <option value="<?php echo $pid?>">
                                            <?php echo  $namap?>
                                        </option>
                                        <?php
                                }

                              ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Hari</label>
                                    <div id="sel_gantihari">
                                        <select class="form-control" name="sel_gantihari" disabled>
                                            <option value="" disabled selected>Pilih Hari</option>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label class=" form-control-label">Slot</label>
                                    <div id="sel_gantislot">
                                        <select class="form-control" name="sel_gantislot" disabled>
                                            <option value="" disabled selected>Pilih Slot</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar-check-o">
                                        </i>
                                    </div>
                                    <input class="form-control" id="date" value="" name="date" placeholder="MM/DD/YYYY" type="text" />
                                </div>




                                <strong class="card-title">PELAJAR</strong>

                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>

                                            <th scope="col">Nama</th>

                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>

                                    <tbody id="gp">

                                    </tbody>

                                </table>

                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success" type="submit" name="submitkehadiran">Hantar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>






    </div>




    <script type="text/javascript">
    
      function ganti_hari() {

            var xmlhttp = new XMLHttpRequest();
            var pengajar = document.getElementById('ganti_pengajar').value;
            xmlhttp.open("GET", "dropganti.php?pengajar=" + pengajar, false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
            console.log('ajax ', xmlhttp.response);
            document.getElementById('sel_gantihari').innerHTML = xmlhttp.responseText;
            $('select').material_select();
        }
        
            function ganti_slot() {

            var xmlhttp = new XMLHttpRequest();
            var bahagianh = <?php echo $_SESSION['bahagian'] ?>;
            var pengajarh = document.getElementById('ganti_pengajar').value; 
            var hari = document.getElementById('ganti_harid').value;
            xmlhttp.open("GET", "dropganti.php?pgjr=" + pengajarh+ "&bhgn=" + bahagianh+ "&hari=" + hari, false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
            console.log('ajax ', xmlhttp.response);
            document.getElementById('sel_gantislot').innerHTML = xmlhttp.responseText;
            $('select').material_select();
        }
        
            function ganti_pelajar() {

            var bahagianp = <?php echo $_SESSION['bahagian'] ?>;
            
            var sel = document.getElementById('ganti_pelajard');
            var selected = sel.options[sel.selectedIndex];
            var k_kelas = selected.getAttribute('kelas');

            var sel = document.getElementById('ganti_pelajard');
            var selected = sel.options[sel.selectedIndex];
            var k_sesi = selected.getAttribute('sesi');

            var sel = document.getElementById('ganti_pelajard');
            var selected = sel.options[sel.selectedIndex];
            var k_sesi = selected.getAttribute('slot');
                
            var dropslot = document.getElementById('k_sesi').value;
          
            xmlhttp.open("GET", "dropganti.php?kelasp=" + k_kelas + "&sesip=" + k_sesi + "&bahagianp=" + bahagianp + "&slotp=" + slotp, false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
            console.log('ajax ', xmlhttp.response);
            document.getElementById('gp').innerHTML = xmlhttp.responseText;
            getIdj(k_kelas, k_sesi, dropslot, k_bahagian, ssp, hari);

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

    </script>



</body>

</html>
