<!-- Datatables-->
        <script src="<?=base_url()?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.bootstrap.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/jszip.min.js"></script>
       
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/datatables/dataTables.scroller.min.js"></script>
						
		<!-- Datatable init js -->
        <script src="<?=base_url()?>/assets/pages/datatables.init.js"></script>

        
		<style>
		.dataTables_filter{
			float:right;
		}
		</style>
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
					title_berita=$(this).attr("title_berita");
					id_kompetisi=$(this).attr("id_kompetisi");
					var r = confirm("Hapus Berita : '"+title_berita+"' ?");
					if (r == true) {
						$.ajax({
						url: '<?php echo base_url(); ?>backend/hapus_kompetisi',
						type: 'POST',
						data: {
							id_kompetisi: id_kompetisi
						},
						success: function(data) {
							alert("Berita berhasil dihapus !");
							$("#row-"+id_kompetisi).slideUp("slow");
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
				$('body').on('click', '.hapus-button', function(){
					urlnya=$(this).attr("mylink");
					title_berita=$(this).attr("title_berita");
					id_pemain=$(this).attr("id_pemain");
					var r = confirm("Hapus Kategori : '"+title_berita+"' ?");
					if (r == true) {
						$.ajax({
						url: urlnya,
						type: 'POST',
						data: {
							id_pemain: id_pemain
						},
						success: function(data) {
							alert("Berita berhasil dihapus !");
							$("#row-"+id_pemain).slideUp("slow");
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
				$('body').on('click', '.button-trending', function(){
					title_berita=$(this).attr("title_berita");
					id_tren_berita=$(this).attr("id_tren_berita");
					tren_status=$(this).attr("status_to");
					btntren=$(this);
					var r = confirm("Hapus Berita : '"+title_berita+"' ?");
					if (r == true) {
						$.ajax({
						url: '<?php echo base_url(); ?>backend/change_trending',
						type: 'POST',
						data: {
							id_tren_berita: id_tren_berita,
							tren_status: tren_status
						},
						success: function(data) {
							
							if(tren_status=="1")
							{
								btntren.removeClass("btn-pink");
								btntren.addClass("btn-info");
								btntren.removeAttr("status_to");
								btntren.attr("status_to","0");
								btntren.empty().html("Batal Tren");
								alert("Berita berhasil menjadi Tren !");
							}
							else{
								btntren.removeClass("btn-info");
								btntren.addClass("btn-pink");
								btntren.removeAttr("status_to");
								btntren.attr("status_to","1");
								btntren.empty().html("Tren");
								alert("Berita berhasil batal Tren !");
							}
							
							//$("#row-"+id_tren_berita).slideUp("slow");
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
					  "order": [[ 1, "asc" ]],
					 keys: true
				 
				});
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