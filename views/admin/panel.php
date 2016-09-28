<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
<div class="container">
<h1 class="text-center">Main</h1>
<?php if($success != null ) { ?> 
<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Данные успешно обновлены
</div>
<?php } ?>
<div>
	    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-10\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 text-left control-label'],
        ],
    ]); ?>

<?php $main->title = $data_main[0]['title'] ?>
<?php $main->description = $data_main[0]['description'] ?>
<?php $main->keywords = $data_main[0]['keywords'] ?>
<?php $main->section1 = $data_main[0]['section1'] ?>
<?php $main->section2 = $data_main[0]['section2'] ?>
<?php $main->section3 = $data_main[0]['section3'] ?>
<?php $main->section4 = $data_main[0]['section4'] ?>
<?php $main->section5 = $data_main[0]['section5'] ?>


        <?= $form->field($main, 'title')->textInput() ?>

        <?= $form->field($main, 'description')->textInput() ?>
        <?= $form->field($main, 'keywords')->textInput() ?>
		<div class="form-group">
        <?= $form->field($main, 'section1')->textarea(['rows' => 10, 'cols' => 12])->label('section1') ?>
		</div>
        <div class="form-group">
          <?= $form->field($main, 'section2')->textarea(['rows' => 10, 'cols' => 12])->label('section2') ?>
        </div>
        <div class="form-group">
          <?= $form->field($main, 'section3')->textarea(['rows' => 10, 'cols' => 12])->label('section3') ?>
        </div>
        <div class="form-group">
           <?= $form->field($main, 'section4')->textarea(['rows' => 10, 'cols' => 12])->label('section4') ?>
        </div>
        <div class="form-group">
          <?= $form->field($main, 'section5')->textarea(['rows' => 10, 'cols' => 12])->label('section5') ?>
        </div>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <hr>
</div>

</div>
