<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "autos".
 *
 * @property integer $id
 * @property string $type
 * @property string $img
 * @property string $created
 */
class Autos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'autos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'img', 'created'], 'required'],
            [['created'], 'safe'],
            [['type', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'img' => 'Img',
            'created' => 'Created',
        ];
    }
}
