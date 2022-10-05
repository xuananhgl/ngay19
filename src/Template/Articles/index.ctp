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
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Articles') ?></h3>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>

                <th scope="col"><?= $this->Paginator->sort('about') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img') ?></th>
                <th scope="col"><?= $this->Paginator->sort('body') ?></th>
<th scope="col"><?= $this->Paginator->sort('links') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $this->Number->format($article->id_article) ?></td>
                <td><?= h($article->about ) ?></td>
                <td><?= h($article->title ) ?></td>
                <td><?= h($article->img) ?></td>
                <td><?= h($article->body) ?></td>
                <td><?= h($article->link) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $article->id_article]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id_article]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id_article], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id_article)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
