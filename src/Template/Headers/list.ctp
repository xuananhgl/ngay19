
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Headers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('about') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bnt') ?></th>
              
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($headers as $header): ?>
            <tr>
                <td><?= $this->Number->format($header->id) ?></td>
               
                 <td><?= h($header->about) ?></td>
                <td><?= h($header->title) ?></td>
                <td><?= h($header->bnt	) ?></td>
                <td><?= h($header->bnt_video) ?></td>
                
              
                
                 
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $header->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $header->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $header->id], 
                    ['confirm' => __('Are you sure you want to delete # {0}?', $header->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>




  <style>
  #draggable { width: 150px; height: 150px; padding: 0.5em; background: #CCC;}
  </style>


  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>



  <script>
  $( function() {
    $( "#draggable" ).draggable();
  } );
  </script>

   <script>
$(".ui-widget-content").ready(function(){
    $(".ui-widget-content").mouseup(function(event){
        $(".sp1").text(event.pageY);
        console.log(text(event.pageY))
      });

  $(".ui-widget-content").mouseup(function(event){
    $(".sp3").text(event.pageX);
  });
    
});
  </script>
           


 
<div id="draggable" class="ui-widget-content">
    
        
    width:<span class="sp3"></span>px
height:<span class="sp1"></span>px
</div>
  

 
 
