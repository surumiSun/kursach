<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zakaz".
 *
 * @property int $id ID
 * @property int $user Пользователь
 * @property int $tovar Товар
 * @property int $count Количество
 * @property string $status Статус
 * @property string $addres Адрес
 *
 * @property Tovar $tovar0
 * @property User $user0
 */
class Zakaz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zakaz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'tovar', 'count', 'addres'], 'required'],
            [['user', 'tovar', 'count'], 'integer'],
            [['status'], 'string'],
            [['addres'], 'string', 'max' => 255],
            [['user'], 'unique'],
            [['tovar'], 'unique'],
            [['user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user' => 'id']],
            [['tovar'], 'exist', 'skipOnError' => true, 'targetClass' => Tovar::className(), 'targetAttribute' => ['tovar' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'Пользователь',
            'tovar' => 'Товар',
            'count' => 'Количество',
            'status' => 'Статус',
            'addres' => 'Адрес',
        ];
    }

    /**
     * Gets query for [[Tovar0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTovar0()
    {
        return $this->hasOne(Tovar::className(), ['id' => 'tovar']);
    }

    /**
     * Gets query for [[User0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(User::className(), ['id' => 'user']);
    }
}
