<?php include("../config/db.php") ?>
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
                   <form action="" method="post" class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Kehadiran</strong>
                            </div>
                            <div  class="card-body card-block">
                                
                                 <div class="form-group">
                                    <label  class="form-control-label">Hari</label>
                                     <div id="kh">
                                     <select  onchange="khari()" class="form-control" name="kh" >
                                           <option value="" >Pilih Hari</option>
                                           <option value="ISNIN" >ISNIN</option>
                                           <option value="SELASA" >SELASA</option>
                                           <option value="RABU" >RABU</option>
                                           <option value="KHAMIS" >KHAMIS</option>
                                           <option value="JUMAAT" >JUMAAT</option>
                                      </select>   
                                     </div>
                                </div>
                        
                                
                                   <div class="form-group">
                                    <label class=" form-control-label">Sesi</label>
                                     <div id="ks">
                                      <select class="form-control" name="ks" disabled>
                                        <option value="" disabled selected>Pilih Sesi</option>
                                      </select>
                                </div>
                       
                                </div> 
                    
                                 <div class="form-group">
                                    <label  class="form-control-label">Kelas</label>
                                     <div id="kelas">
                                      <select class="form-control" name="kelas"disabled>
                                        <option value="" disabled selected>Pilih Kelas</option>
                                      </select>
                                    </div>                            
                                </div>
                                <div class="form-group">
                                    <label  class="form-control-label">Subjek</label>
                                     <div id="kss">
                                      <select class="form-control" name="kss"disabled>
                                        <option value="" disabled selected>Pilih Subjek</option>
                                      </select>
                                    </div>                           
                                </div>
                                
                                
                          
                
                        <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Slot Kelas</label></div>
                        <div id="jst">
                              <div  class="form-check-inline form-check">
                                <label  class="form-check-label ">
                                  <input type="checkbox"  value="option1" class="form-check-input" disabled>Slot 1
                                </label>
                                <label  class="form-check-label ">
                                  <input type="checkbox"  value="option2" class="form-check-input" disabled>Slot 2
                                </label>
                                <label class="form-check-label ">
                                  <input type="checkbox"  value="option3" class="form-check-input" disabled>Slot 3
                                </label>
                                  <label  class="form-check-label ">
                                  <input type="checkbox" value="option3" class="form-check-input" disabled>Slot 4
                                </label>
                                  <label  class="form-check-label ">
                                  <input type="checkbox" value="option3" class="form-check-input" disabled>Slot 5
                                </label>
                                  <label  class="form-check-label ">
                                  <input type="checkbox" value="option3" class="form-check-input" disabled>Slot 6
                                </label>
                                  <label  class="form-check-label ">
                                  <input type="checkbox" value="option3" class="form-check-input" disabled>Slot 7
                                </label>
                              </div>
                            </div> 
                          </div>
                        </div>
                                
                        <div class="card-footer">
    
                <button type="buttton" name="submit" class="btn btn-primary btn-sm"> <i class="fa fa-dot-circle-o"></i> Submit</button>
                <button type="reset" class="btn btn-danger btn-sm"> <i class="fa fa-ban"></i> Reset</button>
           
                        </div> 
                       

             <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Jadual</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>

                                        <tr>
                                        <th class="ti-arrows-vertical"  scope="col">Bahagian</th>
                                        <th class="ti-arrows-vertical"  scope="col">Pengajar</th>
                                        <th class="ti-arrows-vertical"  scope="col">Sesi</th>
                                        <th class="ti-arrows-vertical"  scope="col">Subjek</th>
                                        <th class="ti-arrows-vertical"  scope="col">Kelas</th>
                                        <th class="ti-arrows-vertical"  scope="col">Hari</th>
                                        <th class="ti-arrows-vertical"  scope="col">Slot</th>
                
                                            
                                        </tr>
                    </thead>
                                 
                                  <tbody >
                                  <?php include("./viewsub.php") ?>
                                  </tbody>
                         

                            </table>
                               
                        </div>
                    </div>
                </div>
                </div>
                 </div>
                    </div>
                </div>
                    </form>
                </div>
             </div>
        </div>
    </div>

            
     
                    
        <script type="text/javascript">
            function khari(){ 
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","ddk.php?hari="+document.getElementById('kh').value,false);
                xmlhttp.send(null);
                //alert(xmlhttp.responseText);
                console.log('ajax ',xmlhttp);
                document.getElementById('ks').innerHTML=xmlhttp.responseText;
                $('select').material_select();
            }


          
            function kkelas(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","ddk.php?sesi=" + document.getElementById('ksesi').value, false);
                console.log(xmlhttp);
                xmlhttp.send(null);
                //subjekBody
                document.getElementById('kelas').innerHTML=xmlhttp.responseText;
                $('select').material_select();
                
            }
           
            
            function psub(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","ddk.php?sesi=" + document.getElementById('kk').value, false);
                var bahagian=<?php echo $_SESSION['bahagian'] ?>;
                var pengajar=<?php echo $_SESSION['id_pengajar'] ?>;
                console.log(xmlhttp);
                xmlhttp.send(null);
                //subjekBody
                document.getElementById('kss').innerHTML=xmlhttp.responseText;
                $('select').material_select();
                
            }
        </script>
        
                        
  
   
  
    <!-- Right Panel -->


    <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../assets/js/lib/data-table/datatables-init.js"></script>
    
  
</body>

</html>