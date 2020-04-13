<?php
	include('db.php');



                    
                    
                    if(isset($_POST["submit"]))
                    {
                    $idzender = $_POST['idz'];
                    $omschrijving = $_POST['oms'];
                    $slogan = $_POST['slo'];

                    
                        $sql = "INSERT INTO zender (idzender, omschrijving, slogan) VALUES (:idz, :oms, :slo)";
                        $stmt= $conn->prepare($sql);
                        $stmt->execute(['idz' => $idzender, 'oms' => $omschrijving, 'slo' => $slogan]);
                        echo " Jou nieuwe zender is toegevoegd!";
                        
                    }
                    else {
                        echo " fout";
                    }
                    
                ?>