<?php

global $connection;
                                  
 $query = "SELECT j.idj, b.bahagian, p.nama_pengajar, ss.sesi, s.subjek, j.kelas, j.hari, j.slot
            FROM jadual AS j
            JOIN bahagian AS b     
            ON j.bahagian= b.id
            JOIN pengajar AS p       
            ON j.id_pen= p.id_pengajar
            JOIN subjek AS s           
            ON j.id_sub= s.idsub
            JOIN sesi AS ss
            on j.sesi=ss.ids";      

        
                $jadual= mysqli_query($connection, $query);

                 while($row= mysqli_fetch_array($jadual)){
                                      $jid=$row['idj'];
                                      $jbahagian =$row['bahagian'];
                                      $jpengajar  = $row['nama_pengajar'];
                                      $jsesi=$row['sesi'];
                                      $jsubjek = $row['subjek'];
                                      $jkelas = $row['kelas'];
                                      $jhari=$row['hari'];
                                      $jslot=$row['slot'];
                                    
                                      
                                      echo "<tr>
	                                   <td>$jbahagian</td>
                                       <td>$jpengajar</td>
	                                   <td>$jsesi</td>
                                       <td>$jsubjek</td>
	                                   <td>$jkelas</td>
                                       <td>$jhari</td>
	                                   <td>$jslot</td>
                                       <td><a onclick='mdelsub({$jid})' button type='button' class='btn btn-danger'>DELETE</button></a></td>
                                       </tr>";
                                      }
                   

?>