<?php
    $row = $db->get_row("SELECT * FROM tb_relasi WHERE ID='$_GET[ID]'"); 
?>
</br>
<div class="col-md-8 offset-md-2"> 
<div class="card border-primary">
  <div class="card-body">
    <blockquote class="card-blockquote">
	<div class="page-header">
		<h1>Ubah Relasi</h1>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php if($_POST) include'aksi.php'?>
			<form method="post" action="?m=relasi_ubah&ID=<?=$row->ID?>">
				<div class="form-group">
					<label>Diagnosa <span class="text-danger">*</span></label>
					<select class="form-control" name="kode_diagnosa">
						<option value=""></option>
						<?=get_diagnosa_option($row->kode_diagnosa)?>
					</select>
				</div>
				<div class="form-group">
					<label>Gejala <span class="text-danger">*</span></label>
					<select class="form-control" name="kode_gejala">
						<option value=""></option>
						<?=get_gejala_option($row->kode_gejala)?>
					</select>
				</div>
				<div class="form-group">
					<label>MB <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="mb" value="<?=$row->mb?>" />
				</div>
				<div class="form-group">
					<label>MD <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="md" value="<?=$row->md?>" />
				</div>
				<div class="form-group">
					<button class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan</button>
					<a class="btn btn-danger" href="?m=relasi"><span class="glyphicon glyphicon-arrow-left"></span> Kembali</a>
				</div>
			</form>
		</div>
	</div>
	</blockquote>
  </div>
</div>
</div>