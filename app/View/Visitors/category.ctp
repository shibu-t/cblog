<h1><?php echo $category['Category']['title']; ?>に関する記事一覧</h1>

<?php echo $this->element('articles', array('articles' => $category_articles)); ?>