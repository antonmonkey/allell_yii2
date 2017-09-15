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
            [['type', 'img',], 'required'],
            [['type', 'img', 'imgflare'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Car Type',
            'img' => 'Img',
            'imgflares' => 'Img Flares',
            'created' => 'Created',
        ];
    }

    public function saveImage($filename)
    {
        $this->img = $filename;

        return $this->save(false);
    }
}
