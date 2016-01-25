<div class="col-lg-10 col-md-10 col-xs-10 col-lg-offset-1 col-md-offset-1">
        <?php foreach($articles as $r):?>
            <h1 style="font-family: Open"><?= $r->article_title ?></h1>
            <?= $r->article_content; ?>
        <?php endforeach;?>
</div>
