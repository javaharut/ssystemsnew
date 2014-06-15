<?php

/**
 * This is the model class for table "banner".
 *
 * The followings are the available columns in table 'banner':
 * @property integer $id
 * @property string $url
 * @property string $url_ru
 * @property string $url_en
 * @property string $desc
 * @property string $desc_ru
 * @property string $desc_en
 */

class Banner extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'banner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('url, url_ru, url_en, desc, desc_ru, desc_en', 'length', 'max'=>255),
            array('url, url_ru, url_en', 'url'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, url, url_ru, url_en, desc, desc_ru, desc_en', 'safe', 'on'=>'search'),
		);
	}

    /**
     * get current url by language
     */
    public function getcurl() {
    if(Yii::app()->language == "am")
        return $this->url;
    else if(YII::app()->language == "ru")
        return $this->url_ru;
    else
        return $this->url_en;
    }

    /**
     * get current description by language
     */
    public function getcdesc() {
        if(Yii::app()->language == "am")
            return $this->desc;
        else if(YII::app()->language == "ru")
            return $this->desc_ru;
        else
            return $this->desc_en;
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
			'url' => 'Url',
			'url_ru' => 'Url Ru',
			'url_en' => 'Url En',
            'desc' => 'Description',
            'desc_ru' => 'Description Ru',
            'desc_en' => 'Description En',
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
		$criteria->compare('url',$this->url,true);
		$criteria->compare('url_ru',$this->url_ru,true);
		$criteria->compare('url_en',$this->url_en,true);
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
	 * @return Banner the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
