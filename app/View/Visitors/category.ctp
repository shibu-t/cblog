<h1>カテゴリ別記事一覧</h1>

    <ul>
        <?php foreach ($category_articles as $article) :?>
            <li>
                <ul>
                    <li>
                        タイトル：<?php echo $article['Article']['title'];?>
                    </li>
                    <li>
                        本文   ：<?php echo $article['Article']['body'];?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
