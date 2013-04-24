<h1>月別記事一覧</h1>

    <ul>
        <?php foreach ($monthly_articles as $article) :?>
            <li>
                <ul>
                    <li>
                        <?php echo $article['Article']['title'];?>
                    </li>
                    <li>
                        <?php echo $article['Article']['body'];?>
                    </li>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
