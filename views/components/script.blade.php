<!-- JAVASCRIPT -->
<script src="<?php echo BASE_URL . '/public/assets/libs/bootstrap/js/bootstrap.bundle.min.js'; ?> "></script>
<script src="<?php echo BASE_URL . '/public/assets/libs/simplebar/simplebar.min.js'; ?> "></script>
<script src="<?php echo BASE_URL . '/public/assets/libs/node-waves/waves.min.js'; ?> "></script>
<script src="<?php echo BASE_URL . '/public/assets/libs/feather-icons/feather.min.js'; ?> "></script>
<script src="<?php echo BASE_URL . '/public/assets/js/pages/plugins/lord-icon-2.1.0.js'; ?> "></script>
<script src="<?php echo BASE_URL . '/public/assets/js/plugins.js'; ?> "></script>

<!-- apexcharts -->
<script src="<?php echo BASE_URL . '/public/assets/libs/apexcharts/apexcharts.min.js'; ?> "></script>

<!-- Vector map-->
<script src="<?php echo BASE_URL . '/public/assets/libs/jsvectormap/jsvectormap.min.js'; ?> "></script>
<script src="<?php echo BASE_URL . '/public/assets/libs/jsvectormap/maps/world-merc.js'; ?> "></script>

<!-- Dashboard init -->
<script src="<?php echo BASE_URL . '/public/assets/js/pages/dashboard-analytics.init.js'; ?> "></script>

<!-- App js -->
<script src="<?php echo BASE_URL . '/public/assets/js/app.js'; ?> "></script>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<!-- jQuery và Moment.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>

<!-- JavaScript Date Range Picker -->
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script>
  $(document).ready(function() {
      $('#date-range').daterangepicker({
          autoUpdateInput: false,
          locale: {
              format: 'YYYY-MM-DD',
              cancelLabel: 'Hủy',
              applyLabel: 'Áp dụng'
          }
      });

      $('#date-range').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
      });

      $('#date-range').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
      });
  });
</script>
