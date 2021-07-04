<? require_once 'header.php' ?>
<? require_once 'db.php' ?>

<section>
    <div class="container">
        <div class="about-us">
            <div class="pages-logo">
                <img src="/assets/images/icon/Object.png">
                <h1>О Нас</h1>
            </div>
            <div class="about-us__info">
                <div class="about-us__text">
                    <?
                       $post = $db->query("SELECT * FROM `about_page`")->fetch(PDO::FETCH_ASSOC); 
                    ?>
                    <p><?=$post['content']?></p>
                </div>
                  <img src="/assets/images/about-us-img.png">
            </div>
        </div>
    </div>
</section>

<? require_once 'footer.php' ?>
