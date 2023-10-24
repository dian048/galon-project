<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pemesanan".
 *
 * @property int $id
 * @property string $kode_pemesan
 * @property int $get_user
 * @property int $get_galon
 *
 * @property Galon $getGalon
 * @property User $getUser
 */
class Pemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_pemesan', 'get_user', 'get_galon'], 'required'],
            [['get_user', 'get_galon'], 'integer'],
            [['kode_pemesan'], 'string', 'max' => 225],
            [['get_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['get_user' => 'id']],
            [['get_galon'], 'exist', 'skipOnError' => true, 'targetClass' => Galon::class, 'targetAttribute' => ['get_galon' => 'id_galon']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_pemesan' => 'Kode Pemesan',
            'get_user' => 'Get User',
            'get_galon' => 'Get Galon',
        ];
    }

    /**
     * Gets query for [[GetGalon]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGetGalon()
    {
        return $this->hasOne(Galon::class, ['id_galon' => 'get_galon']);
    }

    /**
     * Gets query for [[GetUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGetUser()
    {
        return $this->hasOne(User::class, ['id' => 'get_user']);
    }
}
