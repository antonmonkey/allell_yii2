<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * This is the model class for image upload logic.
 *
 * @property string $img
 */

class ImageUpload extends Model
{
    public $image;

    public function rules()
    {
      return [
        [['image'], 'required'],
        [['image'], 'file', 'extensions' => 'jpg,png']
      ];
    }

    public function uploadFile(UploadedFile $file, $currentImage)
    {
        $this->image = $file;

        if($this->validate())
        {
          $this->deleteCurrentImage($currentImage);
          
          return $this->saveImage();
        }
    }

    private function getFolder()
    {
      return Yii::getAlias('@web') . 'uploads/';
    }

    private function generateFilename()
    {
      return uniqid($this->image->baseName) . '.' . $this->image->extension;
    }

    public function deleteCurrentImage($currentImage)
    {
      if ($this->fileExists($currentImage))
      {
        unlink($this->getFolder() . $currentImage);
      }
    }

    public function fileExists($currentImage)
    {
      if (!empty($currentImage) && $currentImage != null) {
        return file_exists($this->getFolder() . $currentImage); 
      }
    }

    public function saveImage()
    {
      $filename = $this->generateFilename();

      $this->image->saveAs($this->getFolder() . $filename);

      return $filename;
    }
} 