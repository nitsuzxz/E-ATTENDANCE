<?php
        if (isset($_GET['bilangan_kereta'])) {
        $bilangan= $_GET['bilangan_kereta'];

               if($bilangan=="2"){
                
               echo "<input type='text' placeholder='Nombor Plat Kereta 1' name='plat1'>";
               echo "<input type='text' placeholder='Nombor Plat Kereta 2' name='plat2'>";
                    }  
            if($bilangan=="1"){
                
               echo "<input type='text' placeholder='Nombor Plat Kereta' name='plat1'>";
              
                    }  
            if($bilangan=="tiada"){
                
               echo "<input  placeholder='tiada' disabled>";
              
                    }  
        
        }

?>