<?php

namespace app\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "lesson".
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $video
 * @property int|null $learned
 * @property string|null $created_at
 * @property int|null $created_by
 */
class Lesson extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lesson';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'video'], 'required'],
            [['description'], 'string'],
            [['learned', 'created_by'], 'integer'],
            [['created_at'], 'safe'],
            [['title', 'video'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'video' => 'Видео',
            'learned' => 'Просмотрен',
            'created_at' => 'Время добавление',
            'created_by' => 'Добавил',
        ];
    }

    public function beforeSave($insert)
    {
        $this->created_at = (new Expression('NOW()'));
        $this->created_by = Yii::$app->user->identity->id;
        return parent::beforeSave($insert);
    }
}
