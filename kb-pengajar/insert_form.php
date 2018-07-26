<html>
<body>
    <form action="" method="post" class="col-lg-12">

        <input type="text" placeholder="nama" name="nama_pengajar" value="<?php echo (isset($nama_pengajar)) ? $nama_pengajar : ''; ?>" required>
        <input type="text" placeholder="email" name="email_pengajar" value="<?php echo (isset($email_pengajar)) ? $email_pengajar : ''; ?>" required>
        <input type="text" placeholder="kata laluan" name="pass_pengajar" value="<?php echo (isset($pass_pengajar)) ? $pass_pengajar : ''; ?>" required>
       <input type="text" placeholder="bahagian" name="bahagian" value="<?php echo($_SESSION['bahagian']);?>" required>
        <div class=".col-md-4">
        <select name="jawatan" class="form-control-sm form-control" required>
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
   
</body>                  
</html>
