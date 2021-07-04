<?

if(isset($_POST['offerDone']) && !empty($_POST['offerTitle'])){

    $title = $_POST['offerTitle'];
    $content = $_POST['offerContent'];

    $tit = $db->query("UPDATE `offer_page` SET `title` = '".$title."' WHERE `offer_page`.`id` = 1;");
    $con = $db->query("UPDATE `offer_page` SET `content` = '".$content."' WHERE `offer_page`.`id` = 1;");

    if($tit) echo "<p class='success-message'>Заголовок успешно измененё</p>";
    if($con) echo "<p class='success-message'>Контент успешно измененён</p>";
}

?>
<h2>Редактироуем оффер</h2>
    <div class="content">
    <?
        $post = $db->query("SELECT * FROM `offer_page`")->fetch(PDO::FETCH_ASSOC);
    ?>
    <form method="POST">
        <label>
            <input type="text" name="offerTitle" value="<?=$post['title']?>">
        </label>
        <label>
            <textarea name="offerContent" cols="30" rows="10"><?=$post['content']?></textarea>
        </label>
        <input type="submit" name="offerDone" value="Сохранить">
    </form>
</div>
