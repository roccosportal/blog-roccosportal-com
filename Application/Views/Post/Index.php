<?php $this->useMasterPage('~/Application/Views/MasterPages/Master.php'); ?>
<?php $post = $this->viewData->get('post') ?>
<?php $this->startContent('Content'); ?>
    <div class="span7 blog-entry">
        <h3><?php echo $post->title ?></h3>
        <p>
            <small><?php echo $post->getConvertedCreated() ?></small>
        </p>
            <?php echo $post->content ?>
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'blog-roccosportal-com'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    </div>

<?php $this->endContent(); ?>
<?php $this->startContent('JS'); ?>
<?php $this->endContent(); ?>
