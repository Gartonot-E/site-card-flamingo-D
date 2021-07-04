<?

if(isset($_POST['instagrammDone']) && !empty($_FILES['image1'])){
    // Сохраняем фото и обновляем в базе данных
    $path = "../assets/images/instagramm/";
    $fileName = md5($_FILES['image1']['name']).".png";

    if (move_uploaded_file($_FILES['image1']['tmp_name'], $path.$fileName)){
        $save = $db->query("UPDATE `instagramm_page` SET `img` = '".$fileName."' WHERE `id` = 1"); 
        if($save)  echo "<p class='success-message'>Фото 1 успешно измененно</p>";
    }
}


?>

<h2>Редактироуем "Наши образы в instagram"</h2>
    <div class="content">
    <form method="POST" enctype="multipart/form-data">
        <div class="instagram-images">
            <div class="in-images__block">
               <?
               
               $posts = $db->query("SELECT * FROM `instagramm_page`");

                foreach ($posts as $post) {
                    ?>
                     <div class="in-images__img">
                        <a href="#">
                            <img width="320" height="320" src="/assets/images/instagramm/<?=$post['img']?>">
                        </a>
                        <label>
                            <input type="file" name="image<?=$post['id']?>">
                        </label>
                    </div>
                    <?
                }
               
               ?>
            </div>
        </div>
        <input type="submit" name="instagrammDone" value="Сохранить">
    </form>


</div>
