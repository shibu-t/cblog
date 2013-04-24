<?php

class VisitorsController extends AppController {
    public $uses = array('Article');
    public $layout = "visitor";

    public function index(){
        $articles = $this->Article->find('all');
        $this->set('articles', $articles);
    }

    public function view($id){
        $article = $this->Article->findById($id);
        $this->set('article', $article);
    }

    public function category($id){
        $this->loadModel('Category');
        $category = $this->Category->findById($id);
        $category_articles = $this->Article->findAllByCategoryId($id);
        $this->set('category_articles', $category_articles);
    }

    public function monthly($year, $month) {
        $monthly_articles = $this->Article->getMonthlyArticles($year, $month);
        $this->set('monthly_articles', $monthly_articles);
    }

    public function beforeRender()
    {
        $this->loadModel('Category');

        $new_articles = $this->Article->getNewArticles();
        $this->set('new_articles', $new_articles);
        $this->set('categories', $this->Category->find('all'));
        $this->set('monthly_counts', $this->Article->getMonthlyCounts());

        parent::beforeRender();
    }
}