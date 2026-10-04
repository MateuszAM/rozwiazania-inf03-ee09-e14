<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wykaz chorób</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Informacja o chorobach w Polsce</h1>
    </header>
    <nav>
        <a href="https://szpitale.pl/" target="_blank">Szpitale</a>
        <a href="https://www.przychodnie.pl/" target="_blank">Przychodnie</a>
        <a href="https://www.nfz.gov.pl/" target="_blank">NFZ</a>
    </nav>
    <main>
        <section id="lewy">
            <h2>Choroby zakaźne</h2>
            <!-- Skrypt 1 -->
            <ol>
                <?php 
                    $conn = mysqli_connect("localhost", "root", "", "choroby");
                    $sql = "SELECT `nazwa` FROM `choroby` WHERE `zakazna` = 'T' ORDER BY `nazwa`;";
                    $ask = mysqli_query($conn, $sql);
                    while($line=mysqli_fetch_row($ask)){
                        echo "<li>$line[0]</li>";
                    }
                ?>
            </ol>
        </section>
        <section id="prawy">
            <h2>Objawy chorób</h2>
            <form method="post">
                <!-- Skrypt 2 -->
                <select name="choroby">
                    <?php 
                        $sql = "SELECT `id`, `nazwa` FROM `choroby`;";
                        $ask = mysqli_query($conn, $sql);
                        while($line=mysqli_fetch_row($ask)){
                            echo "<option value='$line[0]'>$line[1]</option>";
                        }
                    ?>
                </select>
                <input type="submit" name="sprawdz" value="Sprawdź">
            </form>
            <div id="result">
                <!-- Skrypt 3 -->
                <?php
                    if (isset($_POST['sprawdz'])) {
                        $choroby = $_POST["choroby"];
                    $sql = "SELECT o.nazwa FROM `objawy` o JOIN `choroby_objawy` co ON o.id = co.id_objawy WHERE co.id_choroby = '$choroby';";
                    $ask = mysqli_query($conn, $sql);
                    while($line=mysqli_fetch_row($ask)){
                        echo "<span> $line[0] </span>";
                    }
                    }
                    mysqli_close($conn);
                ?>
            </div>
        </section>
    </main>
    <footer>
        <p>Stronę opracował: <a href="https://github.com/MateuszAM" target="_blank" style="font-size: unset; color: unset; margin: unset;text-decoration: none !important;">MateuszAM</a></p>
    </footer>
    <img src="zdrowia.png" alt="Życzymy zdrowia!">
</body>
</html>