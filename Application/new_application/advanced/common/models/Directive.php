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
    public $file;

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
            [['directive_name', "directive_file"], 'string', 'max' => 100],
            [['file'], 'file']
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
            'directive_file' => 'Insert directive here',
        ];
    }
}
