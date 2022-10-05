
<div class="users form large-9 medium-8 columns content">
  <h1>Edit pour</h1>
<?php
    echo $this->Form->create($pour);
    echo $this->Form->control('title');
    echo $this->Form->control('logo');
    echo $this->Form->control('Notre_engagement');
    echo $this->Form->control('about_notre');
    echo $this->Form->control('note');
    echo $this->Form->button(__('Save Pours'));
    echo $this->Form->end();
?>
    <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $pour->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $pour->id)])
    ?>
</div>
