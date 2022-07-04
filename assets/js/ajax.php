<script type="text/javascript">
	var MyTable = $('#list-data').dataTable({
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});

	window.onload = function() {
		
		tampilPerangkat();
		tampilCust();
		<?php
		if ($this->session->flashdata('msg') != '') {
			echo "effect_msg();";
		}
		?>
	}

	function refresh() {
		MyTable = $('#list-data').dataTable();
	}

	function effect_msg_form() {
		// $('.form-msg').hide();
		$('.form-msg').show(1000);
		setTimeout(function() {
			$('.form-msg').fadeOut(1000);
		}, 3000);
	}

	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() {
			$('.msg').fadeOut(1000);
		}, 3000);
	}

	
	

	// Catatan
	function tampilCatatan() {
		$.get('<?php echo base_url('Home/tampilCatatan'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-catatan').html(data);
			refresh();
		});
	}

	var id_catat;
	$(document).on("click", ".konfirmasiHapus-Catatan", function() {
		id_catat = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-dataCatatan", function() {
		var id = id_catat;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('Catatan/delete'); ?>",
				data: "id=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapus').modal('hide');
				tampilKota();
				$('.msg').html(data);
				effect_msg();
			})
	})

	//Perangkat
	function tampilPerangkat() {
		$.get('<?php echo base_url('Perangkat/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-perangkat').html(data);
			refresh();
		});
	}

	var id_prg;
	$(document).on("click", ".konfirmasiHapus-Perangkat", function() {
		id_prg = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-dataPerangkat", function() {
		var id = id_prg;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('Perangkat/delete'); ?>",
				data: "id=" + id
			})
			.done(function(data) {
				$('#konfirmasiHapus').modal('hide');
				tampilKota();
				$('.msg').html(data);
				effect_msg();
			})
	})

	$(document).on("click", ".update-dataPerangkat", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('Perangkat/update'); ?>",
				data: "id=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#update-Perangkat').modal('show');
			})
	})

	$(document).on("click", ".detail-dataPerangkat", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('Perangkat/detail'); ?>",
				data: "id=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#tabel-detail').dataTable({
					"paging": true,
					"lengthChange": false,
					"searching": true,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
				$('#detail-perangkat').modal('show');
			})
	})

	$('#form-tambah-perangkat').submit(function(e) {
		var data = $(this).serialize();
		console.log(data);
		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('Perangkat/prosesTambah'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilPerangkat();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-tambah-perangkat").reset();
					$('#tambah-perangkat').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})

		e.preventDefault();
	});

	$(document).on('submit', '#form-update-perangkat', function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('Perangkat/prosesUpdate'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilKota();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-update-perangkat").reset();
					$('#detail-perangkat').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})

		e.preventDefault();
	});

	$('#tambah-perangkat').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})

	$('#update-perangkat').on('hidden.bs.modal', function() {
		$('.form-msg').html('');
	})

	// Customer
	function tampilCust() {
		$.get('<?php echo base_url('Cust/tampil'); ?>', function(data) {
			MyTable.fnDestroy();
			$('#data-custo').html(data);
			refresh();
		});
	}

	$(document).on("click", ".detail-dataCust", function() {
		var id = $(this).attr("data-id");

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('Cust/detail'); ?>",
				data: "id=" + id
			})
			.done(function(data) {
				$('#tempat-modal').html(data);
				$('#tabel-detail').dataTable({
					"paging": true,
					"lengthChange": false,
					"searching": true,
					"ordering": true,
					"info": true,
					"autoWidth": false
				});
				$('#detail-cust').modal('show');
			})
	})

	$(document).on('submit', '#form-update-cust', function(e) {
		var data = $(this).serialize();

		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('Cust/prosesUpdate'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilKota();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-update-cust").reset();
					$('#detail-cust').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})

		e.preventDefault();
	});

	$('#form-tambah-cust').submit(function(e) {
		var data = $(this).serialize();
		console.log(data);
		$.ajax({
				method: 'POST',
				url: '<?php echo base_url('Cust/prosesTambah'); ?>',
				data: data
			})
			.done(function(data) {
				var out = jQuery.parseJSON(data);

				tampilPerangkat();
				if (out.status == 'form') {
					$('.form-msg').html(out.msg);
					effect_msg_form();
				} else {
					document.getElementById("form-tambah-cust").reset();
					$('#tambah-cust').modal('hide');
					$('.msg').html(out.msg);
					effect_msg();
				}
			})

		e.preventDefault();
	});

	var id_cust;
	$(document).on("click", ".konfirmasiHapus-cust", function() {
		id_cust = $(this).attr("data-id");
	})

	$(document).on("click", ".hapus-dataCust", function() {
		var id = id_cust;

		$.ajax({
				method: "POST",
				url: "<?php echo base_url('Cust/delete'); ?>",
				data: "id=" + id
			})
			.done(function(data) {
				$('#konfirmasiCust').modal('hide');
				tampilKota();
				$('.msg').html(data);
				effect_msg();
			})
	})

	
</script>