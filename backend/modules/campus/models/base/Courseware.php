<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\modules\campus\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "courseware".
 *
 * @property integer $courseware_id
 * @property integer $category_id
 * @property integer $level
 * @property integer $creater_id
 * @property string $slug
 * @property string $title
 * @property string $body
 * @property integer $parent_id
 * @property integer $access_domain
 * @property integer $access_other
 * @property integer $status
 * @property integer $items
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $aliasModel
 */
abstract class Courseware extends \yii\db\ActiveRecord
{


     /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('campus');
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'courseware';
    }


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'level', 'creater_id', 'parent_id', 'access_domain', 'access_other', 'status', 'items'], 'integer'],
            [['slug', 'title'], 'required'],
            [['body'], 'string'],
            [['slug'], 'string', 'max' => 1024],
            [['title'], 'string', 'max' => 512]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'courseware_id' => Yii::t('common', 'Courseware ID'),
            'category_id' => Yii::t('common', '分类'),
            'level' => Yii::t('common', '级别：100课件；200相册；300作品'),
            'creater_id' => Yii::t('common', '创建者'),
            'slug' => Yii::t('common', 'Slug'),
            'title' => Yii::t('common', '标题'),
            'body' => Yii::t('common', '描述json：教学目标'),
            'parent_id' => Yii::t('common', '父课件'),
            'access_domain' => Yii::t('common', '权限：10仅自己可见；20老师；30同学；0所有人'),
            'access_other' => Yii::t('common', '其他权限 1允许分享'),
            'status' => Yii::t('common', 'Status'),
            'items' => Yii::t('common', 'Items'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(parent::attributeHints(), [
            'category_id' => Yii::t('common', '分类'),
            'level' => Yii::t('common', '级别：100课件；200相册；300作品'),
            'creater_id' => Yii::t('common', '创建者'),
            'title' => Yii::t('common', '标题'),
            'body' => Yii::t('common', '描述json：教学目标'),
            'parent_id' => Yii::t('common', '父课件'),
            'access_domain' => Yii::t('common', '权限：10仅自己可见；20老师；30同学；0所有人'),
            'access_other' => Yii::t('common', '其他权限 1允许分享'),
        ]);
    }


    
    /**
     * @inheritdoc
     * @return \backend\modules\campus\models\query\CoursewareQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \backend\modules\campus\models\query\CoursewareQuery(get_called_class());
    }


}
