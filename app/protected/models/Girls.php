<?php

/**
 * This is the model class for table "girls".
 *
 * The followings are the available columns in table 'girls':
 * @property integer $id
 * @property string $name
 * @property string $nationality
 * @property string $registration
 * @property integer $day
 * @property integer $year
 * @property integer $month
 * @property string $phone
 * @property string $email
 * @property double $height
 * @property double $weight
 * @property double $param1
 * @property double $param2
 * @property double $param3
 * @property string $marital
 * @property string $education
 * @property string $experience
 * @property string $qualities
 * @property string $hobby
 * @property string $purpose
 * @property string $contracts
 * @property string $links
 * @property string $demo
 * @property string $portrait
 * @property string $fulllengthportrait
 * @property integer $rating
 */
class Girls extends CActiveRecord
{
	public $image, $image2, $mp3;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Girls the static model class
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
		return 'girls';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, nationality, registration, day, year, month, phone, email, height, weight, param1, param2, param3, marital, education, experience, qualities, hobby, purpose, contracts, links, demo, portrait, fulllengthportrait', 'required'),
			array('day, year, month, rating', 'numerical', 'integerOnly'=>true),
			array('height, weight, param1, param2, param3', 'numerical'),
			array('name, nationality', 'length', 'max'=>50),
			array('registration', 'length', 'max'=>100),
			array('phone', 'length', 'max'=>12),
			array('email','email'),
			array('email, phone, name','unique'),
			array('email, education', 'length', 'max'=>30),
			array('marital', 'length', 'max'=>10),
			array('image, image2', 'file', 'types'=>'jpg, gif, png', 'maxSize'=>1024 * 1024 * 3),
			array('mp3', 'file', 'types'=>'mp3', 'maxSize'=>1024 * 1024 * 15),
			//array('demo, portrait, fulllengthportrait', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, nationality, registration, day, year, month, phone, email, height, weight, param1, param2, param3, marital, education, experience, qualities, hobby, purpose, contracts, links, demo, portrait, fulllengthportrait, rating', 'safe', 'on'=>'search'),
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
			'name' => 'Name',
			'nationality' => 'Nationality',
			'registration' => 'Registration',
			'day' => 'Day',
			'year' => 'Year',
			'month' => 'Month',
			'phone' => 'Phone',
			'email' => 'Email',
			'height' => 'Height',
			'weight' => 'Weight',
			'param1' => 'Param1',
			'param2' => 'Param2',
			'param3' => 'Param3',
			'marital' => 'Marital',
			'education' => 'Education',
			'experience' => 'Experience',
			'qualities' => 'Qualities',
			'hobby' => 'Hobby',
			'purpose' => 'Purpose',
			'contracts' => 'Contracts',
			'links' => 'Links',
			'demo' => 'Demo',
			'portrait' => 'Portrait',
			'fulllengthportrait' => 'Fulllengthportrait',
			'rating' => 'Rating',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('nationality',$this->nationality,true);
		$criteria->compare('registration',$this->registration,true);
		$criteria->compare('day',$this->day);
		$criteria->compare('year',$this->year);
		$criteria->compare('month',$this->month);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('height',$this->height);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('param1',$this->param1);
		$criteria->compare('param2',$this->param2);
		$criteria->compare('param3',$this->param3);
		$criteria->compare('marital',$this->marital,true);
		$criteria->compare('education',$this->education,true);
		$criteria->compare('experience',$this->experience,true);
		$criteria->compare('qualities',$this->qualities,true);
		$criteria->compare('hobby',$this->hobby,true);
		$criteria->compare('purpose',$this->purpose,true);
		$criteria->compare('contracts',$this->contracts,true);
		$criteria->compare('links',$this->links,true);
		$criteria->compare('demo',$this->demo,true);
		$criteria->compare('portrait',$this->portrait,true);
		$criteria->compare('fulllengthportrait',$this->fulllengthportrait,true);
		$criteria->compare('rating',$this->rating);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}