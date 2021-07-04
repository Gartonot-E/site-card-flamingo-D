<?
session_start();

// Созадём переменные для входа в админку
$loginAdmin = 'admin';
$passwordAdmin = 'admin';

// Проверяем данные с формы и переменные, если всё верно, создаём переменную сессии для админа
if($loginAdmin == $_POST['login'] && $passwordAdmin == $_POST['password']) {
    $_SESSION['admin'] = $_POST['login'];
    header("Location: /admin/panel.php");
} else 
    $message = "ERROR";


?>
<style>
    body { display: flex; align-items: center; justify-content: center; height: 90vh; background: #35495E; font-family: Arial; color: #fff; }
    form { display: flex; flex-direction: column; }
    form label { margin-bottom: 20px; } 
    form input { width: 100%; padding: 10px 15px; box-sizing: border-box; margin-top: 5px; border-radius: 4px; border: none; }
    form input:focus, form input:active { outline: none; }
    form input[type="submit"] { background: #41B883; border: none; color: #fff; font-weight: bold; }
    .message { padding: 20px 0; text-align: center; background: #bd3838; margin: 0 0 15px 0; font-weight: 600; text-transform: uppercase; }
    .main-link-to-index { padding: 16px 0; color: #fff; text-align: center; margin-top: 20px; text-decoration: none; opacity: .5; transition: .3s; border: 1px solid #35495E; }
    .main-link-to-index:hover { border: 1px solid #fff; opacity: 1; }
</style>
<body>
    <form method="POST">
        <h2>Ademin-panel</h2>
        <?
        if(isset($message) && isset($_POST['done'])) {
            ?>
                <div class="message">
                    <?=$message?>
                </div>
            <?
        }
        ?>
        <label for="login">
            <span>Login</span>
            <input type="text" name="login" id="login">
        </label>
        <label for="password">
            <span>Password</span>
            <input type="password" name="password" id="password">
        </label>
        <input type="submit" name="done" value="Enter">
        <a href="/" class="main-link-to-index">HOME</a>
    </form>  
</body>
