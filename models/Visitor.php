<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "visitor".
 *
 * @property int $id Primary Key
 * @property string|null $create_time Create Time
 * @property string|null $first_name first_name
 * @property string|null $last_name last_name
 * @property string|null $email email
 */
class Visitor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visitor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['create_time'], 'safe'],
            [['first_name', 'last_name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'create_time' => 'Create Time',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
        ];
    }
}
