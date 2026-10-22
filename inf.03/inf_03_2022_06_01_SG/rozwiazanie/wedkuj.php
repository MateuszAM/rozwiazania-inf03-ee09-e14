<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <header>
        <h1>Portal dla wędkarzy</h1>
    </header>
    <main>
        <section id="leftTop">
            <h3>Ryby zamieszkujące rzeki</h3>
            <ol>
                <!-- skrypt 1 -->
                <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');
                    $ask = "SELECT `r`.`nazwa`, `l`.`akwen`, `l`.`wojewodztwo` FROM `Ryby` r JOIN `Lowisko` l ON `r`.`id` = `l`.`Ryby_id` WHERE `l`.`rodzaj` = 3; ";
                    $query = mysqli_query($conn, $ask);
                    while($line = mysqli_fetch_row($query)){
                        echo "<li>$line[0] pływa  w  rzece $line[1], $line[2]</li>";
                    }
                ?>
            </ol>
        </section>
        <section id="right">
            <img src="ryba1.jpg" alt="sum"><br>
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </section>
        <section id="leftBottom">
            <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <thead>
                    <tr>
                        <th>L.p</th>
                        <th>Gatunek</th>
                        <th>Występowanie</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- skrypt 2 -->
                    <?php
                        $ask = "SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia` = 1;";
                        $query = mysqli_query($conn, $ask);
                        while($line = mysqli_fetch_row($query)){
                            echo "<tr><td>$line[0]</td><td>$line[1]</td><td>$line[2]</td></tr>";
                        }
                        mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </section>

    </main>
    <footer>
        <p>Stronę wykonał: <a href="https://github.com/MateuszAM" target="_blank" style="font-size: unset; color: unset; margin: unset;text-decoration: none !important;">MateuszAM</a></p>
    </footer>
</body>
</html>