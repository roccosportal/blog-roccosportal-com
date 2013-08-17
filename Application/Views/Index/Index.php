<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $posts = $this->viewData->get('posts') ?>
<?php $this->startContent('Content'); ?>
	<hr />                            
	<?php foreach ($posts as $post) { ?>
		<div class="row blog-row">
			<div class="span3">
				<a href="<?php echo Pvik\Core\Path::relativePath('~/' . $post->uniqueName . '/') ?>">
					<img src="<?php echo Pvik\Core\Path::relativePath('~/img/posts/' . $post->postId.'/thumbnail.png') ?>" alt="image">
				</a>
			</div>
			<div class="span9">     
			    <div class="blog-entry">
			        <h4><?php echo $post->title ?></h4>
			        <p>
			             <small><?php echo $post->getConvertedCreated() ?></small>
			        </p>

			            <?php echo $post->contentPreview ?>
			        <a href="<?php echo Pvik\Core\Path::relativePath('~/' . $post->uniqueName . '/') ?>">read more...</a>
			    </div>
		    </div>
	    </div>
	<?php } ?>
  

<?php $this->endContent(); ?>
<?php $this->startContent('JS'); ?>
<?php $this->endContent(); ?>
