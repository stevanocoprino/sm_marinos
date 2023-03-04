<!-- Datatables-->
        <script src="<?=base_url()?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.scroller.min.js"></script>
						
		<!-- Datatable init js -->
        <script src="<?=base_url()?>/assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="<?=base_url()?>/assets/js/jquery.core.js"></script>
        <script src="<?=base_url()?>/assets/js/jquery.app.js"></script>

        <script>
		
			$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
	 
				
            $(document).ready(function() {
				$('body').on('click', '.button-detail-pasien', function(){
					noreg=$(this).attr("noreg");
					$.ajax({
						url: '<?php echo base_url(); ?>irj/detail_pasien',
						type: 'POST',
						data: {
							noreg: noreg
						},
						success: function(data) {
							$(".detail-pasien-body").empty().html(data);
						}
					});
				});
				$('body').on('click', '.batal-daftar-button', function(){
					noreg=$(this).attr("noreg");
					var r = confirm("Batalkan pendaftaran No Registrasi "+noreg+" ?");
					if (r == true) {
						$.ajax({
						url: '<?php echo base_url(); ?>irj/batal_daftar2',
						type: 'POST',
						data: {
							no_reg: noreg
						},
						success: function(data) {
							alert("Pendaftaran berhasil di batalkan !");
							$("#row-"+noreg).slideUp("slow");
						}
					});
					} 
					else 
					{
					alert("Batal !");
					   e.preventDefault();
					 return false;
					}
					
				});
				$('.datatable').DataTable({
					 "bAutoWidth": false,
					  "order": [[ 6, "desc" ]],
					 keys: true,
  "columns": [
    { "width": "12%" },
    { "width": "10%" },
    { "width": "13%" },
    { "width": "19%" },
    { "width": "9%" },
    { "width": "10%" },
    { "width": "12%" },
    { "width": "15%" }
  ]
} );
						 $('.datatable thead td').each( function () {
							var title = $(this).text();
							$(this).html( '<input type="text" class="form-control" style="width:95% !important" placeholder="'+title+'" />' );
						} );
					 
						// DataTable
						var table = $('.datatable').DataTable();
					 
						// Apply the search
						$(".datatable thead input").on( 'keyup change', function () {
        table
            .column( $(this).parent().index()+':visible' )
            .search( this.value )
            .draw();
});
						/*
						table.columns().every( function () {
							var that = this;
					 
							$( 'input', this.footer() ).on( 'keyup change', function () {
								if ( that.search() !== this.value ) {
									that
										.search( this.value )
										.draw();
								}
							} );
						} );*/
		   } );
           // TableManageButtons.init();
			
        </script>