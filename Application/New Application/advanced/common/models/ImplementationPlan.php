<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "implementation_plan".
 *
 * @property integer $id
 * @property string $implan_date
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
            [['implan_date'], 'required'],
            [['implan_date'], 'safe'],
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
        ];
    }
}
