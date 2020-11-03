<?php
//namespace app\models;
namespace app\modules\admin\models;

//use app\modules\application\models\SignupForm;
use app\modules\application\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class CadastroFuncionarioForm extends Model
{
    public $fullname;
    public $position;
    public $username;
    public $password;
    //public $plan;
    public $email;
    public $authKey;
    public $register_date;
    public $registered_by;
    //public $rememberMe = true;



    /**
     * @inheritdoc
     */
    public function rules()
    {

        return [
            [['fullname'], 'string', 'max' => 50],

            //[['username'], 'string', 'max' => 100],
            //[['username','password'], 'string', 'max' => 30],
            //[['username'], 'unique'],
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => 'app\modules\application\models\User', 'message' => 'Este usuário já existe. Escolha outro.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            //[['email'], 'unique'],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => 'app\modules\application\models\User', 'message' => 'Este email já existe.'],
            
            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            [['position'], 'string', 'max' => 25],
            //[['plan'], 'integer', 'max' => 3],
            [['authKey'], 'unique'],
            ['register_date', 'filter', 'filter' => 'trim'],
            [['registered_by'], 'integer', 'max' => 3],
            //['rememberMe', 'boolean'],
        ];

        /*
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => 'app\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
        */
    }




    public function attributeLabels()
    {
        return [
            //'id' => Yii::t('app', 'ID'),
            'fullname' => Yii::t('app', 'Nome Completo'),
            //'credential' => Yii::t('app', 'Credencial'),
            'position' => Yii::t('app', 'Cargo'),
            //'company' => Yii::t('app', 'Empresa'),
            'email' => Yii::t('app', 'Email'),
            'username' => Yii::t('app', 'Usuário'),
            'password' => Yii::t('app', 'Senha'),
            //'authKey' => Yii::t('app', 'Chave de Autenticação'),
            //'rememberMe' => Yii::t('app', 'Lembrar-me'),
        ];
    }



    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function addWorker()
    {
        if ($this->validate()) {
            $user = new User();
            $user->fullname = $this->fullname;
            $user->username = $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->position = $this->position;
            $user->register_date = date('Y-m-d H:i:s'); //$this->register_date;
            $user->registered_by = Yii::$app->user->identity->id;
            if ($user->save()) {
                return $user;
            }
        }

        return null;
    }


    
}
