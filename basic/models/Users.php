<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $id_pegawai
 * @property string $username
 * @property string $name
 * @property string $email
 * @property string $password
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'name', 'email', 'password'], 'required'],
            [['username'], 'string', 'max' => 23],
            [['name'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 80],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'username' => 'Username',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }
}
