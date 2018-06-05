<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "transaksi_gangguan_keamanan".
 *
 * @property int $id_gangguan
 * @property int $id_user
 * @property string $tanggal
 * @property string $jenis_kejahatan
 * @property int $id_wilayah
 *
 * @property BuktiKejahatan $buktiKejahatan
 * @property User $user
 * @property JenisKejahatan $jenisKejahatan
 * @property Wilayah $wilayah
 */
class TransaksiGangguanKeamanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_gangguan_keamanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'tanggal', 'jenis_kejahatan', 'id_wilayah'], 'required'],
            [['id_user', 'id_wilayah'], 'integer'],
            [['tanggal'], 'safe'],
            [['jenis_kejahatan'], 'string', 'max' => 20],
            [['id_user'], 'unique'],
            [['jenis_kejahatan'], 'unique'],
            [['id_wilayah'], 'unique'],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['jenis_kejahatan'], 'exist', 'skipOnError' => true, 'targetClass' => JenisKejahatan::className(), 'targetAttribute' => ['jenis_kejahatan' => 'jenis']],
            [['id_wilayah'], 'exist', 'skipOnError' => true, 'targetClass' => Wilayah::className(), 'targetAttribute' => ['id_wilayah' => 'id_wilayah']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_gangguan' => 'Id Gangguan',
            'id_user' => 'Id User',
            'tanggal' => 'Tanggal',
            'jenis_kejahatan' => 'Jenis Kejahatan',
            'id_wilayah' => 'Id Wilayah',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiKejahatan()
    {
        return $this->hasOne(BuktiKejahatan::className(), ['id_gangguan_kejahatan' => 'id_gangguan']);
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
    public function getJenisKejahatan()
    {
        return $this->hasOne(JenisKejahatan::className(), ['jenis' => 'jenis_kejahatan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWilayah()
    {
        return $this->hasOne(Wilayah::className(), ['id_wilayah' => 'id_wilayah']);
    }
}
