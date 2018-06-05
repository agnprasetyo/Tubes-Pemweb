<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jenis_kejahatan".
 *
 * @property int $id_jenis
 * @property string $jenis
 *
 * @property TransaksiGangguanKeamanan $transaksiGangguanKeamanan
 */
class JenisKejahatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_kejahatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis'], 'required'],
            [['jenis'], 'string', 'max' => 20],
            [['jenis'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis' => 'Id Jenis',
            'jenis' => 'Jenis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiGangguanKeamanan()
    {
        return $this->hasOne(TransaksiGangguanKeamanan::className(), ['jenis_kejahatan' => 'jenis']);
    }
}
