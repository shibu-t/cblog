<?php
App::uses('AppModel', 'Model');
/**
 * Article Model
 *
 * @property User $User
 * @property Category $Category
 * @property Comment $Comment
 */
class Article extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'article_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public function getNewArticles(){
		return $this->find('all', array('limit' => 5, 'order' => 'Article.id DESC'));
	}

	public function getMonthlyCounts()
	{
		return $data = $this->query(
			"SELECT count(*) AS count, DATE_FORMAT(updated, '%Y-%m') AS monthly
				FROM articles
				GROUP BY monthly
				ORDER BY monthly DESC
			"
		);
	}

	public function getMonthlyArticles($year, $month){
		$start_date = date('Y-m-d', mktime(0,0,0,$month,1,$year));
		$end_date = date('Y-m-d', mktime(0,0,0,$month+1,1,$year));

		$conditions = array(
			'Article.updated >= ' => $start_date,
			'Article.updated < ' => $end_date,
		);
		return $this->find('all', array('conditions' => $conditions));
	}

}
