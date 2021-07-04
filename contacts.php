<? require_once 'header.php' ?>
<? require_once 'db.php' ?>

<section>
    <div class="container">
        <div class="about-us">
            <div class="pages-logo">
                <img src="assets/images/icon/Object.png" alt="">
                <h1>Контакты</h1>
            </div>
            <div class="maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2709.848551207188!2d39.71447371600461!3d47.21954557916091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3b90d49c72a5d%3A0x6746438662b1607a!2z0JPQsNC30LXRgtC90YvQuSDQv9C10YAuLCAzMSwg0KDQvtGB0YLQvtCyLdC90LAt0JTQvtC90YMsINCg0L7RgdGC0L7QstGB0LrQsNGPINC-0LHQuy4sIDM0NDAwMg!5e0!3m2!1sru!2sru!4v1623442166015!5m2!1sru!2sru" width="100%" height="664" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contact-info">
                <div class="ct-info__logo">
                <?
                 $post = $db->query("SELECT * FROM `contacts_page`")->fetch(PDO::FETCH_ASSOC); 
                ?>
                    <p><?=$post['oblast']?></p>
                    <div class="ct-info__block">
                        <div class="ct-info__info">
                            <p><?=$post['name']?></p>
                            <div class="ct-info__time">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 0C6.72915 0 0 6.72915 0 15C0 23.2709 6.72915 30 15 30C23.2709 30 30 23.2709 30 15C30 6.72915 23.2709 0 15 0ZM15 28.125C7.76275 28.125 1.87501 22.2372 1.87501 15C1.87501 7.76275 7.76275 1.87501 15 1.87501C22.2372 1.87501 28.125 7.76275 28.125 15C28.125 22.2372 22.2372 28.125 15 28.125Z" fill="black"/>
                                    <path d="M15.9375 5.625H14.0625V15.3882L19.9622 21.2878L21.2878 19.9621L15.9375 14.6118V5.625Z" fill="black"/>
                                </svg>
                                <p><?=$post['time']?></p>
                            </div>
                        </div>
                        <div class="ct-info__phone">
                            <a href="tel:<?=$post['phone']?>"><?=$post['phone']?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require_once 'footer.php' ?>