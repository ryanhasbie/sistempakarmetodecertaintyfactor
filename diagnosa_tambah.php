</br>
<div class="col-md-8 offset-md-2"> 
<div class="card border-primary">
  <div class="card-body">
    <blockquote class="card-blockquote">
	<div class="page-header">
		<h1>Tambah Diagnosa</h1>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php if($_POST) include'aksi.php'?>
			<form method="post" action="?m=diagnosa_tambah">
				<div class="form-group">
					<label>Kode <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="kode" value="<?=$_POST[kode]?>"/>
				</div>
				<div class="form-group">
					<label>Nama Diagnosa <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="nama" value="<?=$_POST[nama]?>"/>
				</div><div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" name="keterangan"><?=$_POST[keterangan]?></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary"><span class="oi oi-task"></span> Simpan</button>
					<a class="btn btn-danger" href="?m=diagnosa"><span class="oi oi-chevron-left"></span> Kembali</a>
				</div>
			</form>
		</div>
	</div>
	</blockquote>
  </div>
</div>
</div>