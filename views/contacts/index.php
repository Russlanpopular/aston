<?php

/* @var $this yii\web\View */

$this->title = 'Контакты';
?>
    <div class="main-content contacts-content">
        <div id="map-contacts">
<!--            <iframe src="https://www.google.com/maps/d/embed?mid=1mBPxwp62gGYHid0KoMENQyCGdC8" width="840" height="100%"></iframe>-->
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=TIAyBxBvTg4jL5Ji3D3nxwawvmO9Fkiz&amp;width=840&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
        </div>

        <div class="contacts-page">
            <div class="contacts-info">
                <div class="wrapper-contacts">
                    <h3 class="wow bounceInRight">Наши контакты</h3>

                    <ul class="wow bounceInLeft">
                        <li>ООО «Астон Украина»</li>
                        <?php foreach ($table_contacts as $contact) { ?>

                            <li><?=$contact['address']?></li>
                            <li><?=$contact['telephone']?></li>

                       <?php } ?>
                       
                      
                    </ul>
                </div>
            </div>
        </div>

    </div>