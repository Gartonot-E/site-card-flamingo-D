<?

if(isset($_POST['contactDone']) && !empty($_POST['contactOblast'])){

    $oblast = $_POST['contactOblast'];
    $name = $_POST['contactName'];
    $phone = $_POST['contactPhone'];
    $time = $_POST['contactTime'];

    $obl = $db->query("UPDATE `contacts_page` SET `oblast` = '".$oblast."' WHERE `id` = 1;");
    $nam = $db->query("UPDATE `contacts_page` SET `name` = '".$name."' WHERE `id` = 1;");
    $pho = $db->query("UPDATE `contacts_page` SET `phone` = '".$phone."' WHERE `id` = 1;");
    $tim = $db->query("UPDATE `contacts_page` SET `time` = '".$time."' WHERE `id` = 1;");

    if($obl) echo "<p class='success-message'>Область успешно изменена</p>";
    if($nam) echo "<p class='success-message'>Наименование успешно изменено</p>";
    if($pho) echo "<p class='success-message'>Телефон успешно измененён</p>";
    if($tim) echo "<p class='success-message'>Время успешно изменено</p>";
}

?>
<h2>Редактироуем "Контакты"</h2>
    <div class="content">
    <?
         $post = $db->query("SELECT * FROM `contacts_page`")->fetch(PDO::FETCH_ASSOC); 
    ?>
    <form method="POST">
        <label>
            <input type="text" name="contactOblast" value="<?=$post['oblast']?>">
        </label>
        <label>
            <input type="text" name="contactName" value="<?=$post['name']?>">
        </label>
        <label>
            <input type="text" name="contactPhone" value="<?=$post['phone']?>">
        </label>
        <label>
            <input type="text" name="contactTime" value="<?=$post['time']?>">
        </label>
        <input type="submit" name="contactDone" value="Сохранить">
    </form>
</div>
