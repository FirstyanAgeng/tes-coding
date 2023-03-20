<?php 
// alert sukses
if (!empty($this->session->userdata('alert_sukses')) && $this->session->userdata('alert_sukses') != '') { ?>
<div class="m-2">
    <div class="alert alert-info">
        <i class="fas fa-check"></i> <?= $this->session->userdata('alert_sukses') ?>
    </div>
</div>
<?php } $this->session->unset_userdata('alert_sukses'); ?>

<!-- alert gagal -->
<?php if (!empty($this->session->userdata('alert_gagal')) && $this->session->userdata('alert_gagal') != '') { ?>
<div class="m-2">
    <div class="alert alert-danger">
        <i class="fas fa-times"></i> <?= $this->session->userdata('alert_gagal') ?>
    </div>
</div>
<?php } $this->session->unset_userdata('alert_gagal'); ?>