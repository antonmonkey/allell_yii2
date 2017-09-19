<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use app\models\Autos;

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

    public function getAutos()
    {
        return $this->hasOne(Autos::className(), ['id' => 'auto_type_id']);
    }
}
