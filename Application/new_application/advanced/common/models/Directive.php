<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "directive".
 *
 * @property integer $id
 * @property string $directive_date
 * @property string $directive_type
 * @property string $directive_name
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
            [['directive_date', 'directive_type', 'directive_name'], 'required'],
            [['directive_date'], 'safe'],
            [['directive_type'], 'string', 'max' => 45],
            [['directive_name'], 'string', 'max' => 100],
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
            'directive_name' => 'Directive Name',
        ];
    }
}
