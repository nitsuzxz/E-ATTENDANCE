<html>
<body>                 
  
     <form  action="" method="post" class="col-lg-12">

     <input type="text" placeholder="Nama Pelajar" name="nama_pelajar" value="<?php echo (isset($nama_pelajar)) ? $nama_pelajar : ''; ?>" required>
     <input type="text" placeholder="No Daftar Pelajar" name="no_ndp" value="<?php echo (isset($no_ndp)) ? $no_ndp : ''; ?>"   required>
     <input type="text" placeholder="Kata Laluan" name="pass_pelajar" value="<?php echo (isset($pass_pelajar)) ? $pass_pelajar : ''; ?>"  required>
     <input type="text" placeholder="Kad Pengenalan" name="ic" value="<?php echo (isset($ic)) ? $ic : ''; ?>"  required>
     <input type="text" placeholder="Alamat" name="alamat" value="<?php echo (isset($alamat)) ? $alamat : ''; ?>"  >


     <div class=".col-md-4">
            <select name="bahagian"  class="form-control-sm form-control" required>
                 <option  value="">Pilih Kursus...</option>
                 <option  value="1"<?php echo (isset($bahagian) && $bahagian == '1') ? ' selected=selected' : ''; ?>>CNC</option>
                 <option  value="2"<?php echo (isset($bahagian) && $bahagian == '2') ? ' selected=selected' : ''; ?>>IE</option>
                 <option  value="7"<?php echo (isset($bahagian) && $bahagian == '7') ? ' selected=selected' : ''; ?>>TKS</option>  
              </select>
                            </div>                    
            <div class=".col-md-4">
                            <select name="kelas"  class="form-control-sm form-control" required>
								<option  value="">Kelas..</option>
                                <option  value="1"<?php echo (isset($kelas) && $kelas == '1') ? ' selected=selected' : ''; ?>>Kelas 1 Sem 1</option>
                                <option  value="2"<?php echo (isset($kelas) && $kelas == '2') ? ' selected=selected' : ''; ?>>Kelas 2 Sem 1</option> 
                                <option  value="3"<?php echo (isset($kelas) && $kelas == '3') ? ' selected=selected' : ''; ?>>Kelas 3 Sem 1</option> 
                              </select>
                            </div>
			<?php
			if (isset($_GET['edit'])) {
                
                echo '<button class="btn btn-success" type="button" onclick="modalEdit()"   >Kemaskini</button> <a href="./pelajar.php" button type="button" class="btn btn-danger">Batal</button></a>
                    <button style="display:none;" type="submit" id="submitEdit" name="kpelajar"  >Kemaskini</button>
                ';
             
			} else {
				echo '<button class="btn btn-success" type="submit" name="tpelajar"  >Tambah</button>';
			}
			?>
		</form>	
    </body>                   
 </html>