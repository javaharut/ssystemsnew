<?php

/**
 * This is the model class for table "certificates".
 *
 * The followings are the available columns in table 'certificates':
 * @property string $CER_ID
 * @property string $CER_TITLE
 * @property string $CER_PHOTO
 * @property string $CER_DATE
 */
class Certificates extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'certificates';
	}

    public function getid() {
        return $this->CER_ID;
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CER_TITLE, CER_PHOTO', 'length', 'max'=>255),
			array('CER_DATE', 'length', 'max'=>13),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CER_ID, CER_TITLE, CER_PHOTO, CER_DATE', 'safe', 'on'=>'search'),
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
			'CER_ID' => 'Cer',
			'CER_TITLE' => 'Cer Title',
			'CER_PHOTO' => 'Cer Photo',
			'CER_DATE' => 'Cer Date',
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

		$criteria->compare('CER_ID',$this->CER_ID,true);
		$criteria->compare('CER_TITLE',$this->CER_TITLE,true);
		$criteria->compare('CER_PHOTO',$this->CER_PHOTO,true);
		$criteria->compare('CER_DATE',$this->CER_DATE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Certificates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
