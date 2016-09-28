<?php

/* @var $this yii\web\View */

$this->title = 'Партнеры';
?>

    <div class="main-content">
        <section class="partners partners-page">

            <div class="info-partners">
                <h4>Партнеры</h4>
                <p>
                    Благодаря профессионализму, новаторству, качеству обслуживания и обширному кругу партнеров на<br/>
                    страховом рынке, мы работаем с рядом ведущих страховых компаний Украины:
                </p>
            </div>

<div class="list-partners">
<?php $count = 0.5; $rowcount = 0;?>
    <?php foreach ($imgs as $img) { ?>
        <?php if(($rowcount%4 == 0)){ echo '<div class="row">';}?>
            <div class="cell-partner">
                <a href="<?=$img['description'] ?>" target="_blank"><img src="images/<?=$img['src']?>"></a>
                                        <i class="icon-open"></i>

<!--                --><?php //if(!empty($img['description'])){ ?>
<!--                    <div class="hint-partners">-->
<!--                        --><?//=$img['description']?>
<!--                    </div>-->
<!--                --><?php //} ?>


            </div>  
        <?php if(($rowcount%4 == 3)){ echo '</div>';}?> 
        <?php $count += 0.5; $rowcount++?>
  <?php  } ?>

   
    
</div>
        </section>
    </div>
