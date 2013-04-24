<div id="monthly_list">
    <h2>過去記事</h2>
    <ul>
        <?php foreach ($monthly as $month) :?>
            <?php $date = explode('-', $month[0]['monthly']); ?>
            <li>
                <a href="<?php echo $this->Html->url('monthly/'.$date[0].'/'.$date[1]);?>">
                    <?php echo $date[0];?>年<?php echo $date[1];?>月
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>