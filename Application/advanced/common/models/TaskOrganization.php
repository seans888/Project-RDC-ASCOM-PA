<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "task_organization".
 *
 * @property integer $id
 * @property string $task_org_date
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
            [['task_org_date'], 'required'],
            [['task_org_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task_org_date' => 'Task Org Date',
        ];
    }
}
