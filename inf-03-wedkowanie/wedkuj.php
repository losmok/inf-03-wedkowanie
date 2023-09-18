<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="style_1.css">
</head>
<body>
    <div class="header">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div class="left-1">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <!-- Script 1 -->
            <?php
                $conn = new mysqli("localhost","root","","wendkowanie") ;
                $zapytanie = ("SELECT `nazwa`, `akwen`, `wojewodztwo` FROM `ryby` JOIN `lowisko` ON `ryby`.`id` = `lowisko`.`Ryby_id` WHERE `rodzaj` = 3;");
                $odpowiedz = mysqli_query($conn,$zapytanie);
                    while($wynik=mysqli_fetch_row($odpowiedz)) {
                        echo "<li>$wynik[0] pływa w rzece $wynik[1], $wynik[2]</li>";
                    }
            ?>
        </ol>
    </div>
    <div class="right">
        <img src="ryba1.jpg" alt="Sum">
        <a href="Kwerendy.txt" target="_blank">Pobierz kwerendy</a>
    </div>
    <div class="left-2">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
            <!-- Script 2  -->
            <?php
                $conn = new mysqli("localhost","root","","wendkowanie");
                $zapytanie2 = ("SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia` = 1");
                $odpowiedz2 = mysqli_query($conn,$zapytanie2);
                    while($wynik2 = mysqli_fetch_row($odpowiedz2)) {
                        echo ("<tr>
                            <td>$wynik2[0]</td>
                            <td>$wynik2[1]</td>
                            <td>$wynik2[2]</td>
                        </tr>");
                    }
                mysqli_close($conn);
            ?>
        </table>
    </div>
    <div class="footer">
        <p>Stronę wykonał: Paweł Lewandowski</p>
    </div>
</body>
</html>