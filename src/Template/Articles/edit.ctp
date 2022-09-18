

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
          <li><?= $this->Html->link(__('LOGOUT'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
  <?=$this->Html->link(__('Tiengviet'), 'http://localhost:8765/articles/edit/'.$article->id.'/?locale=vi_VN');?><br>
   <?=$this->Html->link(__('Tieng anh'), 'http://localhost:8765/articles/edit/'.$article->id.'/?locale=en_US');?><br>
    <?=$this->Html->link(__('Tieng tay ban nha'), 'http://localhost:8765/articles/edit/'.$article->id.'/?locale=es');?>
      <?php
    echo $this->Form->create(NULL,array('url'=>'/articles/edit/'.$article->id));
                                        echo $this->Form->radio("lang",
                                            [
                                                ['value'=>'en_US','text'=>'English'],
                                                ['value'=>'es','text'=>'spanish'],
                                                ['value'=>'vi','text'=>'VietNam'],
                                                
                                                
                                            ]
                                        );
                                        echo $this->Form->button('Change Language');
                                        echo $this->Form->end();
   
   ?>

   

                                        
  <?= $this->Form->create($article) ?>
  <fieldset>
    <legend><?= __('Edit article') ?></legend>
    
    <?=  $this->Form->create($article);?>
   
     
             <legend>Dynamic-content</legend>
<?=  $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);?>
     <?=  $this->Form->control('title_article');?>
     <?=  $this->Form->input('slug');?>
     <?=  $this->Form->input('img');?>
     <?=  $this->Form->input('body');?>
     <?=  $this->Form->input('about_article');?>
     
    
</fieldset>

      
   
  
  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>