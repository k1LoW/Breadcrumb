<ol class="breadcrumb">
    <?php foreach ($breadcrumb as $bread): ?>
        <?php
         $title = key($bread);
         $url = $bread[$title];
        ?>
        <?php if (!empty($url)): ?>
            <li>
                <?= $this->Html->link($title, $url); ?>
            </li>
        <?php else: ?>
        <li>
            <?= $title; ?>
        </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ol>
