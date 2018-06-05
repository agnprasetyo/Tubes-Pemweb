<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jenis_infrastruktur".
 *
 * @property int $id_jenis
 * @property int $jenis
 */
class JenisInfrastruktur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_infrastruktur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jenis', 'jenis'], 'required'],
            [['id_jenis', 'jenis'], 'integer'],
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
}
