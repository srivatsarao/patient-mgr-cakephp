<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions',array('type'=>'Doctor','typePlural'=>'Doctors'));?>
</nav>
<div class="doctors form large-9 medium-8 columns content">
    <?= $this->Form->create($doctor) ?>
    <fieldset>
        <legend><?= __('Edit Doctor') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('accept_patients');
            echo $this->Form->input('created_date');
            echo $this->Form->input('modified_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
