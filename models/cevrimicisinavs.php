<?php

namespace kouosl\cevrimicisinav\models;

use Yii;

/**
 * This is the model class for table "cevrimicisinavs".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $picture
 *
 * @property data[] $data
 */
class cevrimicisinavs extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cevrimicisinavs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description', 'picture'], 'string'],
            [['title'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'picture' => 'Picture',
        ];
    }

    public function getImagePath(){
        return sprintf("%s/cevrimicisinavs/%s",Yii::getAlias ( '@data' ),$this->picture);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getData()
    {
        return $this->hasMany(cevrimicisinavData::className(), ['cevrimicisinav_id' => 'id']);
    }
}
