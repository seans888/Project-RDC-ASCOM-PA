<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "implementation_plan".
 *
 * @property integer $id
 * @property string $implan_date
 * @property string $implan_name
 */
class ImplementationPlan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'implementation_plan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['implan_date', 'implan_name'], 'required'],
            [['implan_date'], 'safe'],
            [['implan_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'implan_date' => 'Implan Date',
            'implan_name' => 'Implan Name',
        ];
    }
}
