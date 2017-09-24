<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use app\models\Autos;
use app\models\ImageUpload;

/**
 * This is the model class for table "autos_sale".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $image
 * @property string $date
 * @property integer $auto_type_id
 */
class AutosSale extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'date',
                'updatedAtAttribute' => false,
                'value' => date("Y-m-d H:i:s"),
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'autos_sale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['date'], 'safe'],
            [['auto_type_id'], 'integer'],
            [['title', 'image'], 'string', 'max' => 255],
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
            'content' => 'Content',
            'image' => 'Image',
            'date' => 'Date',
            'auto_type_id' => 'Auto Type ID',
        ];
    }

    public function getType()
    {
        return $this->hasOne(Autos::className(), ['id' => 'auto_type_id']);
    }

    public function getImage($tag)
    {
      return ($this->$tag) ? '/uploads/' . $this->$tag : '/public/images/no-image.png';
    }

    public function saveImage($filename, $tag)
    {
      $this->$tag = $filename;

      return $this->save(false);
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

    public function getAutosSaleImages()
    {
        return $this->hasMany(AutosSale::className(), ['autos_sale_id' => 'id']);
    }
}
