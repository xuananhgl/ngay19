
<div class="articles form large-9 medium-8 columns content">
  <?= $this->Form->create($pour) ?>
  <fieldset>
    <legend><?= __('Add New pours') ?></legend>
    <?php
    echo $this->Form->create($pour);
    echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
    echo $this->Form->control('title');
    echo $this->Form->control('logo');

     echo $this->Form->control('Notre_engagement');
      echo $this->Form->control('about_notre', ['rows' => '3']);
     echo $this->Form->control('note');
     ?>
               <legend class="English">English</legend>

      <?= $this->Form->control('_translations.en_US.logo', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.en_US.title', ['rows' => '1']); ?>
       <?= $this->Form->control('_translations.en_US.Notre_engagement', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.en_US.about_notre', ['rows' => '1']); ?>
       <?= $this->Form->control('_translations.en_US.note', ['rows' => '1']); ?>
                      <legend>Spanish</legend>

      <?= $this->Form->control('_translations.es.logo', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.es.title', ['rows' => '1']); ?>
        <?= $this->Form->control('_translations.es.Notre_engagement', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.es.about_notre', ['rows' => '1']); ?>
       <?= $this->Form->control('_translations.es.note', ['rows' => '1']); ?>


                <legend legend>Tieng-VIet</legend>

      <?= $this->Form->control('_translations.vi_VN.logo', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.vi_VN.title', ['rows' => '1']); ?>
       <?= $this->Form->control('_translations.vi_VN.Notre_engagement', ['rows' => '1']); ?>
      <?= $this->Form->control('_translations.vi_VN.about_notre', ['rows' => '1']); ?>
       <?= $this->Form->control('_translations.vi_VN.note', ['rows' => '1']); ?>
  </fieldset>
  <?= $this->Form->button(__('Submit')) ?>
  <?= $this->Form->end() ?>
</div>
