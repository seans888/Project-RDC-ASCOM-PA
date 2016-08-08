<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "directive".
 *
 * @property integer $id
 * @property string $directive_date
 * @property string $directive_type
 */
class Directive extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'directive';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['directive_date', 'directive_type'], 'required'],
            [['directive_date'], 'safe'],
            [['directive_type'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'directive_date' => 'Directive Date',
            'directive_type' => 'Directive Type',
        ];
    }
}
