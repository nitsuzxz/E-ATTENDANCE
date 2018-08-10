<?php
include ("../config/db.php");
include ("./ajax.php")
?>
   <html>
    
    <body class="cyan loaded">
        
            <div class="col s12 z-depth-4 card-panel">
                <form class="login-form" method="post" action="">
  
                    <div class="row margin">
                          <div class="input-field col s12">
                            <select id="bhgndropdown" onchange="change_bhgn()">
                              <option value="" disabled selected>Pilih Bahagian</option>
                              <?php
                                $res = mysqli_query($connection, 'select * from bahagian');

                                while($row=mysqli_fetch_array($res)) {
                                ?>
                                    <option><?php echo $row['bahagian']?></option>
                                <?php
                                }

                              ?>
                            </select>
                        
                          </div>
                    </div>
                    <div class="row margin">
                        <div id="pengajar">
                            <div class="input-field col s12">
                                <select disabled>
                                    <option value="" disabled selected>Pilih Pengajar</option>
                                </select>
                      
                            </div>
                        </div>
                    </div>
                    <div class="row margin">
                        <div id="subjek">
                            <div class="input-field col s12">
                                <select disabled>
                                    <option value="" disabled selected>Pilih Subjek</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 center-align">
                            <input type="submit" name="submit" class="btn pink" value="submit">
                        </div>
                    </div>
                </form>
            </div>

        
        <script type="text/javascript">
            function change_bhgn(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","ajax.php?bahagian="+document.getElementById('bhgndropdown').value,false);
                xmlhttp.send(null);
                //alert(xmlhttp.responseText);
                document.getElementById('pengajar').innerHTML=xmlhttp.responseText;
                $('select').material_select();
            }

            function change_pengajar() {
                //alert(document.getElementById('statedd').value);
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","ajax.php?pengajar="+document.getElementById('pgjrdd').value,false);
                xmlhttp.send(null);
                //alert(xmlhttp.responseText);
                document.getElementById('subjek').innerHTML=xmlhttp.responseText;
                $('select').material_select();
            }
                    
        </script>
    </body>