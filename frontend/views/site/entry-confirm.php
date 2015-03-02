<?php
use yii\helpers\Html;
?>
<?php
$this->title = 'Entry';
$this->params['breadcrumbs'][] = $this->title;?>
<h1><?= Html::encode($this->title) ?></h1>
Thank you for contacting us. We will respond to you as soon as possible.
<p>Вы ввели следующую информацию:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>
