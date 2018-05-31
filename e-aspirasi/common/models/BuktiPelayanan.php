<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bukti_pelayanan".
 *
 * @property int $id_bukti_pelayanan
 * @property int $id_pelayanan
 * @property string $file_foto
 * @property string $judul_foto
 * @property string $keterangan
 *
 * @property TransaksiPelayanan $transaksiPelayanan
 */
class BuktiPelayanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bukti_pelayanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pelayanan', 'file_foto', 'judul_foto', 'keterangan'], 'required'],
            [['id_pelayanan'], 'integer'],
            [['keterangan'], 'string'],
            [['file_foto'], 'string', 'max' => 11],
            [['judul_foto'], 'string', 'max' => 20],
            [['id_pelayanan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bukti_pelayanan' => 'Id Bukti Pelayanan',
            'id_pelayanan' => 'Id Pelayanan',
            'file_foto' => 'File Foto',
            'judul_foto' => 'Judul Foto',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiPelayanan()
    {
        return $this->hasOne(TransaksiPelayanan::className(), ['id_pelayanan' => 'id_pelayanan']);
    }
}
