<?php
    $row = $db->get_row("SELECT * FROM tb_diagnosa WHERE kode_diagnosa='$_GET[ID]'"); 
?>
</br>
<div class="col-md-8 offset-md-2"> 
<div class="card border-primary">
  <div class="card-body">
    <blockquote class="card-blockquote">
	<div class="page-header">
		<h1>Ubah Diagnosa</h1>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<?php if($_POST) include'aksi.php'?>
			<form method="post" action="?m=diagnosa_ubah&ID=<?=$row->kode_diagnosa?>">
				<div class="form-group">
					<label>Kode <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="kode" readonly="readonly" value="<?=$row->kode_diagnosa?>"/>
				</div>
				<div class="form-group">
					<label>Nama Alternatif <span class="text-danger">*</span></label>
					<input class="form-control" type="text" name="nama" value="<?=$row->nama_diagnosa?>"/>
				</div>
				<div class="form-group">
					<label>Keterangan</label>
					<textarea class="form-control" name="keterangan"><?=$row->keterangan?></textarea>
				</div>
				<div class="page-header">
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