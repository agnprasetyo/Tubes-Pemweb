<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "transaksi_pelayanan".
 *
 * @property int $id_pelayanan
 * @property int $id_user
 * @property string $tanggal
 * @property int $id_wilayah
 * @property int $id_tempat
 * @property string $jenis_layanan
 * @property int $id_review
 *
 * @property BuktiPelayanan $buktiPelayanan
 * @property User $user
 * @property JenisPelayanan $jenisLayanan
 * @property ReviewPelayanan $review
 * @property TempatPelayanan $tempat
 * @property Wilayah $wilayah
 */
class TransaksiPelayanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_pelayanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user', 'tanggal', 'id_wilayah', 'id_tempat', 'jenis_layanan', 'id_review'], 'required'],
            [['id_user', 'id_wilayah', 'id_tempat', 'id_review'], 'integer'],
            [['tanggal'], 'safe'],
            [['jenis_layanan'], 'string', 'max' => 20],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['jenis_layanan'], 'exist', 'skipOnError' => true, 'targetClass' => JenisPelayanan::className(), 'targetAttribute' => ['jenis_layanan' => 'jenis_pelayanan']],
            [['id_review'], 'exist', 'skipOnError' => true, 'targetClass' => ReviewPelayanan::className(), 'targetAttribute' => ['id_review' => 'id_review']],
            [['id_tempat'], 'exist', 'skipOnError' => true, 'targetClass' => TempatPelayanan::className(), 'targetAttribute' => ['id_tempat' => 'id_tempat']],
            [['id_wilayah'], 'exist', 'skipOnError' => true, 'targetClass' => Wilayah::className(), 'targetAttribute' => ['id_wilayah' => 'id_wilayah']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pelayanan' => 'Id Pelayanan',
            'id_user' => 'Id User',
            'tanggal' => 'Tanggal',
            'id_wilayah' => 'Id Wilayah',
            'id_tempat' => 'Id Tempat',
            'jenis_layanan' => 'Jenis Layanan',
            'id_review' => 'Id Review',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuktiPelayanan()
    {
        return $this->hasOne(BuktiPelayanan::className(), ['id_bukti_pelayanan' => 'id_pelayanan']);
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
    public function getJenisLayanan()
    {
        return $this->hasOne(JenisPelayanan::className(), ['jenis_pelayanan' => 'jenis_layanan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReview()
    {
        return $this->hasOne(ReviewPelayanan::className(), ['id_review' => 'id_review']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTempat()
    {
        return $this->hasOne(TempatPelayanan::className(), ['id_tempat' => 'id_tempat']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWilayah()
    {
        return $this->hasOne(Wilayah::className(), ['id_wilayah' => 'id_wilayah']);
    }
}
