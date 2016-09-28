<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="container">
	<h1 class="text-center">Contacts</h1>
	<hr>
	<div class="col-md-offset-2">
		<?php for ($i=0; $i<count($table_contacts); $i++) { ?> 
			    <?php $form = ActiveForm::begin([
		        'id' => 'login-form',
		        'options' => ['class' => 'form-horizontal'],
		        'fieldConfig' => [
		            'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
		            'labelOptions' => ['class' => 'col-lg-2 text-left control-label'],
		        ],
		    ]); ?>

		<?php $contacts->address = $table_contacts[$i]['address'] ?>
		<?php $contacts->telephone = $table_contacts[$i]['telephone'] ?>
		<?php $contacts->action = 'update' ?>
		<?php $contacts->id = $table_contacts[$i]['id']?>
				<div class="form-group">
					<?= $form->field($contacts, 'id')->hiddenInput()->label(false); ?>
				</div>
				<div class="form-group">
					<?= $form->field($contacts, 'action')->hiddenInput()->label(false); ?>
				</div>
				<div class="form-group">
					<?= $form->field($contacts, 'address')->textInput()->label("Address"); ?>
				</div>	
				<div class="form-group">
					<?= $form->field($contacts, 'telephone')->textInput()->label("Telephone"); ?>
				</div>
		        <div class="form-group">
		            <div class="col-lg-offset-1 col-lg-11">
		                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
		            </div>
		        </div>

		    <?php ActiveForm::end(); ?>
	</div>
			<?php } ?>

</div>