<?php

namespace app\modules\application\controllers;


//use Exception;
use Yii;
use app\modules\application\models\LoginForm;
use app\modules\application\models\SolicitarRecuperacaoSenhaForm;
use app\modules\application\models\RecuperarSenhaForm;
use app\modules\application\models\CadastroForm;
use app\modules\application\models\ContatoForm;
use app\modules\application\models\PontoForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException; 
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
//use yii\web\Response;


class SiteController extends Controller {





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





    public function actionLogin() {
        if (!\Yii::$app->user->isGuest) {
            //return $this->goHome();
            //return $this->redirect(['about']);
            header('Location: painel');
            exit;
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            //return $this->goBack();
            //return $this->redirect(['index']);
            if(Yii::$app->user->identity->credential == 1){
                header('Location: admin/painel');
                exit;
            }else{
                header('Location: painel');
                exit;
            }
        } else {
            //$model->password = '';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }





    public function actionLogout() {
        Yii::$app->user->logout();

        //return $this->goHome();
        header('Location: login');
        exit;
    }





    public function actionCadastro() {
        $model = new CadastroForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    //return $this->goHome();
                    header('Location: painel');
                    exit;
                }
            }
        }

        return $this->render('cadastro', [
            'model' => $model,
        ]);
    }




    public function actionContato() {
        $model = new ContatoForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contato', [
                'model' => $model,
            ]);
        }
    }



    /*
    public function actionSobre() {
        return $this->render('sobre');
    }
    */




    public function actionPainel() {
        $model = new PontoForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($clock = $model->clockin()) {
                //return $this->goHome();
                //header('Location: painel');
                //exit;
            }
        }

        return $this->render('painel');
    }




    public function actionSolicitarRecuperacaoSenha() {
        $model = new SolicitarRecuperacaoSenhaForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Verifique as instruções enviadas para o seu email.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Ops, não foi possível resetar a senha para o email fornecido.');
            }
        }

        return $this->render('solicitarRecuperacaoSenhaToken', [
            'model' => $model,
        ]);
    }




    public function actionRecuperarSenha($token) {
        try {
            $model = new RecuperarSenhaForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'A nova senha já foi salva.');

            return $this->goHome();
        }

        return $this->render('recuperarSenha', [
            'model' => $model,
        ]);
    }


}
