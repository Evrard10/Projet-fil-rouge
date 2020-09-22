<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <title><?php echo isset($title_for_layout)?$title_for_layout:'Mon site'; ?></title>
</head>
<body>
  <div class="topbar" style="position: static;">
    <div class="topbar-inner">
      <div class="container">
        <ul class="nav">
          <h3><a href="#">Mon site</a></h3>
          <?php $pagesMenu = $this->request('Pages','getMenu'); ?>
          <?php foreach($pagesMenu as $p): ?>
            <li><a href="<?php echo BASE_URL.'/pages/view/'.$p->id; ?>" title="<
              ?php echo $p->name; ?>"><?php echo $p->name; ?></a></li>
          <?php endforeach; ?>
          <li><a href="<?php echo Router::url('posts/index'); ?>">Actualité</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container" style="padding-top:60px ;">
    <?php echo $this->Session->flash(); ?>
    <?php echo $content_for_layout; ?>
  </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>