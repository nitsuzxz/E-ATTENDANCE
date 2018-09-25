<html>
<body>                 
  
    
         <label class=" form-control-label">Nama Pelajar</label>
     <input type="text" class=" form-control" placeholder="Pelajar" name="nama_pelajar" value="<?php echo (isset($nama_pelajar)) ? $nama_pelajar : ''; ?>" required>
         <label class=" form-control-label">No Daftar Pelajar</label>
     <input type="text" class=" form-control" placeholder="No.NDP" name="no_ndp" value="<?php echo (isset($no_ndp)) ? $no_ndp : ''; ?>"   required>
         <label class=" form-control-label">Kad Pengenalan</label>
     <input type="text" class=" form-control" placeholder="Kad Pengenalan" name="ic" value="<?php echo (isset($ic)) ? $ic : ''; ?>"  required>
   


     
         <label class=" form-control-label">Bahagian</label>
            <select name="bahagian"  class=" form-control" required>
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
                                   
           <label class=" form-control-label">Bahagian</label>
                            <select name="kelas"  class=" form-control" required>
								<option  value="">Kelas..</option>
                                <option  value="1"<?php echo (isset($kelas) && $kelas == '1') ? ' selected=selected' : ''; ?>>Kelas 1 </option>
                                <option  value="2"<?php echo (isset($kelas) && $kelas == '2') ? ' selected=selected' : ''; ?>>Kelas 2</option> 
                                <option  value="3"<?php echo (isset($kelas) && $kelas == '3') ? ' selected=selected' : ''; ?>>Kelas 3 </option> 
                                <option  value="4"<?php echo (isset($kelas) && $kelas == '4') ? ' selected=selected' : ''; ?>>Kelas 4 </option> 
                              </select>
                          
		
    </body>                   
 </html>