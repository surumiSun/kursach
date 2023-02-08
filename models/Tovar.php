<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tovar".
 *
 * @property int $id ID
 * @property string $name Название
 * @property string $description Описание
 * @property int $price Цена
 * @property string|null $image Изображение
 *
 * @property Zakaz $zakaz
 */
class Tovar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tovar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['price'], 'integer'],
            [['name', 'description', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'price' => 'Цена',
            'image' => 'Изображение',
        ];
    }

    /**
     * Gets query for [[Zakaz]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getZakaz()
    {
        return $this->hasOne(Zakaz::className(), ['tovar' => 'id']);
    }
}
