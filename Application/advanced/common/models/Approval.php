<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "approval".
 *
 * @property integer $id
 * @property string $approval_remarks
 * @property string $approval_status
 * @property string $approval_date
 * @property integer $test_document_id
 * @property integer $user_id
 * @property integer $user_user_type_id
 */
class Approval extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'approval';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['approval_remarks', 'approval_status', 'approval_date', 'test_document_id', 'user_id', 'user_user_type_id'], 'required'],
            [['approval_date'], 'safe'],
            [['test_document_id', 'user_id', 'user_user_type_id'], 'integer'],
            [['approval_remarks'], 'string', 'max' => 1000],
            [['approval_status'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'approval_remarks' => 'Approval Remarks',
            'approval_status' => 'Approval Status',
            'approval_date' => 'Approval Date',
            'test_document_id' => 'Test Document ID',
            'user_id' => 'User ID',
            'user_user_type_id' => 'User User Type ID',
        ];
    }
}
