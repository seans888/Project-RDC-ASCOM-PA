<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "item_specification".
 *
 * @property integer $id
 * @property string $itemspec_date
 * @property string $itemspec_name
 */
class ItemSpecification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_specification';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['itemspec_date', 'itemspec_name'], 'required'],
            [['itemspec_date'], 'safe'],
            [['itemspec_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'itemspec_date' => 'Itemspec Date',
            'itemspec_name' => 'Itemspec Name',
        ];
    }
}
