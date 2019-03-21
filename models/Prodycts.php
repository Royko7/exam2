<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prodycts".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 */
class Prodycts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodycts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['name', 'description'], 'string', 'max' => 255],
        ];
    }
    public function getCategory(){
        return $this->hasOne(Category::className(), ['category_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
        ];
    }
}
