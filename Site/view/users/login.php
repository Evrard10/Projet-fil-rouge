<div class="page-header">
    <h1>Zone réservée</h1>
    <form action="<?php echo Router::url('users/login'); ?>" method="post">
        <?php echo $this->Form->input('login', 'Identifiant'); ?>
        <?php echo $this->Form->input('password', 'Mot de passe'); ?>

    </form>
</div>