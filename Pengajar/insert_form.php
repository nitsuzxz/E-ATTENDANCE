<html>
<body>
   
        <label class=" form-control-label">Nama Pengajar</label>
        <input class="form-control" type="text" placeholder="nama" name="nama_pengajar" value="<?php echo (isset($nama_pengajar)) ? $nama_pengajar : ''; ?>" required>
        <label class=" form-control-label">Email Pengajar</label>
        <input class="form-control" type="text" placeholder="email" name="email_pengajar" value="<?php echo (isset($email_pengajar)) ? $email_pengajar : ''; ?>" required>
 
             <label class=" form-control-label">Bahagian</label>
                                <select name="bahagian"  class="form-control" required>
                                
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
        
        
        <label class=" form-control-label">Jawatan</label>
            <select name="jawatan" class="form-control" required>
							<option  value="">Pilih Jawatan...</option>
                              <option  value="1"<?php echo (isset($jawatan) && $jawatan == '1') ? ' selected=selected' : ''; ?>>Admin</option> 
                               <option  value="2"<?php echo (isset($jawatan) && $jawatan == '2') ? ' selected=selected' : ''; ?>>Ketua Bahagian</option> 
                                <option  value="3"<?php echo (isset($jawatan) && $jawatan == '3') ? ' selected=selected' : ''; ?>>Pengajar</option>                
            </select>
        

   
</body>                  
</html>
