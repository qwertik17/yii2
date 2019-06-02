<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property int $id
 * @property string $title
 * @property string $caption
 * @property string $content
 * @property string $createdon
 * @property string $edited
 * @property int $publishedon
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'caption', 'content'], 'required'],
            [['content'], 'string'],
            [['publishedon'], 'integer'],
            [['title'], 'string', 'max' => 100],
            [['caption'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'caption' => 'Описание',
            'content' => 'Контент',
            'createdon' => 'Дата создания',
            'edited' => 'Дата изменения',
            'publishedon' => 'Опубликован?',
        ];
    }
}
