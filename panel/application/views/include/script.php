<script src="<?= base_url("assets") ?>/libs/bower/jquery/dist/jquery.js"></script>
<script src="<?= base_url("assets") ?>/libs/bower/jquery-ui/jquery-ui.min.js"></script>
<script src="<?= base_url("assets") ?>/libs/bower/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="<?= base_url("assets") ?>/libs/bower/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
<script src="<?= base_url("assets") ?>/libs/bower/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="<?= base_url("assets") ?>/libs/bower/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="<?= base_url("assets") ?>/libs/bower/PACE/pace.min.js"></script>
<!-- endbuild -->

<!-- build:js <?= base_url("assets") ?>/assets/js/app.min.js -->
<script src="<?= base_url("assets") ?>/assets/js/library.js"></script>

<script src="<?= base_url("assets") ?>/assets/js/plugins.js"></script>
<script src="<?= base_url("assets") ?>/assets/js/app.js"></script>
<!-- endbuild -->
<script src="<?= base_url("assets") ?>/libs/bower/moment/moment.js"></script>
<script src="<?= base_url("assets") ?>/libs/bower/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="<?= base_url("assets") ?>/assets/js/fullcalendar.js"></script>
<?php if (!empty($this->session->flashdata('text') && !empty($this->session->flashdata('type')))): ?>
    <script !src="">
        iziToast.<?=$this->session->flashdata('type')?>({
            position: 'topCenter',
            title: '<?=$this->session->flashdata('text')?>',
        });
    </script>
<?php endif; ?>