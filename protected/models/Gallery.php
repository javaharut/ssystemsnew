<?php

/**
 * This is the model class for table "gallery".
 *
 * The followings are the available columns in table 'gallery':
 * @property integer $id
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $path
 * @property integer $type
 * @property integer $parent_id
 *
 * The followings are the available model relations:
 * @property Gallery $parent
 * @property Gallery[] $galleries
 */
class Gallery extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gallery';
	}
    public function getctitle() {
        if(Yii::app()->language == "am")
            return $this->title;
        else if(YII::app()->language == "ru")
            return $this->title_ru;
        else
            return $this->title_en;
    }
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, parent_id', 'numerical', 'integerOnly'=>true),
			array('title, title_ru, title_en, path', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, title_ru, title_en, path, type, parent_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'parent' => array(self::BELONGS_TO, 'Gallery', 'parent_id'),
			'galleries' => array(self::HAS_MANY, 'Gallery', 'parent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'title_ru' => 'Title Ru',
			'title_en' => 'Title En',
			'path' => 'Path',
			'type' => 'Type',
			'parent_id' => 'Parent',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('title_ru',$this->title_ru,true);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('parent_id',$this->parent_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gallery the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}