
<?php include("./add_user.php");  ?>


<div class="modal fade" id="modaltp" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="largeModalLabel">TAMBAH PENGAJAR</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                                  <form method="post" enctype="multipart/form-data">
                                <label class=" form-control-label">Nama Pengajar</label>
                                 <input class="form-control" type="text" placeholder="Nama" name="nama_pengajar" value="<?php echo (isset($nama_pengajar)) ? $nama_pengajar : ''; ?>" required>
                                 <label class=" form-control-label">Email Pengajar</label>
                                <input class="form-control" type="text" placeholder="Email" name="email_pengajar" value="<?php echo (isset($email_pengajar)) ? $email_pengajar : ''; ?>" required>
  
           <div class="form-group">
                                <label class=" form-control-label">Bahagian</label>
                                <select id="jb" name="jb"  class="form-control" required>
                                
                                <option value="">Sila Pilih</option>
                              <?php
                                $res = mysqli_query($connection, "select * from bahagian");

                                while($row=mysqli_fetch_array($res)) {
                                     $ids= $row['id'];
                                      $ns= $row['bahagian'];
                                ?>
                                    
                                     <option value="<?php echo $ids?>"><?php echo  $ns?></option>
                                <?php
                                }

                              ?>
                                </select>
            </div>
    
     <div class="form-group">
                                <label class=" form-control-label">Jawatan</label>
                                <select id="jb" name="jb"  class="form-control" required>
                                
                                <option value="">Sila Pilih</option>
                              <?php
                                $res1 = mysqli_query($connection, "select * from jawatan");

                                while($row=mysqli_fetch_array($res1)) {
                                     $idj= $row['id'];
                                      $pj= $row['jawatan'];
                                ?>
                                    
                                     <option value="<?php echo $idj?>"><?php echo  $pj?></option>
                                <?php
                                }

                              ?>
                                </select>
            </div>
                                
                                
                               
                                
                                 </form>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" name="spgjr" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                            
                    </div>
                </div>