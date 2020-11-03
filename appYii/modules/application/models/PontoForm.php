<?php
//namespace app\models;
namespace app\modules\application\models;

//use app\modules\application\models\SignupForm;
use yii\base\Model;
use Yii;
//use yii\db\ActiveRecord;
//use yii\web\IdentityInterface;
//use yii\behaviors\TimestampBehavior;
//use yii\base\NotSupportedException;


/**
 * Signup form
 */
class PontoForm extends Model
//class PontoForm extends ActiveRecord implements identityInterface
{
    public $first_punch_in;
    //public $second_punch_in;
    //public $extra_time_punch_out
    public $id_user;
    public $on_location;


    /**
     * @inheritdoc
     */
    public function rules()
    {

        return [
            [['id_user'], 'integer', 'max' => 3],
            ['first_punch_in', 'filter', 'filter' => 'trim'],
            //['second_punch_in', 'filter', 'filter' => 'trim'],
            //['extra_time_punch_out', 'filter', 'filter' => 'trim'],
            [['on_location'], 'integer', 'max' => 3],   //boolean
        ];
    }



    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function clockin()
    {
        if ($this->validate()) {
            $clock = new Ponto();
            $clock->first_punch_in = date('Y-m-d H:i:s'); //$this->register_date;
            //$clock->second_punch_in = date('Y-m-d H:i:s');
            //$clock->extra_time_punch_out = date('Y-m-d H:i:s');
            $clock->id_user = Yii::$app->user->identity->id;
            $clock->on_location = 1;
            if ($clock->save()) {
                return $clock;
            }
        }

        return null;
    }


    
}
