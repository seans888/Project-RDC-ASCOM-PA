<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "test_project".
 *
 * @property integer $id
 * @property string $project_name
 * @property string $project_type
 */
class TestProject extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test_project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_name', 'project_type'], 'required'],
            [['project_name'], 'string', 'max' => 255],
            [['project_type'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_name' => 'Project Name',
            'project_type' => 'Project Type',
        ];
    }
}
