<html>
<body>                 
  
     <form  action="" method="post" class="col-lg-12">

     <input type="text" placeholder="Nama Pelajar" name="nama_pelajar" value="<?php echo (isset($nama_pelajar)) ? $nama_pelajar : ''; ?>" required>
     <input type="text" placeholder="No Daftar Pelajar" name="no_ndp" value="<?php echo (isset($no_ndp)) ? $no_ndp : ''; ?>"   required>
     <input type="text" placeholder="Kata Laluan" name="pass_pelajar" value="<?php echo (isset($pass_pelajar)) ? $pass_pelajar : ''; ?>"  required>
     <input type="text" placeholder="Kad Pengenalan" name="ic" value="<?php echo (isset($ic)) ? $ic : ''; ?>"  required>
     <input type="text" placeholder="Alamat" name="alamat" value="<?php echo (isset($alamat)) ? $alamat : ''; ?>"  >
    <input readonly name="bahagian"  value="<?php echo($_SESSION['bahagian']);?>" required>       
         
            <div class=".col-md-4">
                            <select name="semester"  class="form-control-sm form-control" required>
								<option  value="">Pilih Semester...</option>
                                <option  value="1-SVM"<?php echo (isset($semester) && $semester == '1-SVM') ? ' selected=selected' : ''; ?>>1-SVM</option>
                                <option  value="1-SKM"<?php echo (isset($semester) && $semester == '1-SKM') ? ' selected=selected' : ''; ?>>1-SKM</option> 
                                <option  value="1-DVM"<?php echo (isset($semester) && $semester == '1-DVM') ? ' selected=selected' : ''; ?>>1-DVM</option> 
                              </select>
                            </div>
			<?php
			if (isset($_GET['edit'])) {
				echo '<button class="btn btn-success" type="submit" name="kpelajar"  >kemaskini</button> <a href="./pelajar.php" button type="button" class="btn btn-danger">Batal</button></a>';
			} else {
				echo '<button class="btn btn-success" type="submit" name="tpelajar"  >tambah</button>';
			}
			?>
		</form>	
    </body>                   
 </html>