<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoki</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h2>Poznaj smoki!</h2>
    </header>
    <nav>
        <div id="Baza" onclick="nawigacja('Baza')">Baza</div>
        <div id="Opisy" onclick="nawigacja('Opisy')">Opisy</div>
        <div id="Galeria" onclick="nawigacja('Galeria')">Galeria</div>
    </nav>
    <main>
        <section id="bazaSection">
            <h3>Baza Smoków</h3>
            <form method="post">
                <select name="smokiList">
                    <!-- Skrypt 1 -->
                    <?php
                        $conn = mysqli_connect('localhost', 'root', '', 'smoki');
                        $ask = "SELECT DISTINCT `pochodzenie` FROM `smok` ORDER BY `pochodzenie`;";
                        $query = mysqli_query($conn, $ask);
                        while($line = mysqli_fetch_row($query)){
                            echo "<option value='$line[0]'>$line[0]</option>";
                        }
                    ?>
                </select>
                <input type="submit" name="SzukajButton" value="Szukaj">
            </form>
            <table>
                <tr>
                    <th>Nazwa</th>
                    <th>Długość</th>
                    <th>Szerokość</th>
                </tr>
                <!-- Skrypt 2 -->
                <?php
                    if(isset($_POST['SzukajButton'])){
                    $kraj = $_POST['smokiList'];
                    $ask = "SELECT `nazwa`, `dlugosc`, `szerokosc` FROM `smok` WHERE `pochodzenie` = '$kraj';";
                    $query = mysqli_query($conn, $ask);
                    while($line = mysqli_fetch_row($query)){
                        echo "<tr><td>$line[0]</td><td>$line[1]</td><td>$line[2]</td></tr>";
                    }
                    mysqli_close($conn);
                    }
                ?>
            </table>
        </section>
        <section id="opisySection">
            <h3>Opisy smoków</h3>
            <dl>
                <dt>Smok czerwony</dt>
                <dd>Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami. Posiada łuski cenne na rynkach wschodnich do wyrabiania lekarstw. Jest dziki i groźny.</dd>
                <dt>Smok zielony</dt>
                <dd>Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami, ale tylko w kolorze zielonym. Jest kosmaty. Z sierści zgubionej przez niego, tka się najdroższe materiały.</dd>
                <dt>Smok niebieski </dt>
                <dd>Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza. Jest natchnieniem dla najlepszych malarzy. Często im pozuje. Smok ten jest przyjacielem ludzi i czasami im pomaga. Jest jednak próżny i nie lubi się przepracowywać.</dd>
            </dl>
        </section>
        <section id="galeriaSection">
            <h3>Galeria</h3>
            <img src="smok1.JPG" alt="Smok czerwony">
            <img src="smok2.JPG" alt="Smok wielki">
            <img src="smok3.JPG" alt="Skrzydlaty łaciaty">
        </section>
    </main>
    <footer><p>Stronę opracował: <a href="https://github.com/MateuszAM" target="_blank" style="font-size: unset; color: unset; margin: unset;text-decoration: none !important;">MateuszAM</a></p></footer>
    <script>
        function nawigacja(navID){
            // nawigacja
            let bazaNav = document.getElementById("Baza");
            let opisyNav = document.getElementById("Opisy");
            let galeriaNav = document.getElementById("Galeria");
            // sekcje
            let bazaSection = document.getElementById("bazaSection");
            let opisySection = document.getElementById("opisySection");
            let galeriaSection = document.getElementById("galeriaSection");
            if(navID === "Baza"){
                bazaNav.style.backgroundColor = "MistyRose";
                opisyNav.style.backgroundColor = "#FFAEA5";
                galeriaNav.style.backgroundColor = "#FFAEA5";

                bazaSection.style.display = "block";
                opisySection.style.display = "none";
                galeriaSection.style.display = "none";
            } else if(navID === "Opisy"){
                bazaNav.style.backgroundColor = "#FFAEA5";
                opisyNav.style.backgroundColor = "MistyRose";
                galeriaNav.style.backgroundColor = "#FFAEA5";

                bazaSection.style.display = "none";
                opisySection.style.display = "block";
                galeriaSection.style.display = "none";
            } else if(navID === "Galeria"){
                bazaNav.style.backgroundColor = "#FFAEA5";
                opisyNav.style.backgroundColor = "#FFAEA5";
                galeriaNav.style.backgroundColor = "MistyRose";

                bazaSection.style.display = "none";
                opisySection.style.display = "none";
                galeriaSection.style.display = "block";
            }
        }
    </script>
</body>
</html>