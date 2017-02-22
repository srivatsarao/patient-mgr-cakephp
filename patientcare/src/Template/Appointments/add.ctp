<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
   <?= $this->Element('actions',array('type'=>'Appointment','typePlural'=>'Appointments'));?>
</nav>
<div class="appointments form large-9 medium-8 columns content">
    <?= $this->Form->create($appointment) ?>
    <fieldset>
        <legend><?= __('Add Appointment') ?></legend>
        <?php
            echo $this->Form->input('patient_id', ['options' => $patients]);
            echo $this->Form->input('doctor_id', ['options' => $doctors]);
            echo $this->Form->input('apt_date');
            echo $this->Form->input('created_date');
            echo $this->Form->input('modified_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>