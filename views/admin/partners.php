<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="container">
<h1 class="text-center">Partners</h1>
<hr>
<div class="col-md-offset-1">
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  
<?php for ($i=0; $i<count($table_partners); $i++) { ?> 
	    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 text-left control-label'],
        ],
    ]); ?>

<?php $partners->src = $table_partners[$i]['src'] ?>
<?php $partners->description = $table_partners[$i]['description'] ?>
<?php $partners->action = 'update' ?>
<?php $partners->defaultimg = $table_partners[$i]['src'] ?>
<?php $partners->id = $table_partners[$i]['id']?>
<div class="col-md-3 cell-partner">
	<img src="/web/images/<?=$partners->src?>" alt="img">
</div>
<div class="col-md-9">
		<div class="form-group">
			<?= $form->field($partners, 'defaultimg')->hiddenInput()->label(false); ?>
		</div>
		<div class="form-group">
			<?= $form->field($partners, 'id')->hiddenInput()->label(false); ?>
		</div>
		<div class="form-group">
			<?= $form->field($partners, 'action')->hiddenInput()->label(false); ?>
		</div>
		<div class="form-group">
			<?= $form->field($partners, 'src')->fileInput()->label("Partners img"); ?>
		</div>	
		<div class="form-group">
			<?= $form->field($partners, 'description')->textInput()->label('description') ?>
		</div>
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
</div>


	<?php } ?>
<h1 class="text-center">Добавить партнера</h1>
<hr>

	    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-2 text-left control-label'],
        ],
    ]); ?>

<?php $partners->src = null ?>
<?php $partners->description = null ?>
<?php $partners->action = 'add' ?>

		<div class="form-group">
			<?= $form->field($partners, 'action')->hiddenInput()->label(false); ?>
		</div>
		<div class="form-group">
			<?= $form->field($partners, 'src')->fileInput()->label("Partners img"); ?>
		</div>	
		<div class="form-group">
			<?= $form->field($partners, 'description')->textarea(['rows' => 10, 'cols' => 12])->label('description') ?>
		</div>
		

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>


</div>

</div>
