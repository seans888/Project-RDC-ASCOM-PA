<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "test_document".
 *
 * @property integer $id
 * @property string $docu_date
 * @property string $docu_name
 * @property integer $document_type
 * @property integer $test_project_id
 * @property string $document
 */
class TestDocument extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $docu_file;

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
            [['docu_date', 'docu_name', 'document_type', 'test_project_id'], 'required'],
            [['docu_date'], 'safe'],
            [['document_type', 'test_project_id'], 'integer'],
            [['docu_name'], 'string', 'max' => 255],
            [['document'], 'string', 'max' => 100],
            [['docu_file'], 'file',],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'docu_date' => 'Date',
            'docu_name' => 'Name',
            'document_type' => 'Document Type',
            'test_project_id' => 'Test Project',
            'docu_file' => 'Upload file'
        ];
    }

    public function getType()
    {
        return $this->hasOne(DocumentType::className(), ['id' => 'document_type']);
    }
}
