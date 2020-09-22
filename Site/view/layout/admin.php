<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo isset($title_for_layout)?$title_for_layout:'Administration'; ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

        <div class="topbar" style="position:static">
            <div class="topbar-inner">
                <div class="container">
                    <h3><a href="<?php echo Router::url('admin/posts/index'); ?>">Administration</a></h3>
                    <ul class="nav">
                        <li><a href="<?php echo Router::url('admin/pages/index'); ?>">Articles</a></li>
                        <li><a href="<?php echo Router::url('admin/pages/index'); ?>">Pages</a></li>
                        <li><a href="<?php echo Router::url(); ?>">Voir le site</a></li>
                        <li><a href="<?php echo Router::url('users/logout'); ?>">Se déconnecter</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container" style="padding-top:60px;">
            <?php echo $this->Session->flash(); ?>
            <?php echo $content_for_layout; ?>
        </div>
    </body>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    </html>


        