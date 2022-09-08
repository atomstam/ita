		<?php if($segments[1]=='admin' and ($segments[2] !='' or isset($segments[2])) ): echo "</div>"; endif;?>
		</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo lang('Constant.webHome');?>"><?php echo lang('Constant.webTitle_full');?> : <?php echo lang('Constant.webVersion');?>
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2022, made with <i class="fa fa-heart heart text-danger"></i> by <a href="<?php echo lang('Constant.webHome');?>">Atomy</a>
					</div>				
				</div>
			</footer>

	</div>

	<!-- jQuery Scrollbar -->
	<script src="<?= base_url(); ?>/dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="<?= base_url(); ?>/dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?= base_url(); ?>/dash/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url(); ?>/dash/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="<?= base_url(); ?>/dash/js/plugin/sweetalert/sweetalert.min.js"></script>
	
	<!-- Datatables -->
	<script src="<?= base_url() ?>/dash/js/plugin/datatables/datatables.min.js"></script>
    <!--<script src="<?=base_url(); ?>/plugins/datatable/datatables.min.js" type="text/javascript"></script>-->
	<script src="<?=base_url(); ?>/plugins/datatable/dataTables.responsive.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/responsive.bootstrap5.min.js" type="text/javascript"></script>
	<!--<script src="<?=base_url(); ?>/plugins/datatable/js/buttons.bootstrap5.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/js/buttons.colVis.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/js/buttons.html5.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/js/buttons.print.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/js/dataTables.bootstrap.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/js/dataTables.bootstrap5.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/js/dataTables.buttons.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/js/dataTables.rowGroup.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>/plugins/datatable/js/jszip.min.js" type="text/javascript"></script>-->
	<!-- pdf thai -->
	<script src="<?=base_url()?>/plugins/datatable/pdfmake/pdfmake.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>/plugins/datatable/pdfmake/vfs_fonts.js" type="text/javascript"></script>

	<!-- Atlantis JS -->
	<script src="<?= base_url(); ?>/dash/js/atlantis.min.js"></script>

</body>
</html>