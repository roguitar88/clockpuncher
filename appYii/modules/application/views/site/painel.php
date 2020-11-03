<br> 
<br>
<br>
<br>
<br>
<br>
<?php
/*
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
*/

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

if (Yii::$app->user->isGuest) {
	header('Location: /');
	exit;
}else{
	if(Yii::$app->user->identity->credential == 1){
		header('Location: /');
		exit;
	}
}
?>

painel<br>
<?= Yii::$app->user->identity->username ?>
<br>
<?= Yii::$app->user->identity->credential ?>
<br>
<br>

<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
    <div class="form-group">
        <?= Html::submitButton('Marcar entrada', ['class' => 'btn btn-primary', 'name' => 'clockin-button']) ?>
    </div>
<?php ActiveForm::end(); ?>


