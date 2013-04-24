<h1><?php echo $year;?>年<?php echo $month;?>月別記事一覧</h1>
<?php echo $this->element('articles', array('articles' => $monthly_articles));