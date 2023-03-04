
        <script>
		$(function () {
			$(".main_menu_tags").change(function(){
				tags=$(this).val();
				$.ajax({
						url: '<?php echo base_url(); ?>backend/get_sub_menu',
						type: 'POST',
						data: {
							main_menu_tags: tags
						},
						success: function(data) {
							$(".sub_menu_tags").empty().html(data);
						}
				});
			})
			
			$('#tokenfield').tokenfield({
			  autocomplete: {
				source: [<?=$source_tags?>],
				delay: 200
			  },
			  showAutocompleteOnFocus: true
			})
			//$("#txtEditor").Editor();  
			$('.datepicker').datepicker();
			$('.datepicker').datepicker({
				format: 'yyyy-mm-dd',
				startDate: '-3d'
			});
		});
		$(document).ready(function(){
			$('.datepicker').datepicker();
			$('.datepicker').datepicker({
				format: 'yyyy-mm-dd',
				startDate: '-3d'
			});
			bkLib.onDomLoaded(function() { 
			new nicEditor({fullPanel : true}).panelInstance('area2');
			});
		})
          
        </script>
	