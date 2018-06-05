<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bukti_infrastruktur".
 *
 * @property int $id_bukti_infrastruktur
 * @property int $id_infrastruktur
 * @property string $file_foto
 * @property string $judul_foto
 * @property string $keterangan
 *
 * @property TransaksiInfrastruktur $transaksiInfrastruktur
 */
class BuktiInfrastruktur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bukti_infrastruktur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_infrastruktur', 'file_foto', 'judul_foto', 'keterangan'], 'required'],
            [['id_infrastruktur'], 'integer'],
            [['keterangan'], 'string'],
            [['file_foto'], 'string', 'max' => 11],
            [['judul_foto'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bukti_infrastruktur' => 'Id Bukti Infrastruktur',
            'id_infrastruktur' => 'Id Infrastruktur',
            'file_foto' => 'File Foto',
            'judul_foto' => 'Judul Foto',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiInfrastruktur()
    {
        return $this->hasOne(TransaksiInfrastruktur::className(), ['id_bukti' => 'id_bukti_infrastruktur']);
    }
}
