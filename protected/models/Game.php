<?php

/**
 * This is the model class for table "game".
 *
 * The followings are the available columns in table 'game':
 * @property string $id
 * @property integer $categoryId
 * @property string $name
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Category $category
 */
class Game extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Game the static model class
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
		return 'game';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categoryId, name, description', 'required'),
			array('categoryId', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>50),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, categoryId, name, description', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'Category', 'categoryId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'categoryId' => 'Category',
			'name' => 'Name',
			'description' => 'Description',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('categoryId',$this->categoryId);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

        public function getGames()
        {
            $games = Yii::app()->db->createCommand()
                ->select('g.id, g.name, c.name as catname, a.menuTitle')
                ->from('game g')
                ->join('category c', 'c.id = g.categoryId')
                ->join('ageLevel a', 'a.id=c.agelevelId')
                ->order('c.agelevelId')
                ->queryAll();
            $tmp = array();
            foreach($games as $game){
                $tmp[] = array($game['id'] => $game['name']. ' (' . $game['catname'] .' - '. $game['menuTitle'] . ')');
            }
            return $tmp;
        }

        public function getGamesForCat($categoryId)
        {
            $games = Yii::app()->db->createCommand()
                ->select('g.id, g.name, c.name as catname, a.menuTitle')
                ->from('game g')
                ->join('category c', 'c.id = g.categoryId')
                ->join('ageLevel a', 'a.id=c.agelevelId')
                ->where('g.categoryId=:catId', array(':catId' => $categoryId))
                ->order('c.agelevelId')
                ->queryAll();
            $tmp = array();
            foreach($games as $game){
                $tmp[] = array('id' => $game['id'], 'gameName' => $game['name'], 'categoryName' => $game['catname'], 'agelevelTitle' => $game['menuTitle']);
            }
            return $tmp;
        }

}