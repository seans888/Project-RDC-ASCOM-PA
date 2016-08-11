<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "item_specification".
 *
 * @property integer $id
 * @property string $itemspec_date
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
            [['itemspec_date'], 'required'],
            [['itemspec_date'], 'safe'],
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
        ];
    }
}
