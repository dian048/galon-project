<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "galon".
 *
 * @property int $id_galon
 * @property float $harga_isi_ulang
 * @property string $jenis_galon
 * @property float $harga_galon
 *
 * @property Pemesanan[] $pemesanans
 */
class Galon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'galon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['harga_isi_ulang', 'jenis_galon', 'harga_galon'], 'required'],
            [['harga_isi_ulang', 'harga_galon'], 'number'],
            [['jenis_galon'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_galon' => 'Id Galon',
            'harga_isi_ulang' => 'Harga Isi Ulang',
            'jenis_galon' => 'Jenis Galon',
            'harga_galon' => 'Harga Galon',
        ];
    }

    /**
     * Gets query for [[Pemesanans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemesanans()
    {
        return $this->hasMany(Pemesanan::class, ['get_galon' => 'id_galon']);
    }
}
