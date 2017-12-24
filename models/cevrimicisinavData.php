<?php

namespace kouosl\cevrimicisinav\models;

use Yii;

/**
 * This is the model class for table "cevrimicisinav_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $cevrimicisinav_id
 *
 * @property cevrimicisinavs $cevrimicisinav
 */
class cevrimicisinavData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cevrimicisinav_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'cevrimicisinav_id'], 'required'],
            [['cevrimicisinav_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['cevrimicisinav_id'], 'exist', 'skipOnError' => true, 'targetClass' => cevrimicisinavs::className(), 'targetAttribute' => ['cevrimicisinav_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'cevrimicisinav_id' => 'cevrimicisinav ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getcevrimicisinav()
    {
        return $this->hasOne(cevrimicisinavs::className(), ['id' => 'cevrimicisinav_id']);
    }
}
