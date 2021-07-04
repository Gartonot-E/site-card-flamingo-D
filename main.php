<? require_once "db.php" ?>
<section class="offer-bg">
    <div class="container">
        <div class="offer">
            <div class="offer-info">
                <?
                    $post = $db->query("SELECT * FROM `offer_page`")->fetch(PDO::FETCH_ASSOC); 
                ?>
                <h1><?=$post['title']?></h1>
                <p><?=$post['content']?></p>
                <div class="offer-button">
                    <a href="/aboutus.php">Подробнее</a>
                </div>
            </div>
            <div class="offer-img">
                <img src="/assets/images/offer-img.png">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="slider">
            <p>Наши фавориты для вас:</p>
            <div class="slider__card">
                <div class="slider__card-block">
                    <img src="assets/images/card/slider-img-1.png">
                    <p>Футболка с принтом дракона - 750р</p>
                </div>
                <div class="slider__card-block">
                    <img src="assets/images/card/slider-img-2.png">
                    <p>Фирменная футболка с принтом - 1200р</p>
                </div>
                <div class="slider__card-block">
                    <img src="assets/images/card/slider-img-3.png">
                    <p>Футболка с принтом змеи и текста - 800р</p>
                </div>
            </div>
        </div>
        <div class="slider__text">
            <p>Коллекция женской одежды Flamingo 2021</p>
            <p>
                Практически каждый день тысячи женщин, стоя перед зеркалом, принимают решение, 
                которое во многом задает настроение на целый день – что надеть сегодня, чтобы 
                чувствовать себя уверенной и неотразимой? В коллекции женской одежды Flamingo 
                Вы сможете найти подходящий наряд для любой ситуации. Строгие блейзеры и 
                костюмы для успешных бизнес-встреч, джинсы, пуловеры и кардиганы для свободного 
                времени и прогулок с друзьями, отличная коллекция спортивной одежды – в широком 
                ассортименте женской одежды от Flamingo Вы найдете стильный...
            </p>
            <div class="slider-button">
                 <a href="/collection.php">Читать дальше</a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="advantage">
            <?
                $post = $db->query("SELECT * FROM `after_favorite_page`")->fetch(PDO::FETCH_ASSOC); 
            ?>
            <div class="advantage-h">
                <p><?=$post['title']?></p>
            </div>
            <div class="advantage-p">
                <p><?=$post['content']?></p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="main-contact">
            <div class="main-contact__maps">
                <p>Карта</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2709.848551207188!2d39.71447371600461!3d47.21954557916091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3b90d49c72a5d%3A0x6746438662b1607a!2z0JPQsNC30LXRgtC90YvQuSDQv9C10YAuLCAzMSwg0KDQvtGB0YLQvtCyLdC90LAt0JTQvtC90YMsINCg0L7RgdGC0L7QstGB0LrQsNGPINC-0LHQuy4sIDM0NDAwMg!5e0!3m2!1sru!2sru!4v1623442166015!5m2!1sru!2sru" width="100%" height="664" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="main-contact__info">
                <p>Наша информационная рассылка</p>
                <div class="newsletter">
                    <div class="newsletter_block">
                        <p>Бесплатная доставка*</p>
                    </div>
                    <div class="newsletter-list">
                        <ul>
                            <li>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.4987 3.5L12.4986 21.4961L5.50163 14.5013L0 20.0028L12.4987 32.4997L36 9.00163L30.4987 3.5Z" fill="#22B591"/>
                                </svg>
                                 <span>Тренды</span>
                            </li>
                            <li>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.4987 3.5L12.4986 21.4961L5.50163 14.5013L0 20.0028L12.4987 32.4997L36 9.00163L30.4987 3.5Z" fill="#22B591"/>
                                </svg>
                                 <span>Распродажа</span>
                            </li>
                            <li>
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.4987 3.5L12.4986 21.4961L5.50163 14.5013L0 20.0028L12.4987 32.4997L36 9.00163L30.4987 3.5Z" fill="#22B591"/>
                                </svg>
                                 <span>Скидки</span>
                            </li>
                        </ul>
                    </div>
                </div>       
                <div class="main-contact__form">
                    <!-- <form action="#" method="POST">
                        <input type="email" class="email-form" placeholder="Укажите email">
                        <input type="button" class="button-form" value="Отправить">
                    </form> -->
                    <p>
                        *Бесплатная доставка действительна для вашего следующего заказа в 
                        течение 30 дней после подписки на информационную рассылку. 
                        Минимальная стоимость заказа - 1495,00 рублей. Данное предложение 
                        не суммируется с другими акциями. Стоимость доставки с примеркой 
                        составляет 300р.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>