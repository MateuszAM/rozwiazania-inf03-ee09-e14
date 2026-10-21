<?php
    $submitButton = $_POST['submitButton'];
    if(isset($submitButton)){
        echo "Dodano rezerwację do bazy";
        $dateInput = $_POST['dateInput'];
        $personsInput = $_POST['personsInput'];
        $phoneInput = $_POST['phoneInput'];
        $conn = mysqli_connect('localhost', 'root', '', 'baza');
        $sql = "INSERT INTO `rezerwacje`(`data_rez`, `liczba_osob`, `telefon`) VALUES ('$dateInput', $personsInput, '$phoneInput');";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
?>