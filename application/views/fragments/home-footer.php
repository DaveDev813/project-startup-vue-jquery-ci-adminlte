  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <br>
  </footer>

  <!-- Control Sidebar --> 
</div>

<!-- jQuery 3 -->
<script src="<?= base_url() ?>assets/admin-lte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/admin-lte/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>assets/admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?= base_url() ?>assets/admin-lte/bower_components/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>assets/admin-lte/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/admin-lte/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?= base_url() ?>assets/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url() ?>assets/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/admin-lte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?= base_url() ?>assets/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?= base_url() ?>assets/admin-lte/plugins/input-mask/jquery.inputmask.phone.extensions.js"></script>
<script src="<?= base_url() ?>assets/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js"></script>


<script src="<?= base_url() ?>assets/admin-lte/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/admin-lte/bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>assets/admin-lte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url() ?>assets/admin-lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url() ?>assets/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url() ?>assets/admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/admin-lte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/admin-lte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>assets/admin-lte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/admin-lte/dist/js/demo.js"></script>

<!-- TIME PICKER -->
<script src="<?= base_url() ?>assets/admin-lte/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SELECT 2 -->
<script src="<?= base_url() ?>assets/admin-lte/bower_components/select2/dist/js/select2.min.js"></script>
<!-- DATA TABLES -->
<script src="<?= base_url() ?>assets/admin-lte/bower_components/datatables.net/js/jquery.dataTables.min.js""></script>
<script src="<?= base_url() ?>assets/admin-lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js""></script>

<script type="text/javascript">
	
	$(document).ready(function(){

		$(":input[data-mask]").inputmask();	
		$(":input.datepicker").datepicker({
			format 	  : 'mm/dd/yyyy',
			autoclose : true
		});
		$(":input.daterange_picker").daterangepicker();
		$(":input.timepicker").timepicker({showInputs:false});

		$(".select2").select2();

		$(".table-default").DataTable({
			"columnDefs": [
    			{ "orderable": false, "targets": 0 }
  			],
			"bLengthChange" : false,
			"bPaginate" 	: true,
			"pageLength"    : 10,
		}).order([1,'desc']).draw();		

		$(".dataTables_filter").hide();

		$(".custom-search").on("keyup", function(event){
			$(".dataTables_filter").children("label").children(":input[type='search']").val($(this).val()).trigger("keyup");
		});
	});
</script>
</body>
</html>
