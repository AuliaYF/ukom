<form action="<?php echo base_url("bidang_studi") ?>" method="POST" role="form">
	<legend>Bidang Studi</legend>

	<div class="form-group">
		<label for="kode">Bidang Kode</label>
		<input type="text" name="kode" class="form-control" id="kode" placeholder="Bidang Kode" autocomplete="off">
	</div>
	<div class="form-group">
		<label for="nama">Bidang Nama</label>
		<input type="text" name="nama" class="form-control" id="nama" placeholder="Bidang Nama" autocomplete="off">
	</div>

	<button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" value="submit">Submit</button>
	<div class="clearfix"></div>
</form>