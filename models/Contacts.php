<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $mobile_number
 * @property resource|null $profile_picture
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'mobile_number'], 'required'],
            [['profile_picture'], 'string'],
            [['first_name', 'last_name'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['mobile_number'], 'string', 'max' => 20],
            [['email'], 'unique'],
            [['mobile_number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'mobile_number' => 'Mobile Number',
            'profile_picture' => 'Profile Picture',
        ];
    }
}
