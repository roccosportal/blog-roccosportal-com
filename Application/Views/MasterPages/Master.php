<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>blog.roccosportal.com</title>
        <link rel="shortcut icon" href="http://roccosportal.com/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="http://roccosportal.com/favicon.ico" type="image/x-icon" />
        <meta name="description" content="">
        <link href="<?php echo Pvik\Core\Path::relativePath('~/css/bootstrap-custom.min.css');?>" rel="stylesheet" media="screen">
        <link href="<?php echo Pvik\Core\Path::relativePath('~/css/general.css');?>" rel="stylesheet" media="screen">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1><a href="<?php echo Pvik\Core\Path::relativePath('~/');?>">blog.roccosportal.com </a><small>coding, art and stuff</small><img class="pull-right" src="http://roccosportal.com/img/roccosportal-logo-tiny.png" alt="" /></h1>
            </div>
            <div class="pull-right" id="contact">
                <small>rocco@roccosportal.com</small>
            </div>
            <div class="row" id="about">
                <div class="span8 offset2">
                    <p>
                        Nothing to see here. Scroll down.
                    </p>
                    <p>
                        <small>You may want to follow <a href="http://roccosportal.com">this link</a> to enter my frontpage.</small>
                    </p>
                 </div>
            </div>
            <div class="row">
                <div class="span12">
                    <?php $this->useContent('Content'); ?>
                </div>
            </div>
            <div class="row" id="footer">
                <div class="span12">
                    <hr />
                    <div class="row">
                        <div class="span9 offset3">
                            <p>
                                <small>You are looking at <a href="https://github.com/roccosportal/blog-roccosportal-com/">blog.roccosportal.com</a> at version <a href="http://semver.org/">2.0.0</a>. Build with <a href="http://twitter.github.com/bootstrap/">bootstrap</a> and  <a href="https://github.com/roccosportal/pvik/">pvik</a>.
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->useContent('JS'); ?>
    </body>
</html>