<?php

namespace app\models;

use Yii;
use app\models\ImageUpload;

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
            [['type'], 'required'],
            [['type'], 'string', 'max' => 255],
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

    public function saveImage($filename, $tag)
    {
      $this->$tag = $filename;

      return $this->save(false);
    }

    public function getImage($tag)
    {
      return ($this->$tag) ? '/uploads/' . $this->$tag : '/public/images/no-image.png';
    }

    public function deleteImage()
    {
      $currentImage = $this->img;

      $imageUploadModel = new ImageUpload();

      $imageUploadModel->deleteCurrentImage($this->img);
    }

    public function beforeDelete()
    {
      $this->deleteImage();
      return parent::beforeDelete();
    }
}
