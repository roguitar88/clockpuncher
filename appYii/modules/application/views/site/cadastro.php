<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

if (!Yii::$app->user->isGuest) {
    header('Location: /');
    exit;
}

$this->title = 'Cadastro';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Preencha os campos abaixo para cadastrar-se como empresa:</p>

    <div class="row">
        <div class="col-lg-5">
            <br>
            <br>
            <br>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <?= $form->field($model, 'fullname')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'company')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'position')->dropDownList(['ceo' => 'CEO', 'administrador' => 'Administrador', 'rh' => 'Diretor de RH', 'gerenterh' => 'Gerente de RH', 'assist' => 'Assistente Administrativo', 'consultorrh' => 'Consultor de Recursos Humanos', 'gestorrh' => 'Gestor de Recrutamento e Seleção', 'adp' => 'Assistente de Departamento Pessoal', 'analistatrein' => 'Analista de Treinamento e Capacitação', 'outros' => 'Outros'],['prompt'=>'Selecione seu cargo']); ?>

                <div class="form-group">
                    <?= Html::submitButton('Cadastrar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

    <div class="col-lg-offset-1" style="color:#999;">
        <?= Yii::t('app', 'Já possui conta? Faça o login {aqui}', [
            'aqui' => Html::a(Yii::t('app','aqui'), ['/login'])
        ]) ?>
    </div>

</div>
