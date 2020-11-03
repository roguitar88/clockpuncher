<?php
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
<br>
<h1>Painel Administrativo</h1>
<p><a href="<?= Yii::getAlias('@web/') ?>admin/painel/novo-funcionario">Cadastrar funcionário</a></p>
<p>Gerar relatório mensal</p>
