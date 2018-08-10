<?php
    global $connection;

    if (isset($_GET['bahagian'])) {
        $country = $_GET['bahagian'];
        $countryid_res = mysqli_query($con,"select id from countries where name='".$country."'");
        $row1 = mysqli_fetch_array($countryid_res);
        $country_id = $row1[0];

        if($country!=""){

            $res=mysqli_query($con,"select * from states where country_id='$country_id'");
       
            echo "<div class='form-group'>";
            echo "<select id='statedd' onchange='change_state()'>";

            while($row=mysqli_fetch_array($res))
                {
                    echo "<option value='$row[id]'>"; 
                    echo $row["name"]; 
                    echo "</option>";
                }
            echo "</select>";
            echo "<label>Select country</label>";
            echo "</div>";
        }
    } elseif (isset($_GET['state'])) {
        $state = $_GET['state'];


        if($state!=""){

            $res=mysqli_query($con,"select * from cities where state_id='$state'");
            $row=mysqli_fetch_array($res);

            echo "<div class='input-field col s12'>";
            echo "<select>";

            while($row=mysqli_fetch_array($res))
                {
                    echo "<option value='$row[id]'>"; 
                    echo $row["name"]; 
                    echo "</option>";
                }
            echo "</select>";
            echo "<label>Select city</label>";
            echo "</div>";
        }
    } else {
    
    }
?>