<div id="category_list">
    <h2>カテゴリ一覧</h2>
    <ul>
        <?php foreach ($categories as $category) :?>
            <li>
                <a href="<?php echo $this->Html->url('category/'.$category['Category']['id']);?>">
                    <?php echo $category['Category']['title'];?> 
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>