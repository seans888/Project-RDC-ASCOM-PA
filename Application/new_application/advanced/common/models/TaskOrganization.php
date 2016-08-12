<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "task_organization".
 *
 * @property integer $id
 * @property string $taskorg_date
 * @property string $taskorg_name
 */
class TaskOrganization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'task_organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['taskorg_date', 'taskorg_name'], 'required'],
            [['taskorg_date'], 'safe'],
            [['taskorg_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'taskorg_date' => 'Taskorg Date',
            'taskorg_name' => 'Taskorg Name',
        ];
    }
}
