<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(['id' => 'entry-form']);?>

<?=$form->field( $model, 'name')?>
<?=$form->field( $model, 'email')?>
<?php
$this->title = 'Entry';
$this->params['breadcrumbs'][] = $this->title;?>
<h1><?= Html::encode($this->title) ?></h1>
<div class="form-group">
    <?=Html::submitButton('Отправить', ['class' => 'btn btn-primary','name' => 'entry-button'])?>    
</div>
<?php ActiveForm::end()?>

