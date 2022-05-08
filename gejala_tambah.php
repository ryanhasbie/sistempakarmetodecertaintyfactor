</br>
<div class="col-md-8 offset-md-2"> 
<div class="card border-primary">
  <div class="card-body">
    <blockquote class="card-blockquote">
	<div class="page-header">
		<h1>Tambah Gejala</h1>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php if($_POST) include'aksi.php'?>
			<form method="post" action="?m=gejala_tambah">
				<div class="form-group">
					<label>Kode <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="kode" value="<?=$_POST[kode]?>"/>
				</div>
				<div class="form-group">
					<label>Nama Gejala <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="nama" value="<?=$_POST[nama]?>"/>
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<input class="form-control" type="text" name="keterangan" value="<?=$_POST[keterangan]?>"/>
				</div>
				<div class="form-group">
					<button class="btn btn-primary"><span class="oi oi-task"></span> Simpan</button>
					<a class="btn btn-danger" href="?m=gejala"><span class="oi oi-chevron-left"></span> Kembali</a>
				</div>
			</form>
		</div>
	</div>
	</blockquote>
  </div>
</div>
</div>