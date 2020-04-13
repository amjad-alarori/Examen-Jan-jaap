<?php
	include('db.php');


                if(isset($_POST['edit'])){
                     
                  
                    $idzender = $_POST['idzender'];
                    $omschrijving = $_POST['omschrijving'];
                    $slogan = $_POST['slogan'];
                    $id = $_POST['id'];

                    
                        $sql = "UPDATE zender SET idzender=?, omschrijving=?, slogan=? WHERE idzender= $id";
                        $stmt= $conn->prepare($sql);
                        $stmt->execute([$idzender, $omschrijving, $slogan]);
                        echo " Jou nieuwe zender is gewijzegd!";
                        
                    }
                   
              

                

                if (isset($_POST['delete'])) {
                    $id = $_POST['id'];

                    $sql = "DELETE FROM zender WHERE idzender = ?";
                    $stmt= $conn->prepare($sql);
                    $stmt->execute([$id]);
                    echo " Jou zender is verwijdered!";
                    
                }
                else {
                    echo " fout";
                }




                
                    
                   














