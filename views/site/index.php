<?php

/* @var $this yii\web\View */

$this->title =  $main[0]['title'];
?>
    <div class="main-content">
        <section class="info-company">
            <?=$main[0]['section1']?>
        </section>

        <section class="results-info">
              <?=$main[0]['section2']?>

            <div class="list-results clear">
                <?php foreach ($sections as $value){ ?>

                    <div class="item-result wow flipInX">
                        <span></span>
                        <p>
                            <?=$value["section"]; ?>
                        </p>
                    </div>

                <?php } ?>
            </div>
        </section>

        <div class="guarantees">
            <?=$main[0]['section3']?>
        </div>

        <div class="slider">
            <?=$main[0]['section4']?>
        </div>

        <section class="tabs wow slideInDown">
            <?=$main[0]['section5']?>
        </section>

<!--        <section class="partners">-->
<!--            <h2 class="block-header wow bounceInLeft">Наши партнеры</h2>-->
<!---->
<!--            <div class="list-partners">-->
<!--            --><?php //$count = 0.5; $rowcount = 0;?>
<!--                --><?php //foreach ($imgs as $img) { ?>
<!--                    --><?php //if(($rowcount%4 == 0)){ echo '<div class="row">';}?>
<!--                        <div class="cell-partner wow bounceInUp" data-wow-delay="--><?//=$count."s";?><!--">-->
<!--                            <a href="#"><img src="images/--><?//=$img['src']?><!--"></a>-->
<!--                        </div>  -->
<!--                    --><?php //if(($rowcount%4 == 3)){ echo '</div>';}?><!-- -->
<!--                    --><?php //$count += 0.5; $rowcount++?>
<!--              --><?php // } ?>
<!--            -->
<!--               -->
<!--                -->
<!--            </div>-->
<!--        </section>-->
<div id="map">
<!--    <iframe src="https://www.google.com/maps/d/embed?mid=1mBPxwp62gGYHid0KoMENQyCGdC8" width="100%" height="480"></iframe>-->
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=TIAyBxBvTg4jL5Ji3D3nxwawvmO9Fkiz&amp;width=100%&amp;height=400&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
</div>

    </div>