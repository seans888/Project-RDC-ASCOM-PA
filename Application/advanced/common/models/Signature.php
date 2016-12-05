<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "signature".
 *
 * @property integer $id
 * @property string $sig_title
 * @property integer $sig_order
 * @property string $sig_comment
 * @property string $sig_date_signed
 * @property integer $test_document_id
 */
class Signature extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'signature';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sig_title', 'sig_order', 'sig_comment', 'sig_date_signed', 'test_document_id'], 'required'],
            [['sig_order', 'test_document_id'], 'integer'],
            [['sig_date_signed'], 'safe'],
            [['sig_title'], 'string', 'max' => 255],
            [['sig_comment'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sig_title' => 'Sig Title',
            'sig_order' => 'Sig Order',
            'sig_comment' => 'Sig Comment',
            'sig_date_signed' => 'Sig Date Signed',
            'test_document_id' => 'Test Document ID',
        ];
    }
}
