<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $posts = $this->viewData->get('posts') ?>
<?php $this->startContent('Content'); ?>
<?php foreach ($posts as $post) { ?>
    <div class="span7 blog-entry">
        <h3><?php echo $post->title ?></h3>
        <p>
             <small><?php echo $post->getConvertedCreated() ?></small>
        </p>

            <?php echo $post->contentPreview ?>
        <a href="<?php echo Pvik\Core\Path::relativePath('~/' . $post->uniqueName . '/') ?>">read more...</a>
    </div>
<?php } ?>
<?php $this->endContent(); ?>
<?php $this->startContent('JS'); ?>
<?php $this->endContent(); ?>
