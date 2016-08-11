<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $emp_rank
 * @property string $emp_type
 * @property string $emp_fname
 * @property string $emp_lname
 * @property string $emp_division
 * @property integer $user_id
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_rank', 'emp_type', 'emp_fname', 'emp_lname', 'emp_division', 'user_id'], 'required'],
            [['user_id'], 'integer'],
            [['emp_rank', 'emp_type', 'emp_fname', 'emp_lname', 'emp_division'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_rank' => 'Emp Rank',
            'emp_type' => 'Emp Type',
            'emp_fname' => 'Emp Fname',
            'emp_lname' => 'Emp Lname',
            'emp_division' => 'Emp Division',
            'user_id' => 'User ID',
        ];
    }
}
