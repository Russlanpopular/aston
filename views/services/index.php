<?php

/* @var $this yii\web\View */

$this->title = 'Услуги';
?>
        <section class="services-page">
            <div class="services-wrapper">
                <h4 class="header-services">Услуги</h4>
            </div>

            <h3 class="title-article clear">Виды страхования:</h3>

            <div class="services-wrapper services clear">
            <p>Опираясь на многолетний опыт, мы предлагает своим Клиентам наиболее оптимальные решения по следующим видам страхования: </p>
            <?php foreach ($services as $service) { ?>
                <article class="service">
                    <div class="row">
                        <div class="cell">
                            <img src="images/<?=$service['img']?>">
                        </div>

                        <div class="text-article">
                            <a href="#"><?=$service['article_head']?></a>

                            <p>
                                <?=$service['article_text']?>
                            </p>
                        </div>
                    </div>
                </article>
            <?php } ?>


                
            </div>

            <div class="bottom-info">
                Урегулирование убытков – предоставление качественной поддержки и максимальной помощи в урегулировании страховых событий. 
            </div>
        </section>


