<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h1>Pensjonat pod dobrym humorem</h1>
    </header>
    <main>
        <section class="left">
            <a href="index.html">GŁÓWNA</a><br>
            <img src="1.jpg" alt="pokoje">
        </section>
        <section class="center">
            <a href="cennik.php">CENNIK</a><br>
            <table>
                <tbody>
                    <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'wynajem');
                        $sql = "SELECT * FROM `pokoje`;";
                        $ask = mysqli_query($conn, $sql);
                        while($line = mysqli_fetch_row($ask)){
                            echo "<tr><td>$line[0]</td><td>$line[1]</td><td>$line[2]</td></tr>";
                        }
                        mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </section>
        <section class="right">
            <a href="kalkulator.html">KALKULATOR</a><br>
            <img src="3.jpg" alt="pokoje">
        </section>
    </main>
    <footer>
        <p>Stronę opracował: <a href="https://github.com/MateuszAM" target="_blank" style="font-size: unset; color: unset; margin: unset;text-decoration: none !important; padding: 0 !important;">MateuszAM</a></p>
    </footer>
</body>
</html>