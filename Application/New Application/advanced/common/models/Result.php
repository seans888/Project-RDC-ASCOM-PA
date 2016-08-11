<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "result".
 *
 * @property integer $id
 * @property string $result_date
 * @property string $result_item
 */
class Result extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'result';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['result_date', 'result_item'], 'required'],
            [['result_date'], 'safe'],
            [['result_item'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'result_date' => 'Result Date',
            'result_item' => 'Result Item',
        ];
    }
}
