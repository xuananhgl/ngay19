
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
    </li>
         <li class="heading"><h3><?= $this->Html->link(__('Z0graviry'), ['controller' => 'Headers', 'action' => 'index']) ?></h3></li>
        
         <li class="heading"><h6><?= __('USERS') ?></h6></li>
        <li><?= $this->Html->link(__('New Users'), ['controller' => 'Users', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('LOGIN'), ['controller' => 'Users', 'action' => 'login']) ?></li>
          <li><?= $this->Html->link(__('LOGOUT'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
          <li class="heading"><h6><?= __('HEADERS') ?></h6></li>
        <li><?= $this->Html->link(__('New Header'), ['controller' => 'Headers', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('list Headers'), ['controller' => 'Headers', 'action' => 'list']) ?></li>
         <li class="heading"><h6><?= __('PRESSE') ?></h6></li>
        <li><?= $this->Html->link(__('New Presses'), ['controller' => 'Pres', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Presses'), ['controller' => 'Pres', 'action' => 'index']) ?></li>
         <li class="heading"><h6><?= __('POURS') ?></h6></li>
        <li ><?= $this->Html->link(__('New Pours'), ['controller' => 'Pours', 'action' => 'add']) ?></li>
         <li><?= $this->Html->link(__('List Pours'), ['controller' => 'Pours', 'action' => 'index']) ?></li>
        
    </ul>
</nav>

<div class="users view large-9 medium-8 columns content">
    <h3><?= h($interface->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('style') ?></th>
            <td><?= h($interface->style) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('backgroun_header') ?></th>
            <td><?= h($interface->backgroun_header) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('color_header') ?></th>
            <td><?= h($interface->color_header) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('color_prou', ['rows' => '3']) ?></th>
            <td><?= h($interface->color_prou) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('image_pour') ?></th>
            <td><?= h($interface->image_pour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('image_header') ?></th>
            <td><?= h($interface->image_header) ?></td>
        </tr>
    </table>
                    <?= $this->Html->link(__('View'), ['controller' => 'Interfaces', 'action' => 'view', $interface->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Interfaces', 'action' => 'edit', $interface->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Interfaces', 'action' => 'delete', $interface->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interface->id)]) ?>
                </td>
            </tr>
          
        </table>
       
    </div>
</div>
