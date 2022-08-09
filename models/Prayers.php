<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prayers".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string|null $prayer_request
 * @property int|null $contact
 */
class Prayers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prayers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contact'], 'integer'],
            [['name', 'email', 'prayer_request'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'prayer_request' => 'Prayer Request',
            'contact' => 'Contact',
        ];
    }
}
