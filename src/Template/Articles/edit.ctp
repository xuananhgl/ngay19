

    <div class="articles form large-9 medium-8 columns content">
      <h3><?= __('Edit article') ?></h3>
      <?=$this->Html->link(__('Tiengviet'), 'http://localhost:8765/articles/edit/'.$article->id_article .'/?locale=vi_VN');?><br>
      <?=$this->Html->link(__('Tieng anh'), 'http://localhost:8765/articles/edit/'.$article->id_article .'/?locale=en_US');?><br>
      <?=$this->Html->link(__('Tieng tay ban nha'), 'http://localhost:8765/articles/edit/'.$article->id_article .'/?locale=es');?>




  <?php
      echo $this->Form->create($article);
      echo $this->Form->control('title');
      echo $this->Form->control('link');
      echo $this->Form->control('body');
      echo $this->Form->control('about');

      echo $this->Form->button(__('Save Article'));
      echo $this->Form->end();
  ?>



    </div>
