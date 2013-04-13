<?php

/**
 * This is the model class for table "category".
 *
 * The followings are the available columns in table 'category':
 * @property integer $id
 * @property integer $agelevelId
 * @property string $name
 * @property string $description
 * @property integer $active
 *
 * The followings are the available model relations:
 * @property Agelevel $agelevel
 * @property Game[] $games
 */
class Category extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Category the static model class
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
		return 'category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('agelevelId, name', 'required'),
			array('agelevelId, active', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, agelevelId, name, description, active', 'safe', 'on'=>'search'),
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
			'agelevel' => array(self::BELONGS_TO, 'Agelevel', 'agelevelId'),
			'games' => array(self::HAS_MANY, 'Game', 'categoryId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'agelevelId' => 'Agelevel',
			'name' => 'Name',
			'description' => 'Description',
			'active' => 'Active',
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
		$criteria->compare('agelevelId',$this->agelevelId);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

        public function getCategories()
        {
            $categories = Yii::app()->db->createCommand()
                ->select('c.id, c.name, a.menuTitle')
                ->from('category c')
                ->join('agelevel a', 'a.id=c.agelevelId')
                ->order('a.id')
                ->queryAll();
            $tmp = array();
            foreach($categories as $category){
                $tmp[] = array($category['id'] => $category['name']. ' (' .$category['menuTitle'] . ')');
            }
            return $tmp;
        }
}