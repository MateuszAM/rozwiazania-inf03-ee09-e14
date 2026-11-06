<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>BIURO TURYSTYCZNE</h1>
    </header>
    <section id="dane">
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
            <!-- Skrypt 1 -->
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'biuro');
                $sql1 = "SELECT `id`, `dataWyjazdu`, `cel`, `cena` FROM `wycieczki` WHERE `dostepna` = true;";
                $query1 = mysqli_query($conn, $sql1);
                while($line = mysqli_fetch_array($query1)){
                    echo "<li>$line[id]. dnia $line[dataWyjazdu] jedziemy do $line[cel], cena: $line[cena]</li>";
                }
            ?>
        </ul>
    </section>
    <main>
        <section id="lewy">
            <h2>Bestselery</h2>
            <table>
                <tbody>
                    <tr>
                        <td>Wenecja</td>
                        <td>kwiecień</td>
                    </tr>
                    <tr>
                        <td>Londyn</td>
                        <td>lipiec</td>
                    </tr>
                    <tr>
                        <td>Rzym</td>
                        <td>wrzesień</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <section id="srodkowy">
            <h2>Nasze zdjęcia</h2>
            <!-- Skrypt 2 -->
            <?php
                $sql2 = "SELECT `nazwaPliku`, `podpis` FROM `zdjecia` ORDER BY `podpis` DESC;";
                $query2 = mysqli_query($conn, $sql2);
                while($line = mysqli_fetch_array($query2)){
                    echo "<img src='$line[nazwaPliku]' alt='$line[podpis]'>";
                }
                mysqli_close($conn);
            ?>
        </section>
        <section id="prawy">
            <h2>Skontaktuj się</h2>
            <a href="mailto:turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: <a href="https://github.com/MateuszAM" target="_blank" style="font-size: unset; color: unset; margin: unset;text-decoration: none !important; padding: 0 !important;">MateuszAM</a></p>
    </footer>
</body>
</html>