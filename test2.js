<script type="text/javascript">
    
            function bhgn_dd(){
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open("GET","subjek.php?bahagian="+document.getElementById('bhgnd').value,false);
                xmlhttp.send(null);
                //alert(xmlhttp.responseText);
                document.getElementById('nmpen').innerHTML=xmlhttp.responseText;
                $('select').material_select();
            }

        
        </script>