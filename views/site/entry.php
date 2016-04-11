<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'login')->label('Логин') ?>
<?= $form->field($model, 'firstName')->label('Фамилия') ?>
<?= $form->field($model, 'lastName')->label('Имя') ?>
<?= $form->field($model, 'patronymic')->label('Отчество') ?>
<?= $form->field($model, 'patronymic')->hiddenInput(['status'=>2]) ?>

<?= $form->field($model, 'email')->label('e-mail') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>