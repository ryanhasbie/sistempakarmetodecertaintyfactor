<div class="page-header">
    <h1>Gejala</h1>
</div>
<div class="panel panel-default">
    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="gejala" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>" />
            </div>
            <div class="form-group">
                <button class="btn btn-success"><span class="oi oi-reload"></span> Refresh</a>
            </div>
            <div class="form-group">
                <a class="btn btn-primary" href="?m=gejala_tambah"><span class="oi oi-pencil"></span> Tambah</a>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
        <thead class="table-info">
            <tr>
                <th>Kode</th>
                <th>Nama Gejala</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <?php
        $q = esc_field($_GET['q']);
        $rows = $db->get_results("SELECT * FROM tb_gejala 
        WHERE kode_gejala LIKE '%$q%' OR nama_gejala LIKE '%$q%' OR keterangan LIKE '%$q%' 
        ORDER BY kode_gejala");        
        foreach($rows as $row):?>
        <tr>
            <td><?=$row->kode_gejala ?></td>
            <td><?=$row->nama_gejala?></td>
            <td><?=$row->keterangan?></td>
            <td class="nw">
                <a class="btn btn-xs btn-warning" href="?m=gejala_ubah&ID=<?=$row->kode_gejala?>"><span class="oi oi-clipboard"></span></a>
                <a class="btn btn-xs btn-danger" href="aksi.php?act=gejala_hapus&ID=<?=$row->kode_gejala?>" onclick="return confirm('Hapus data?')"><span class="oi oi-trash"></span></a>
            </td>
        </tr>
        <?php endforeach;?>
        </table>
    </div>
</div>