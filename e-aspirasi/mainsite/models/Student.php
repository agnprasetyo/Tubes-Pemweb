<?php
namespace app\models;
 
use Yii;
 
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function transaksi_pelayanan()
    {
        return 'student';
    }
     
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'address', 'phone'], 'required'],
            [['full_name', 'address'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 15]
        ];
    }   
}