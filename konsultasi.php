<div class="page-header">
    <h1>Konsultasi</h1>
</div>
<form action="?m=hasil" method="post">
    <input type="hidden" name="m" value="hasil" />
    <div class="panel panel-default">
        <div class="panel-heading">        
            <h3 class="panel-title">Pilih Gejala</h3>
        </div>
        <table class="table table-bordered table-hover table-striped">
        <thead class="table-info">
            <tr>
                <th><input type="checkbox" id="checkAll" class="ml-4" /></th>
                <th>No</th>
                <th>Kode Gejala</th>
                <th>Nama Gejala</th>
            </tr>
        </thead>
        <?php
        $q = esc_field($_GET['q']);
        $rows = $db->get_results("SELECT * FROM tb_gejala 
        WHERE kode_gejala LIKE '%$q%' OR nama_gejala LIKE '%$q%' OR keterangan LIKE '%$q%' 
        ORDER BY kode_gejala");
        $no=1;
        foreach($rows as $row):?>
		<tbody>
        <tr>
            <td><input type="checkbox" name="gejala[]" value="<?=$row->kode_gejala?>" class="ml-4" /></td>
            <td><?=$no++?></td>
            <td><?=$row->kode_gejala?></td>
            <td><?=$row->nama_gejala?></td>
        </tr>
        <?php endforeach;
        ?>
		<tbody>
        </table>
        <div class="panel-footer">
            <button class="btn btn-primary"><span class="oi oi-check"></span> Submit Diagnosa</button>
        </div>
    </div></br></br>
</form>
<script>
$(function(){
    $("#checkAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
});
</script>