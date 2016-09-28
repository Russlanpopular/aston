<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<div class="container">
    <h1 class="text-center">Results</h1>
    <hr>
    <div class="col-md-offset-1">
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>

        <?php for ($i=0; $i<count($table_results); $i++) { ?>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'form-horizontal'],
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
                    'labelOptions' => ['class' => 'col-lg-2 text-left control-label'],
                ],
            ]); ?>

            <?php $results->section = $table_results[$i]['section'] ?>
            <?php $results->action = 'update' ?>
            <?php $results->id = $table_results[$i]['id']?>
            <div class="col-md-12">
                <div class="form-group">
                    <?= $form->field($results, 'id')->hiddenInput()->label(false); ?>
                </div>
                <div class="form-group">
                    <?= $form->field($results, 'action')->hiddenInput()->label(false); ?>
                </div>
                <div class="form-group">
                    <?= $form->field($results, 'section')->textarea(['rows' => 10, 'cols' => 12])->label('section') ?>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-1 col-lg-11">
                        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                    </div>
                </div>

                <?php ActiveForm::end(); ?>
            </div>


        <?php } ?>
<!--        <h1 class="text-center">Добавить секцию</h1>-->
<!--        <hr>-->

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'form-horizontal'],
            'fieldConfig' => [
                'template' => "{label}\n<div class=\"col-lg-6\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
                'labelOptions' => ['class' => 'col-lg-2 text-left control-label'],
            ],
        ]); ?>

        <?php $results->section = null ?>
        <?php $results->action = 'add' ?>

        <div class="form-group">
            <?= $form->field($results, 'action')->hiddenInput()->label(false); ?>
        </div>
        <div class="form-group">
            <?= $form->field($results, 'section')->textarea(['rows' => 10, 'cols' => 12])->label('section') ?>
        </div>


        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>


    </div>

</div>
