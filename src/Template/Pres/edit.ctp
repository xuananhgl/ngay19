
<h1>Edit pres</h1>
<?php
    echo $this->Form->create($pre);
    echo $this->Form->control('title_pres');
    echo $this->Form->control('logo');
    echo $this->Form->control('author');
    echo $this->Form->control('dress');
    echo $this->Form->control('link');
    echo $this->Form->input('about_pres');
    echo $this->Form->button(__('Save pre'));
    echo $this->Form->end();
?>


            <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $pre->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $pre->id)])
            ?>
