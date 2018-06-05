<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jenis_pelayanan".
 *
 * @property int $id_jenis
 * @property string $jenis_pelayanan
 *
 * @property TransaksiPelayanan $transaksiPelayanan
 */
class JenisPelayanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_pelayanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_pelayanan'], 'required'],
            [['jenis_pelayanan'], 'string', 'max' => 20],
            [['jenis_pelayanan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis' => 'Id Jenis',
            'jenis_pelayanan' => 'Jenis Pelayanan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiPelayanan()
    {
        return $this->hasOne(TransaksiPelayanan::className(), ['jenis_layanan' => 'jenis_pelayanan']);
    }
}
