<nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
    
       <li class="heading"><h3><?= $this->Html->link(__('Z0graviry'), ['controller' => 'Headers', 'action' => 'index']) ?></h3></li>
         <li class="heading"><h6><?= __('HEADERS') ?></h6></li>
        <li><?= $this->Html->link(__('New Header'), ['controller' => 'Headers', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Headers'), ['controller' => 'Headers', 'action' => 'list']) ?></li>
          <li class="heading"><h6><?= __('PRESSE') ?></h6></li>
        <li><?= $this->Html->link(__('New Presses'), ['controller' => 'Pres', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Presses'), ['controller' => 'Pres', 'action' => 'index']) ?></li>
         <li class="heading"><h6><?= __('POURS') ?></h6></li>
        <li ><?= $this->Html->link(__('New Pours'), ['controller' => 'Pours', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Pours'), ['controller' => 'Pours', 'action' => 'index']) ?></li>
         <li class="heading"><h6><?= __('DISLAY') ?></h6></li>
        <li><?= $this->Html->link(__('New Interfaces'), ['controller' => 'Interfaces', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Interfaces'), ['controller' => 'Interfaces', 'action' => 'index']) ?></li>
         
         <li class="heading"><h6><?= __('USERS') ?></h6></li>
        <li><?= $this->Html->link(__('New Users'), ['controller' => 'Users', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('LOGIN'), ['controller' => 'Users', 'action' => 'login']) ?></li>
          <li><?= $this->Html->link(__('LOGOUT'), ['controller' => 'Users', 'action' => 'logout']) ?></li>/ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
  <?= $this->Form->create($article) ?>
  <fieldset>
    <legend><?= __('Add New article') ?></legend>
    
    <?=  $this->Form->create($article);?>
   
     
             <legend>Dynamic-content</legend>
<?=  $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);?>
     <?=  $this->Form->control('title_article');?>

     <?=  $this->Form->input('slug');?>
     <?=  $this->Form->input('img');?>
     <?=  $this->Form->input('body');?>
     <?=  $this->Form->input('about_article');?>
           <legend class="English">English</legend>
      <?= $this->Form->control('_translations.en_US.title'); ?>
      <?= $this->Form->control('_translations.en_US.body'); ?>
      <?= $this->Form->control('_translations.en_US.about'); ?>

      
                      <legend>Spanish</legend>
      <?= $this->Form->control('_translations.es.title'); ?>
      <?= $this->Form->control('_translations.es.body'); ?>
      <?= $this->Form->control('_translations.es.about'); ?>

     
                <legend legend>Tieng-VIet</legend>
    <?= $this->Form->control('_translations.vi_VN.title'); ?>
      <?= $this->Form->control('_translations.vi_VN.body'); ?>
      <?= $this->Form->control('_translations.vi_VN.about'); ?>

    
</fieldset>

      
   
  
  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>