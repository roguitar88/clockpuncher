<?php

namespace app\modules\admin\controllers;


//use Exception;
use Yii;
use app\modules\admin\models\CadastroFuncionarioForm;
/*
use app\modules\application\models\LoginForm;
use app\modules\application\models\SolicitarRecuperacaoSenhaForm;
use app\modules\application\models\RecuperarSenhaForm;
use app\modules\application\models\CadastroForm;
use app\modules\application\models\ContatoForm;
*/
//use yii\base\InvalidParamException;
//use yii\web\BadRequestHttpException; 
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
//use yii\web\Response;



class PainelController extends Controller {





    public function init() {

        $this->enableCsrfValidation = false;

    }





    public function actionIndex() {

        try {


        }
        catch (Exception $e) {

            $_SESSION['error'] = $e->getMessage();

        }

        //var_dump($categorias);die;

        return $this->render('index', [
            //'categorias'  => $categorias,
            //'noticias'    => $noticias,
            //'depoimentos' => $depoimentos,
        ]);
    }





    public function actionNovoFuncionario() {
        $model = new CadastroFuncionarioForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($user = $model->addWorker()) {
                //if (Yii::$app->getUser()->login($user)) {
                    //return $this->goHome();
                    Yii::$app->getSession()->setFlash('success', 'Funcionário inserido com sucesso');

                    header('Location: /');
                    exit;
                //}
            }
        }

        return $this->render('novoFuncionario', [
            'model' => $model,
        ]);
    }
    



}
