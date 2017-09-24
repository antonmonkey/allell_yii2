<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autos_sale_images".
 *
 * @property integer $id
 * @property string $image
 * @property integer $autos_sale_id
 *
 * @property AutosSale $autosSale
 */
class AutosSaleImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'autos_sale_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'autos_sale_id'], 'required'],
            [['autos_sale_id'], 'integer'],
            [['image'], 'string', 'max' => 255],
            [['autos_sale_id'], 'exist', 'skipOnError' => true, 'targetClass' => AutosSale::className(), 'targetAttribute' => ['autos_sale_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'autos_sale_id' => 'Autos Sale ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAutosSale()
    {
        return $this->hasOne(AutosSale::className(), ['id' => 'autos_sale_id']);
    }
}
