
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

<div class="users view large-9 medium-8 columns content">
    <h3><?= h($header->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($header->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('munber_style ') ?></th>
            <td><?= h($header->munber_style ) ?></td>
        </tr>
       
            <th scope="row"><?= __('about') ?></th>
            <td><?= h($header->about) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('title') ?></th>
            <td><?= h($header->title) ?></td>
        </tr>
         
         <tr>
            <th scope="row"><?= __('bnt') ?></th>
            <td><?= h($header->bnt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('bnt_video') ?></th>
            <td><?= h($header->bnt_video) ?></td>
        </tr>
    </table>
                    <?= $this->Html->link(__('View'), ['controller' => 'Headers', 'action' => 'view', $header->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Headers', 'action' => 'edit', $header->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Headers', 'action' => 'delete', $header->id], ['confirm' => __('Are you sure you want to delete # {0}?', $header->id)]) ?>
                </td>
            </tr>
          
        </table>
       
    </div>
</div>
