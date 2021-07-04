<?

if(isset($_POST['aboutDone']) && !empty($_POST['aboutContent'])){

    $content = $_POST['aboutContent'];

    $con = $db->query("UPDATE `about_page` SET `content` = '".$content."' WHERE `id` = 1;");

    if($con) echo "<p class='success-message'>Контент успешно измененён</p>";
}

?>
<h2>Редактироуем "О нас"</h2>
    <div class="content">
    <?
         $post = $db->query("SELECT * FROM `about_page`")->fetch(PDO::FETCH_ASSOC); 
    ?>
    <form method="POST">
        <label>
            <textarea name="aboutContent" cols="30" rows="10"><?=$post['content']?></textarea>
        </label>
        <input type="submit" name="aboutDone" value="Сохранить">
    </form>
</div>
