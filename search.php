<?php
	include('db.php');



if(isset($_POST["search"]))
                    {
                    $search = $_POST['var1'];

                    
                        $sql = "SELECT * FROM programma WHERE omschrijving LIKE '%$search%';";
                        $stmt= $conn->prepare($sql);
                        $stmt->execute(['var1' => $search]);
                        $row = $stmt->fetchAll();
                        echo $row[0]['idprogramma'] . '<br> '. $row[0]['omschrijving'] . '<br><br>';
                        echo $row[1]['idprogramma'] . '<br> '. $row[1]['omschrijving'] . '<br><br>';

                        
                        
                    }
                    else {
                        echo " fout";
                    }
                    