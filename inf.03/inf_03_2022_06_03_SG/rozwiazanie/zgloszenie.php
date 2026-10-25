<?php
    $lowisko = $_POST['lowiskoWejscie'];
    $data = $_POST['dataWejscie'];
    $sendzia = $_POST['sendziaWejscie'];
    $conn = mysqli_connect('localhost', 'root', '', 'wedkarstwo');
    $sql = "INSERT INTO `zawody_wedkarskie`(`Karty_wedkarskie_id`, `Lowisko_id`, `data_zawodow`, `sedzia`) VALUES (0, $lowisko, '$data', '$sendzia');";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
?>