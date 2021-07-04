<? require_once 'header.php' ?>
<? require_once "db.php" ?>

<section>
    <div class="container">
        <div class="company">
            <div class="pages-logo">
                <img src="/assets/images/icon/Object.png" alt="">
                <h1>О Компании</h1>
            </div>
            <div class="company__info">
                <img src="/assets/images/company-img1.png" alt="">
                <div class="company__concept">
                    <img src="/assets/images/company-img2.png" alt="">
                    <?
                       $post = $db->query("SELECT * FROM `company_page`")->fetch(PDO::FETCH_ASSOC); 
                    ?>
                    <h2><?=$post['title']?></h2>
                    <p><?=$post['content']?></p>
                </div>
            </div>
        </div>
    </div>
</section>


<? require_once 'footer.php' ?>