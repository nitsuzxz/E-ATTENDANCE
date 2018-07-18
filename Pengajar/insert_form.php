<html>
<body>                 
                  <form  action="" method="post" class="col-lg-12">

           <input type="text" placeholder="nama" name="id_pengajar" value="<?php echo (isset($nama)) ? $nama : ''; ?>" required>
            <input type="text" placeholder="email" name="email" value="<?php echo (isset($email)) ? $email : ''; ?>"   required>
              <input type="text" placeholder="kata laluan" name="password" value="<?php echo (isset($pass)) ? $pass : ''; ?>"  required>
            <div class=".col-md-4">
                              <select name="bahagian"  class="form-control-sm form-control" required>
								<option  value="">pilih bahagian...</option>
                                <option  value="IE"<?php echo (isset($bahagian) && $bahagian == 'IE') ? ' selected=selected' : ''; ?>>Industri Elektronik</option>
                                <option  value="TKS"<?php echo (isset($bahagian) && $bahagian == 'TKS') ? ' selected=selected' : ''; ?>>Teknologi Komputer Sistem</option>
                                <option  value="KIMPALAN"<?php echo (isset($bahagian) && $bahagian == 'KIMPALAN') ? ' selected=selected' : ''; ?>>Teknologi Kimpalan</option>  
                              </select>
                            </div>                    
            <div class=".col-md-4">
                            <select name="jawatan"  class="form-control-sm form-control" required>
								<option  value="">Pilih Jawatan...</option>
                                <option  value="Pengajar"<?php echo (isset($jawatan) && $jawatan == 'Pengajar') ? ' selected=selected' : ''; ?>>Pengajar</option>
                                <option  value="Ketua Bahagian"<?php echo (isset($jawatan) && $jawatan == 'Ketua Bahagian') ? ' selected=selected' : ''; ?>>Ketua Bahagian</option> 
                              </select>
                            </div>
			<?php
			if (isset($_GET['edit'])) {
				echo '<button class="btn btn-success" type="submit" name="kpengajar"  >kemaskini</button> <a href="./pengajar.php" button type="button" class="btn btn-danger">Batal</button></a>';
			} else {
				echo '<button class="btn btn-success" type="submit" name="tpengajar"  >tambah</button>';
			}
			?>
		</form>	
			<form action="./uploads.php" class="form-group">
                  
                      <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large">
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-success" type="submit" name="import" ">tambah</button>
                            </div>
                       </form>
    </body>                   
 </html>