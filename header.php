<?
    require_once "db.php";
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Base -->
    <title>Flamingo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Russo+One&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="/assets/css/style.css">
    
</head>
<body>
    
<header>
    <div class="header-bg">
        <div class="header-panel">
            <div class="container">
                <div class="top-header">
                    <div class="top-header__logo">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M15.2715 15.2824L0.447305 9.04065C0.234932 8.95119 0 9.10716 0 9.33765V26.0245C0 26.4462 0.256717 26.8254 0.64827 26.982L15.0268 32.7334C15.2385 32.8181 15.4688 32.6621 15.4688 32.4342V15.5794C15.4688 15.4497 15.391 15.3328 15.2715 15.2824Z" fill="white"/>
                                <path d="M16.625 13.5091L30.9539 7.47591C31.2115 7.3675 31.2184 7.00502 30.9652 6.88687L16.9361 0.339984C16.6597 0.211013 16.3404 0.211013 16.0639 0.339984L2.03485 6.88687C1.78162 7.00502 1.78851 7.3675 2.04607 7.47591L16.375 13.5091C16.4549 13.5428 16.5451 13.5428 16.625 13.5091Z" fill="white"/>
                                <path d="M17.5312 15.5794V32.4342C17.5312 32.6621 17.7615 32.8181 17.9732 32.7334L32.3517 26.982C32.7432 26.8253 33 26.4462 33 26.0245V9.33765C33 9.10716 32.7651 8.95119 32.5527 9.04065L17.7285 15.2824C17.609 15.3328 17.5312 15.4497 17.5312 15.5794Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="33" height="33" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <a href="/">Flamingo</a>
                    </div>
                    <nav class="top-header__menu">
                    <?
                       $post = $db->query("SELECT * FROM `contacts_page`")->fetch(PDO::FETCH_ASSOC); 
                    ?>
                        <ul>
                            <li><a href="/">Главная</a></li>
                            <li><a href="/aboutus.php">О нас</a></li>
                            <li><a href="/company.php">О компании</a></li>
                            <li><a href="/contacts.php">Контакты</a></li>
                            <li><a href="/services.php">Товары</a></li>
                            <div class="top-header__phone">
                                <a href="tel:<?=$post['phone']?>"><?=$post['phone']?></a>
                            </div>
                        </ul>
                    </nav>
                    <div class="gamburger">
                        <span class="line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>