<nav class="large-3 medium-4 columns" id="actions-sidebar">

</nav>
<div class="users index large-9 medium-8 columns content">
<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
</div>
