<?php

namespace backend2020\models;

use Yii;
use yiidreamteam\upload\ImageUploadBehavior;

/**
 * This is the model class for table "2020_advertisings".
 *
 * @property int $id
 * @property int $sort
 * @property string $photo
 * @property int $status
 */
class Advertisings extends \yii\db\ActiveRecord
{
    const STATUS_NOT_ACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '2020_advertisings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sort', 'status'], 'required'],

            [['sort', 'status'], 'integer'],
            ['photo', 'image', 'maxSize' => 1024 * 1024 * 10],
        ];
    }

    public function getStatusName($status)
    {
        $array = self::statusList();
        return $status ? $array[$status] : $array[$this->status];
    }

    public static function statusList()
    {
        return [
            self::STATUS_ACTIVE => 'Ha',
            self::STATUS_NOT_ACTIVE => 'Yo`q',
            self::STATUS_DELETED => 'O`chirilgan'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'sort' => Yii::t('app', 'Sort'),
            'status' => Yii::t('app', 'Status'),
            'photo' => Yii::t('app', 'Photo'),
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => ImageUploadBehavior::class,
                'attribute' => 'photo',
                'createThumbsOnRequest' => true,

                'filePath' => '@frontend/web/app-images/store/advertisings/[[attribute_id]]/[[filename]].[[extension]]',
                'fileUrl' => '@url/app-images/store/advertisings/[[attribute_id]]/[[filename]].[[extension]]',

                'thumbPath' => '@frontend/web/app-images/cache/advertisings/[[attribute_id]]/[[profile]]_[[filename]].[[extension]]',
                'thumbUrl' => '@url/app-images/cache/advertisings/[[attribute_id]]/[[profile]]_[[filename]].[[extension]]',
                'thumbs' => [
                    'xs' => ['width' => 30, 'height' => 40],
                    'sm' => ['width' => 60, 'height' => 80],
                    'md' => ['width' => 120, 'height' => 160],
                    'lg' => ['width' => 360, 'height' => 480],
                ],
            ],
        ];
    }
}
