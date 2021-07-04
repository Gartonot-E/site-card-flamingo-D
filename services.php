<?php require_once 'header.php' ?>

<section>
    <div class="container">
        <div class="about-us">
            <div class="pages-logo">
                <img src="/assets/images/icon/Object.png">
                <h1>Товары</h1>
            </div>
        </div>

        <div class="products">
            <?
                $posts = $db->query("SELECT * FROM `items_page`");

                foreach ($posts as $post) {
                    ?>
                        <div class="products__block">
                            <img src="/assets/images/items/<?=$post['img']?>">
                        </div>
                    <?
                }
            ?>
        </div>

        <div class="instagram-images">
            <p>Наши образы в instagram</p>

            <div class="in-images__block">
               <?
                    $posts = $db->query("SELECT * FROM `instagramm_page`");

                    foreach ($posts as $post) {
                        ?>
                            <div class="in-images__img">
                            <a href="#">
                                <img width="320" height="320" src="/assets/images/instagramm/<?=$post['img']?>">
                            </a>
                        </div>
                        <?
                    }
               ?>
            </div>
        </div>
    </div>
</section>


<?php require_once 'footer.php' ?>