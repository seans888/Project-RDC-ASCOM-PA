<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "test_document".
 *
 * @property integer $id
 * @property string $test_date
 * @property string $test_type
 * @property string $test_schedule
 * @property string $test_name
 * @property integer $test_worksheet_id
 * @property integer $task_organization_id
 * @property integer $result_id
 * @property integer $implementation_plan_id
 * @property integer $item_specification_id
 * @property integer $directive_id
 */
class TestDocument extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test_document';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['test_date', 'test_type', 'test_schedule', 'test_name', 'test_worksheet_id', 'task_organization_id', 'result_id', 'implementation_plan_id', 'item_specification_id', 'directive_id'], 'required'],
            [['test_date', 'test_schedule'], 'safe'],
            [['test_worksheet_id', 'task_organization_id', 'result_id', 'implementation_plan_id', 'item_specification_id', 'directive_id'], 'integer'],
            [['test_type', 'test_name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'test_date' => 'Test Date',
            'test_type' => 'Test Type',
            'test_schedule' => 'Test Schedule',
            'test_name' => 'Test Name',
            'test_worksheet_id' => 'Test Worksheet ID',
            'task_organization_id' => 'Task Organization ID',
            'result_id' => 'Result ID',
            'implementation_plan_id' => 'Implementation Plan ID',
            'item_specification_id' => 'Item Specification ID',
            'directive_id' => 'Directive ID',
        ];
    }
}
