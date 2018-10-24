<?php
include ("./dd.php")
?>


<html>

<body>

    <div class="form-group">
        <label class=" form-control-label">Pengajar</label>
        <select id="ganti_plat" name="ganti_plat" onchange="ganti_bilplat()" class="form-control" required>

            <option value="">Sila Pilih</option>
            <option value="1">1</option>
             <option value="2">2</option>
              <option value="tiada">Tiada</option>
        </select>
    </div>
    <div class="form-group">
        <label class=" form-control-label">Plat Kereta</label>
        <div id="input_plat">
            <input class="form-control" name="input_plat" placeholder="Nombor plat kereta" disabled>
                
        </div>
    </div>



    <script type="text/javascript">
        function ganti_bilplat() {

            var xmlhttp = new XMLHttpRequest();
            var bilangan_kereta = document.getElementById('ganti_plat').value;
            xmlhttp.open("GET", "dd.php?bilangan_kereta=" + bilangan_kereta, false);
            xmlhttp.send(null);
            //alert(xmlhttp.responseText);
            console.log('ajax ', xmlhttp.response);
            document.getElementById('input_plat').innerHTML = xmlhttp.responseText;
      
        }

    </script>
</body>

</html>
