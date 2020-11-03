<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

if (Yii::$app->user->isGuest) {
    header('Location: /');
    exit;
}else{
    if(Yii::$app->user->identity->credential == 0){
        header('Location: /');
        exit;
    }
}
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1>Cadastrar Novo Funcionário</h1>
<div class="row">
	<div class="col-lg-12 text-center">
        <?php $form = ActiveForm::begin(['id' => 'add-worker']); ?>
            <?= $form->field($model, 'fullname')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'position')->textInput(['autofocus' => true]) ?>


            <div class="form-group">
                <?= Html::submitButton('Adicionar Funcionário', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
        <?php ActiveForm::end(); ?>
	</div>
</div>