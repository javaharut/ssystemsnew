<?php

/**
 * This is the model class for table "main".
 *
 * The followings are the available columns in table 'main':
 * @property integer $id
 * @property string $keyword
 * @property string $keyword_ru
 * @property string $keyword_en
 * @property string $title
 * @property string $title_ru
 * @property string $title_en
 * @property string $meta_desc
 * @property string $meta_desc_ru
 * @property string $meta_desc_en
 * @property string $desc
 * @property string $desc_ru
 * @property string $desc_en
 */
class Main extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'main';
	}

    public function getcmetadesc() {
        if(Yii::app()->language == "am")
            return $this->meta_desc;
        else if(YII::app()->language == "ru")
            return $this->meta_desc_ru;
        else
            return $this->meta_desc_en;
    }

    public function getckeyword() {
        if(Yii::app()->language == "am")
            return $this->keyword;
        else if(YII::app()->language == "ru")
            return $this->keyword_ru;
        else
            return $this->keyword_en;
    }

    public function getctitle() {
        if(Yii::app()->language == "am")
            return $this->title;
        else if(YII::app()->language == "ru")
            return $this->title_ru;
        else
            return $this->title_en;
    }

    public function getcdesc() {
        if(Yii::app()->language == "am")
            return $this->desc;
        else if(YII::app()->language == "ru")
            return $this->desc_ru;
        else
            return $this->desc_en;
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('keyword, keyword_ru, keyword_en, title, title_ru, title_en', 'length', 'max'=>255),
			array('meta_desc, meta_desc_ru, meta_desc_en, desc, desc_ru, desc_en', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, keyword, keyword_ru, keyword_en,  title, title_ru, title_en, meta_desc, meta_desc_ru, meta_desc_en, desc, desc_ru, desc_en', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'keyword' => 'Keyword',
			'keyword_ru' => 'Keyword Ru',
			'keyword_en' => 'Keyword En',
            'title' => 'Title',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
			'meta_desc' => 'Meta Desc',
			'meta_desc_ru' => 'Meta Desc Ru',
			'meta_desc_en' => 'Meta Desc En',
			'desc' => 'Desc',
			'desc_ru' => 'Desc Ru',
			'desc_en' => 'Desc En',
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
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('keyword_ru',$this->keyword_ru,true);
		$criteria->compare('keyword_en',$this->keyword_en,true);
        $criteria->compare('title',$this->title,true);
        $criteria->compare('title_ru',$this->title_ru,true);
        $criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('meta_desc',$this->meta_desc,true);
		$criteria->compare('meta_desc_ru',$this->meta_desc_ru,true);
		$criteria->compare('meta_desc_en',$this->meta_desc_en,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('desc_ru',$this->desc_ru,true);
		$criteria->compare('desc_en',$this->desc_en,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Main the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
