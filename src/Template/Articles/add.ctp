
<div class="articles form large-9 medium-8 columns content">
  <?= $this->Form->create($article) ?>
  <fieldset>
    <legend><?= __(' New article') ?></legend>
      <?=  $this->Form->create($article);?>
             <legend>Dynamic-content</legend>
      <?=  $this->Form->control('title');?>
      <?=  $this->Form->input('img');?>
      <?=  $this->Form->input('body');?>
      <?=  $this->Form->input('about');?>
      <?=  $this->Form->input('link');?>
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




  <?= $this->Form->button(__('Save')) ?>
  <?= $this->Form->end() ?>
</div>
