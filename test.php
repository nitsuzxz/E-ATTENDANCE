<?php
    session_start();
    require_once('dbconfig/config.php');

    if (isset($_GET['country'])) {
        $country = $_GET['country'];
        $countryid_res = mysqli_query($con,"select id from countries where name='".$country."'");
        $row1 = mysqli_fetch_array($countryid_res);
        $country_id = $row1[0];

        if($country!=""){

            $res=mysqli_query($con,"select * from states where country_id='$country_id'");
            //printf('select * from countries where name=' . $country);
            //printf($row=mysqli_fetch_array($get_countryid));
            //printf('select * from states where country_id=101');
            //printf('select * from states where country_id=101' . $country);
            // if (!$res) {
            // printf("Error: %s\n", mysqli_error($con));
            // exit();
            //}
            echo "<div class='input-field col s12'>";
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
        //printf($state);
        //$stateid_res = mysqli_query($con,"select id from states where name='".$state."'");
        //$row2 = mysqli_fetch_array($stateid_res);
        //$state_id = $row2[0];
        //printf("state id : " . $state_id);

        if($state!=""){

            $res=mysqli_query($con,"select * from cities where state_id='$state'");
            $row=mysqli_fetch_array($res);

            //printf('select * from countries where name=' . $country);
            //printf($row=mysqli_fetch_array($get_countryid));
            //printf('select * from states where country_id=101');
            //printf('select * from states where country_id=101' . $country);
            // if (!$res) {
            // printf("Error: %s\n", mysqli_error($con));
            // exit();
            //}
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
        //$country = null;
        //$state = null;﻿ 
    }
?>