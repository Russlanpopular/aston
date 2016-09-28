<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<div class="container">
<h1 class="text-center">Service</h1>
<hr>
<div class="col-md-offset-1">

<?php for ($i=0; $i<count($table_service); $i++) { ?> 
	    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 text-left control-label'],
        ],
    ]); ?>

<?php $service->article_head = $table_service[$i]['article_head'] ?>
<?php $service->img = $table_service[$i]['img'] ?>
<?php $service->article_text = $table_service[$i]['article_text'] ?>
<?php $service->id = $table_service[$i]['id']?>
<?php $service->defaultimg = $table_service[$i]['img'] ?>
<?php $service->action = 'update' ?>
<div class="col-md-3 cell-partner">
	<img src="/web/images/<?=$service->img?>" alt="Img">
</div>
<div class="col-md-9">
		<div class="form-group">
			<?= $form->field($service, 'defaultimg')->hiddenInput()->label(false); ?>
		</div>
		<div class="form-group">
			<?= $form->field($service, 'action')->hiddenInput()->label(false); ?>
		</div>
		<div class="form-group">
			<?= $form->field($service, 'id')->hiddenInput()->label(false); ?>
		</div>
		<div class="form-group">
			<?= $form->field($service, 'img')->fileInput()->label("service img"); ?>
		</div>
		<div class="form-group">
			<?= $form->field($service, 'article_head')->textInput() ?> 
		</div>

		<div class="form-group">
			<?= $form->field($service, 'article_text')->textarea(['rows' => 10, 'cols' => 12])->label('article_text') ?>
		</div>
		

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
</div>
    <?php ActiveForm::end(); ?>

	<?php } ?>

<hr>

	    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 text-left control-label'],
        ],
    ]); ?>

<?php $service->article_head = null ?>
<?php $service->img = null ?>
<?php $service->article_text = null ?>
<?php $service->action = 'add' ?>

		<div class="form-group">
			<?= $form->field($service, 'action')->hiddenInput()->label(false); ?>
		</div>
		<div class="form-group">
			<?= $form->field($service, 'img')->fileInput()->label("Service img"); ?>
		</div>
		<div class="form-group">
			<?= $form->field($service, 'article_head')->textInput() ?> 
		</div>

		<div class="form-group">
			<?= $form->field($service, 'article_text')->textarea(['rows' => 10, 'cols' => 12])->label('article_text') ?>
		</div>
		

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>


</div>

</div>
