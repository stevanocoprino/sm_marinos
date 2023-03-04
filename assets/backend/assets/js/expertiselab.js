
$(document).ready(function() {
	$('#panel-detail').hide();
	$('#panel-list').hide();
		
	$('.btn-listrad').click(function() {
		norm = $(this).attr('data-norm');
		tlimit = $(this).attr('data-limit');
		$('#panel-list').show();
		$('.list_his').remove();
		$('.det_rad').remove();
		$('#panel-detail').hide();
		
		$.ajax({
			url: base_url + "Expertiselab/riwayatRadiologi",
			type: 'POST',
			dataType: 'json',
			data: {
				no_rm: norm,
				limit: tlimit,
				expertiselab: 1,
			},
			success: function(data){
				if (data[0] > 0) {
					$.each(data[1], function(i, obj) {
						var ele = '<tr class="list_his">\
							<td><a href="javascript:;" class="btn-detailrad text-info" data-nodaftar="'+obj.NO_PENDAFTARAN+'" ><u>'+obj.NO_PENDAFTARAN+'</u></a></td>\
							<td>'+obj.TGL_DAFTAR+'</td>\
							<td>'+obj.TGL_HASIL+'</td>\
							<td>'+obj.NM_PENERIMA+'</td>\
						</tr>';
						$('#tbl-riwayatrad tbody').append(ele);
					});
				}
			}
		});
	});
	
	$(document).on('click', '.btn-detailrad', function() {
		nodaftar = $(this).attr('data-nodaftar');
		$('#panel-detail').show();
		$('.det_rad').remove();
		
		$.ajax({
			url: base_url + "Expertiselab/riwayatRadiologi",
			type: 'POST',
			dataType: 'json',
			data: {
				no_pendaftaran: nodaftar,
				expertiselab: 0,
			},
			success: function(data){
				if (data[0] > 0) {
					var obj = data[1][0];
					var ele = '<tr class="det_rad">\
						<td>'+obj.NM_PENERIMA+'</td>\
						<td>'+obj.URAIAN+'</td>\
					</tr>';
					$('#tbl-detexpertise tbody').append(ele);
					
				}
			}
		});
	});
	
});
