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
 * @property int $id_status
 * @property string $tanggal_input
 * @property int $id_wilayah
 * @property int $id_bukti
 *
 * @property StatusInfrastruktur $statusInfrastruktur
 * @property User $user
 * @property BuktiInfrastruktur $bukti
 * @property JenisInfrastruktur $jenisInfrastruktur
 * @property Wilayah $wilayah
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
            [['id_user', 'tanggal', 'jenis_infrastruktur', 'id_status', 'tanggal_input', 'id_wilayah', 'id_bukti'], 'required'],
            [['id_user', 'id_status', 'id_wilayah', 'id_bukti'], 'integer'],
            [['tanggal', 'tanggal_input'], 'safe'],
            [['jenis_infrastruktur'], 'string', 'max' => 30],
            [['id_status'], 'unique'],
            [['id_user'], 'unique'],
            [['id_wilayah'], 'unique'],
            [['jenis_infrastruktur'], 'unique'],
            [['id_bukti'], 'unique'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_bukti'], 'exist', 'skipOnError' => true, 'targetClass' => BuktiInfrastruktur::className(), 'targetAttribute' => ['id_bukti' => 'id_bukti_infrastruktur']],
            [['jenis_infrastruktur'], 'exist', 'skipOnError' => true, 'targetClass' => JenisInfrastruktur::className(), 'targetAttribute' => ['jenis_infrastruktur' => 'jenis']],
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
            'id_status' => 'Id Status',
            'tanggal_input' => 'Tanggal Input',
            'id_wilayah' => 'Id Wilayah',
            'id_bukti' => 'Id Bukti',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatusInfrastruktur()
    {
        return $this->hasOne(StatusInfrastruktur::className(), ['id_status' => 'id_status']);
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
    public function getBukti()
    {
        return $this->hasOne(BuktiInfrastruktur::className(), ['id_bukti_infrastruktur' => 'id_bukti']);
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
    public function getWilayah()
    {
        return $this->hasOne(Wilayah::className(), ['id_wilayah' => 'id_wilayah']);
    }
}
