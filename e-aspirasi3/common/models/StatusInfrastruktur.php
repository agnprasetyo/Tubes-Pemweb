<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "status_infrastruktur".
 *
 * @property int $id_status
 * @property int $status
 */
class StatusInfrastruktur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_infrastruktur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_status' => 'Id Status',
            'status' => 'Status',
        ];
    }
}
