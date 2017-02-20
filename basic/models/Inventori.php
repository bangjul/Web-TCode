<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventori".
 *
 * @property integer $id
 * @property string $code
 * @property string $waktu
 * @property string $id_petugas
 * @property string $nama_petugas
 */
class Inventori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'inventori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'id_petugas', 'nama_petugas'], 'required'],
            [['waktu'], 'safe'],
            [['code'], 'string', 'max' => 20],
            [['id_petugas', 'nama_petugas'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'waktu' => 'Waktu',
            'id_petugas' => 'Id Petugas',
            'nama_petugas' => 'Nama Petugas',
        ];
    }
}
