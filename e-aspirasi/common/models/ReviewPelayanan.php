<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "review_pelayanan".
 *
 * @property int $id_review
 * @property string $review
 *
 * @property TransaksiPelayanan $transaksiPelayanan
 */
class ReviewPelayanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review_pelayanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['review'], 'required'],
            [['review'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_review' => 'Id Review',
            'review' => 'Review',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiPelayanan()
    {
        return $this->hasOne(TransaksiPelayanan::className(), ['id_review' => 'id_review']);
    }
}
