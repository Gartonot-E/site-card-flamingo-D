<?
// Создаём сессию
session_start();

// Делаем проверку, вышел ли пользователь или нет
if($_SERVER['REQUEST_URI'] == "/admin/logout.php") {
    // Удаляем сессионную переменную
    unset($_SESSION['admin']);
    echo "<script>document.location.href = '/'; </script>";
}


require_once "../db.php";


// Если существует сессия, то пропускаем в админку, 
// иначе показываем форму входа
if(isset($_SESSION['admin'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админпанель | Flamingo</title>
    <link rel="stylesheet" href="/admin/style.css">
</head>
<body>
<header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="/" target="_blank">Главная</a></li>
                <li><a href="/admin/logout.php">Выйти</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="container">
        <h1>Редактирование сайта</h1>
        <hr>
        <div class="main-content">
            <aside>
                <nav>
                    <ul>
                        <li>
                            <span>Главная</span>
                            <ul>
                                <li><a href="/admin/editPages/main_offer.php">Редактирование оффера</a></li>
                                <li><a href="/admin/editPages/main_after_favorite.php">Редактирование текста под фаворитами</a></li>
                            </ul>
                        </li>
                        <li><a href="/admin/editPages/about.php">О нас</a></li>
                        <li><a href="/admin/editPages/company.php">О компании</a></li>
                        <li><a href="/admin/editPages/contacts.php">Контакты</a></li>
                        <li>
                            <span>Услуги</span>
                            <ul>
                                <li><a href="/admin/editPages/services_items.php">Редактирование товаров</a></li>
                                <li><a href="/admin/editPages/services_instagram.php">Редактирование образов с Instagramm</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside>
            <article class="content">
                <div class="block edit-offer">             
                    <?
                    
                    if($_SERVER['REQUEST_URI'] == "/admin/editPages/main_offer.php") {
                        require_once "editPages/main_offer.php";
                    }

                    if($_SERVER['REQUEST_URI'] == "/admin/editPages/main_after_favorite.php") {
                        require_once "editPages/main_after_favorite.php";
                    }

                    if($_SERVER['REQUEST_URI'] == "/admin/editPages/about.php") {
                        require_once "editPages/about.php";
                    }

                    if($_SERVER['REQUEST_URI'] == "/admin/editPages/company.php") {
                        require_once "editPages/company.php";
                    }

                    if($_SERVER['REQUEST_URI'] == "/admin/editPages/contacts.php") {
                        require_once "editPages/contacts.php";
                    }

                    if($_SERVER['REQUEST_URI'] == "/admin/editPages/services_items.php") {
                        require_once "editPages/services_items.php";
                    }

                    if($_SERVER['REQUEST_URI'] == "/admin/editPages/services_instagram.php") {
                        require_once "editPages/services_instagram.php";
                    }

                    ?>
                
                </div>
            </article>
        </div>
    </div>
</main>

</body>
</html>

<?
}
?>

