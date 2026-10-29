<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <main>
        <section class="left">
            <h2>Menu</h2>
            <ol>
                <li>
                    <a href="index.html">Strona główna</a>
                </li>
                <li>
                    <a href="https://www.kwiaty.pl" target="_blank">Rozpoznaj kwiaty</a>
                </li>
                <li>
                    <a href="znajdz.php">Znajdź kwiaciarnię</a>
                    <ul>
                        <li>w Warszawie</li>
                        <li>w Malborku</li>
                        <li>w Poznaniu</li>
                    </ul>
                </li>
            </ol>
        </section>
        <section class="right">
            <h2>Znajdź kwiaciarnię</h2>
            <form method="post">
                <label for="miasto">Podaj nazwę miasta: </label>
                <input type="text" id="miasto" name="miasto">
                <input type="submit" name="submit" value="SPRAWDŹ">
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $miasto = $_POST['miasto'];
                    $conn = mysqli_connect('localhost', 'root', '', 'kwiaciarnia');
                    $sql = "SELECT `nazwa`, `ulica` FROM `kwiaciarnie` WHERE `miasto` = '$miasto';";
                    $query = mysqli_query($conn, $sql);
                    while($line = mysqli_fetch_row($query)){
                        echo "<h3>$line[0], $line[1]</h3>";
                    }
                    mysqli_close($conn);
                }
            ?>
        </section>
    </main>
    <footer>
        <p>Stronę opracował: <a href="https://github.com/MateuszAM" target="_blank" style="font-size: unset; color: unset; margin: unset;text-decoration: none !important; padding: 0 !important;">MateuszAM</a></p>
    </footer>
</body>
</html>