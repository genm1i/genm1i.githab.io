<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Киноиндустрия США</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul class="menu">
                <li><a href="?page=home">Главная</a></li>
                <li><a href="?page=history">История Голливуда</a></li>
                <li><a href="?page=top-movies">Самые кассовые фильмы</a></li>
                <li><a href="?page=actors">Знаменитые актеры</a></li>
                <li><a href="?page=festivals">Кинофестивали США</a></li>
                <li><a href="?page=references">Список литературы</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page) {
            case 'history':
                include('pages/history.php');
                break;
            case 'top-movies':
                include('pages/topMovies.php');
                break;
            case 'actors':
                include('pages/actors.php');
                break;
            case 'festivals':
                include('pages/festivals.php');
                break;
            case 'references':
                include('pages/references.php');
                break;
            default:
                include('pages/home.php');
                break;
        }
        ?>
    </main>

    <footer>
        <p>&copy; 2025 Киноиндустрия США. Все права защищены.</p>
        <p>Разработчики: Михайлова Жанна Евгеньевна и Спиридонова Арина Валерьевна</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>