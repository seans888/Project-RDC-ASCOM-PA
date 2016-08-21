<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "test_worksheet".
 *
 * @property integer $id
 * @property string $work_item
 */
class TestWorksheet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'test_worksheet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_item'], 'required'],
            [['work_item'], 'string', 'max' => 46],
            [['file'], 'file'],
            [['work_file'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'work_item' => 'Work Item',
        ];
    }
}
