<?php

$rozvrhy = [
    // První ročník
    '1.A' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YI',
    '1.B' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YJ',
    '1.C' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YK',
    '1.F' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YM',
    '1.G' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YN',
    '1.H' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YL',
    // Druhý ročník
    '2.A' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YB',
    '2.B' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YC',
    '2.C' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YD',
    '2.F' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YE',
    '2.G' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YF',
    '2.H' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YG',
    // Třetí ročník
    '3.A' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/Y2',
    '3.B' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/Y3',
    '3.C' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/Y4',
    //'3.D.' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/XD',
    '3.F' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/Y6',
    '3.G' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/Y7',
    '3.H' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/Y5',
    // '3.R' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/YO',
    // Čtvrtý ročník
    '4.A' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/XV',
    '4.B' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/XW',
    '4.C' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/XX',
    '4.F' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/XZ',
    '4.G' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/Y0',
    '4.H' => 'https://ossp.bakalari.cz/Timetable/Public/Actual/Class/XY',
];

$buttons = [
    'Jídelníček' => 'https://www.strava.cz/Strava/Stravnik/Jidelnicky?tisk&zarizeni=0482',
    'Přidat screen' => 'login.php',
];
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiosk</title>
    <link rel="stylesheet" href="css/screen.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="screensaver">Spořič obrazovky</div>

    <script>
        let timeout;

        function resetTimer() {
            clearTimeout(timeout);
            document.getElementById('screensaver').style.display = 'none';
            timeout = setTimeout(showScreensaver, 10000); // 10 sekund neaktivity
        }

        function showScreensaver() {
            document.getElementById('screensaver').style.display = 'block';
        }

        // Detekce aktivity
        document.addEventListener('mousemove', resetTimer);
        document.addEventListener('keydown', resetTimer);

        resetTimer(); // Spustíme počítání od začátku
    </script>
</body>
</html>
