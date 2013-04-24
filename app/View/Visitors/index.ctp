<h1><記事一覧</h1>
<?php if (count($articles) && $articles) : ?>
<ul>
<?php foreach ($articles as $article) :?>
    <?php $datetime = date_create($article['Article']['created']); ?><li>
    <?php // $article = $article['Article']; かかないでください?>
    <h2><a href="<?php echo $this->Html->url('view/'.$article['Article']['id']) ?>"></h2>
        <?php echo $article['Article']['title']; ?><span>
    [<?php echo $article['Category']['title']; ?>]</span></a></h2>
    <p><?php echo $article['Article']['body'];?></p>
    <p><?php echo date_format($datetime, 'Y年m月d日'); ?>に投稿されました</p>
    </li>  
<?php endforeach?>
</ul>
<?php else: ?>
表示できる記事がありません
<?php endif; ?>