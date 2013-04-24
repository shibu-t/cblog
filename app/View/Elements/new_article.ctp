<div id="article_list">
    <h2><a href="<?php echo $this->Html->url('index'); ?>">新着記事一覧</a></h2>
    <ul>
        <?php foreach($articles as $article) :?>
        <li>
            <a href="<?php echo $this->Html->url('view'. $article['Article']['id']); ?>">
                <?php echo $article['Article']['title'];?>
            </a>
        </li>
        <?php endforeach;?>
    </ul>