<html>
<body>
    <form action="" method="post" class="col-lg-12">

        <input class='form-control' type="text" placeholder="nama" name="nama_pengajar" value="<?php echo (isset($nama_pengajar)) ? $nama_pengajar : ''; ?>" required>
        <input type="text" placeholder="email" name="email_pengajar" value="<?php echo (isset($email_pengajar)) ? $email_pengajar : ''; ?>" required>
        <input type="text" placeholder="kata laluan" name="pass_pengajar" value="<?php echo (isset($pass_pengajar)) ? $pass_pengajar : ''; ?>" required>
        <input readonly name="bahagian"  value="<?php echo($_SESSION['bahagian']);?>" required> 
        <div class=".col-md-4">
            <select name="jawatan" class="form-control-sm form-control" required>
								<option  value="">Pilih Jawatan...</option>
                              <option  value="1"<?php echo (isset($jawatan) && $jawatan == '1') ? ' selected=selected' : ''; ?>>Admin</option> 
                               <option  value="2"<?php echo (isset($jawatan) && $jawatan == '2') ? ' selected=selected' : ''; ?>>Ketua Bahagian</option> 
                                <option  value="3"<?php echo (isset($jawatan) && $jawatan == '3') ? ' selected=selected' : ''; ?>>Pengajar</option>
                                
                              </select>
        </div>
        <?php
			if (isset($_GET['edit'])) {
				echo '<button class="btn btn-success" type="button" onclick="modalEdit()"   >kemaskini</button> <a href="./pengajar.php" button type="button" class="btn btn-danger">Batal</button></a>
                    <button style="display:none;" type="submit" id="submitEdit" name="kpengajar"  >kemaskini</button>
                ';
			} else {
				echo '<button class="btn btn-success" type="submit" name="tpengajar"  >tambah</button>';
			}
			?>
    </form>
   
</body>                  
</html>
