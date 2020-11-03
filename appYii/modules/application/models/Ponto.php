<?php

//namespace app\models;
namespace app\modules\application\models;
//https://www.yiiframework.com/doc/guide/2.0/en/db-active-record

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
//use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $first_punch_in
 * @property string $second_punch_in
 * @property string $password_hash
 * @property string $extra_time_punch_out
 * @property string $on_location
 */

class Ponto extends ActiveRecord {

    //const STATUS_DELETED = 0;
    //const STATUS_ACTIVE = 10;


    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{clock}}'; //'{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    /*
    public function rules() {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }
    */

    
}
