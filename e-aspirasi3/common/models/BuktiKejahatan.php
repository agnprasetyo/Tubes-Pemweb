<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bukti_kejahatan".
 *
 * @property int $id_bukti_kejahatan
 * @property int $id_gangguan_kejahatan
 * @property string $file_foto
 * @property string $judul_foto
 * @property string $keterangan
 *
 * @property TransaksiGangguanKeamanan $gangguanKejahatan
 */
class BuktiKejahatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bukti_kejahatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_gangguan_kejahatan', 'file_foto', 'judul_foto', 'keterangan'], 'required'],
            [['id_gangguan_kejahatan'], 'integer'],
            [['keterangan'], 'string'],
            [['file_foto', 'judul_foto'], 'string', 'max' => 20],
            [['id_gangguan_kejahatan'], 'unique'],
            [['id_gangguan_kejahatan'], 'exist', 'skipOnError' => true, 'targetClass' => TransaksiGangguanKeamanan::className(), 'targetAttribute' => ['id_gangguan_kejahatan' => 'id_gangguan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_bukti_kejahatan' => 'Id Bukti Kejahatan',
            'id_gangguan_kejahatan' => 'Id Gangguan Kejahatan',
            'file_foto' => 'File Foto',
            'judul_foto' => 'Judul Foto',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGangguanKejahatan()
    {
        return $this->hasOne(TransaksiGangguanKeamanan::className(), ['id_gangguan' => 'id_gangguan_kejahatan']);
    }
}
