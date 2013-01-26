<?php

/**
 * This is the model class for table "agelevel".
 *
 * The followings are the available columns in table 'agelevel':
 * @property integer $id
 * @property string $menuTitle
 *
 * The followings are the available model relations:
 * @property Category[] $categories
 */
class Agelevel extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Agelevel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'agelevel';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                    array('menuTitle', 'required'),
			array('menuTitle', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, menuTitle', 'safe', 'on'=>'search'),
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
			'categories' => array(self::HAS_MANY, 'Category', 'agelevelId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'menuTitle' => 'Menu Title',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('menuTitle',$this->menuTitle,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

        public function getAgelevels()
        {
            $agelevels = Yii::app()->db->createCommand()
                ->select('a.id, a.menuTitle')
                ->from('agelevel a')
                ->order('a.id')
                ->queryAll();
            $tmp = array();
            foreach($agelevels as $agelevel){
                $tmp[] = array($agelevel['id'] => $agelevel['menuTitle']);
            }
            return $tmp;
        }
}