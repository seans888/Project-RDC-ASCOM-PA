<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;
use common\models\AuthAssignment;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $first_name;
    public $last_name;
    public $user_type_id;
    public $permissions;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['first_name', 'required'],
            ['last_name', 'required'],
            ['user_type_id', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->first_name = $this->first_name;
            $user->last_name = $this->last_name;
            $user->user_type_id = $this->user_type_id;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            $user->save();
        
        
 
        $permissionList = $_POST['SignupForm']['permissions'];
 
        foreach ($permissionList as $value) {
            $newPermission = new AuthAssignment; 
            $newPermission->user_id = $user->id; 
            $newPermission->item_name = $value;
            $newPermission->save();
           }   
           return $user;
        }   
        return null; 
     }
}
