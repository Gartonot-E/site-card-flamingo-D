<?

if(isset($_POST['itemsDone']) && !empty($_FILES['image1'])){
    // Сохраняем фото и обновляем в базе данных
    $path = "../assets/images/items/";
    $fileName = md5($_FILES['image1']['name']).".png";

    if (move_uploaded_file($_FILES['image1']['tmp_name'], $path.$fileName)){
        $save = $db->query("UPDATE `items_page` SET `img` = '".$fileName."' WHERE `id` = 1"); 
        if($save)  echo "<p class='success-message'>Фото 1 успешно измененно</p>";
    }
}


if(isset($_POST['itemsDone']) && !empty($_FILES['image2'])){
    // Сохраняем фото и обновляем в базе данных
    $path = "../assets/images/items/";
    $fileName = md5($_FILES['image2']['name']).".png";

    if (move_uploaded_file($_FILES['image2']['tmp_name'], $path.$fileName)){
        $save = $db->query("UPDATE `items_page` SET `img` = '".$fileName."' WHERE `id` = 2"); 
        if($save)  echo "<p class='success-message'>Фото 2 успешно измененно</p>";
    }
}


if(isset($_POST['itemsDone']) && !empty($_FILES['image3'])){
    // Сохраняем фото и обновляем в базе данных
    $path = "../assets/images/items/";
    $fileName = md5($_FILES['image3']['name']).".png";

    if (move_uploaded_file($_FILES['image3']['tmp_name'], $path.$fileName)){
        $save = $db->query("UPDATE `items_page` SET `img` = '".$fileName."' WHERE `id` = 3"); 
        if($save)  echo "<p class='success-message'>Фото 3 успешно измененно</p>";
    }
}


if(isset($_POST['itemsDone']) && !empty($_FILES['image4'])){
    // Сохраняем фото и обновляем в базе данных
    $path = "../assets/images/items/";
    $fileName = md5($_FILES['image4']['name']).".png";

    if (move_uploaded_file($_FILES['image4']['tmp_name'], $path.$fileName)){
        $save = $db->query("UPDATE `items_page` SET `img` = '".$fileName."' WHERE `id` = 4"); 
        if($save)  echo "<p class='success-message'>Фото 4 успешно измененно</p>";
    }
}


?>

<!-- <img src="../../assets/images/instagramm/in-images-2.png"> -->
<h2>Редактироуем "Наши образы в instagram"</h2>
    <div class="content">
    <?
         $post = $db->query("SELECT * FROM `about_page`")->fetch(PDO::FETCH_ASSOC); 
    ?>
    <form method="POST" enctype="multipart/form-data">
       
        <div class="products">
            <?
                $posts = $db->query("SELECT * FROM `items_page`");

                foreach ($posts as $post) {
                    ?>
                        <div class="products__block">
                            <img src="/assets/images/items/<?=$post['img']?>">
                            <label>
                                <input type="file" name="image<?=$post['id']?>">
                            </label>
                        </div>

                    <?
                }
            ?>
        </div>

        <input type="submit" name="itemsDone" value="Сохранить">
    </form>


</div>
