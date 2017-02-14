<?php

namespace common\models\school;

use Yii;

/**
 * This is the model class for table "{{%school}}".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property integer $school_id
 * @property string $language
 * @property string $school_title
 * @property string $school_short_title
 * @property string $school_slogan
 * @property string $school_logo_path
 * @property string $school_backgroud_path
 * @property double $longitude
 * @property double $latitude
 * @property string $address
 * @property integer $province_id
 * @property integer $city_id
 * @property integer $region_id
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $created_id
 * @property integer $status
 * @property integer $sort
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%school}}';
    }

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
    public function rules()
    {
        return [
            [['parent_id', 'school_id', 'province_id', 'city_id', 'region_id', 'created_at', 'updated_at', 'created_id', 'status', 'sort'], 'integer'],
            [['school_id', 'school_title', 'province_id', 'city_id', 'region_id', 'created_at', 'updated_at', 'created_id'], 'required'],
            [['longitude', 'latitude'], 'number'],
            [['language'], 'string', 'max' => 32],
            [['school_title', 'school_slogan'], 'string', 'max' => 512],
            [['school_short_title'], 'string', 'max' => 128],
            [['school_logo_path', 'school_backgroud_path', 'address'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common', '自增ID'),
            'parent_id' => Yii::t('common', '主校ID'),
            'school_id' => Yii::t('common', '学校ID'),
            'language' => Yii::t('common', '语言'),
            'school_title' => Yii::t('common', '学校名称'),
            'school_short_title' => Yii::t('common', '学校简称'),
            'school_slogan' => Yii::t('common', '学校标语'),
            'school_logo_path' => Yii::t('common', 'School Logo Path'),
            'school_backgroud_path' => Yii::t('common', 'School Backgroud Path'),
            'longitude' => Yii::t('common', '经度'),
            'latitude' => Yii::t('common', '纬度'),
            'address' => Yii::t('common', '地址'),
            'province_id' => Yii::t('common', '省'),
            'city_id' => Yii::t('common', '城市'),
            'region_id' => Yii::t('common', '区县'),
            'created_at' => Yii::t('common', 'Created At'),
            'updated_at' => Yii::t('common', 'Updated At'),
            'created_id' => Yii::t('common', 'Created ID'),
            'status' => Yii::t('common', '0正常；1：标记删除；2:待审核；'),
            'sort' => Yii::t('common', '默认与排序'),
        ];
    }

    /**
     * @inheritdoc
     * @return \common\models\query\SchoolQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\SchoolQuery(get_called_class());
    }
}
