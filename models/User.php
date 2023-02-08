<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id ID
 * @property string $username Логин
 * @property string $password Пароль
 * @property int $rule Тип
 *
 * @property Zakaz $zakaz
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['rule'], 'integer'],
            [['username', 'password'], 'string', 'max' => 255],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'password' => 'Пароль',
            'rule' => 'Тип',
        ];
    }

    /**
     * Gets query for [[Zakaz]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakaz()
    {
        return $this->hasOne(Zakaz::className(), ['user' => 'id']);
    }
}
