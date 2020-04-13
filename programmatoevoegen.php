

<?php
	include('db.php');



                    
                    
                    if(isset($_POST["submit"]))
                    {
                    $idprogramma = $_POST['idpro'];
                    $omschrijving = $_POST['omschrijving'];
                    $datum = $_POST['datum'];
                    $begintijd = $_POST['begintijd'];
                    $eindtijd = $_POST['eindtijd'];
                    $presentator = $_POST['presentator'];
                    $zender = $_POST['idzender'];
                   

                    
                        $sql = "INSERT INTO uitzending (idprogramma, omschrijving, datum, begintijd, eindtijd, presentator, idzender) VALUES (:idpro, :datum, :begintijd, :eindtij, :presentator, :idzender)";
                        $stmt= $conn->prepare($sql);
                        $stmt->execute(['idpro' => $idprogramma, 'omschrijving' => $omschrijving, 'datum' => $datum, 'begintijd' => $begintijd, 'eindtijd' => $eindtijd, 'presentator' => $presentator, 'datum' => $zender]);
                        echo " Jou nieuwe programma is toegevoegd!";
                        
                    }
                    else {
                        echo " fout";
                    }
                    
                