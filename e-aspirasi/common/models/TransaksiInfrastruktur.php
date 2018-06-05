<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaksi_infrastruktur".
 *
 * @property int $id_infrastruktur
 * @property int $id_user
 * @property string $tanggal
 * @property string $jenis_infrastruktur
 * @property int $longitude
 * @property int $latitude
 * @property int $id_status
 * @property string $tanggal_input
 * @property int $id_wilayah
 *
 * @property BuktiInfrastruktur[] $buktiInfrastrukturs
 * @property User $user
 * @property Wilayah $wilayah
 * @property JenisInfrastruktur $jenisInfrastruktur
 * @property StatusInfrastruktur $status
 */
class TransaksiInfrastruktur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_infrastruktur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'tanggal', 'jenis_infrastruktur', 'longitude', 'latitude', 'id_status', 'tanggal_input', 'id_wilayah'], 'required'],
            [['id_user', 'longitude', 'latitude', 'id_status', 'id_wilayah'], 'integer'],
            [['tanggal', 'tanggal_input'], 'safe'],
            [['jenis_infrastruktur'], 'string', 'max' => 30],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_wilayah'], 'exist', 'skipOnError' => true, 'targetClass' => Wilayah::className(), 'targetAttribute' => ['id_wilayah' => 'id_wilayah']],
            [['jenis_infrastruktur'], 'exist', 'skipOnError' => true, 'targetClass' => JenisInfrastruktur::className(), 'targetAttribute' => ['jenis_infrastruktur' => 'jenis']],
            [['id_status'], 'exist', 'skipOnError' => true, 'targetClass' => StatusInfrastruktur::className(), 'targetAttribute' => ['id_status' => 'id_status']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_infrastruktur' => 'Id Infrastruktur',
            'id_user' => 'Id User',
            'tanggal' => 'Tanggal',
            'jenis_infrastruktur' => 'Jenis Infrastruktur',
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'id_status' => 'Id Status',
            'tanggal_input' => 'Tanggal Input',
            'id_wilayah' => 'Id Wilayah',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiInfrastrukturs()
    {
        return $this->hasMany(BuktiInfrastruktur::className(), ['id_infrastruktur' => 'id_infrastruktur']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWilayah()
    {
        return $this->hasOne(Wilayah::className(), ['id_wilayah' => 'id_wilayah']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisInfrastruktur()
    {
        return $this->hasOne(JenisInfrastruktur::className(), ['jenis' => 'jenis_infrastruktur']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(StatusInfrastruktur::className(), ['id_status' => 'id_status']);
    }
}
