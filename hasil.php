<div class="page-header">
    <h1>Hasil Diagnosa</h1>
</div>
<?php
$gejala = (array) $_POST[gejala];

$rows = $db->get_results("SELECT * FROM tb_gejala WHERE kode_gejala IN ('".implode("','", $gejala)."')");
?>
<div class="panel panel-default">
    <div class="panel-heading">        
        <h3 class="panel-title">Gejala Terpilih</h3>
    </div>
    <table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Gejala</th>
            <th>Nama Gejala</th>
        </tr>
    </thead>
    <?php
    $no=1;
    foreach($rows as $row):?>
    <tr>
        <td><?=$no++?></td>
        <td><?=$row->kode_gejala?></td>
        <td><?=$row->nama_gejala?></td>
    </tr>
    <?php endforeach;
    ?>
    </table>
</div>
<?php
$rows = $db->get_results("SELECT * 
    FROM tb_relasi r INNER JOIN tb_diagnosa d ON d.kode_diagnosa = r.kode_diagnosa      
    WHERE r.kode_gejala IN ('".implode("','", $gejala)."') ORDER BY r.kode_diagnosa, r.kode_gejala");

foreach($rows as $row){
    $diagnosa[$row->kode_diagnosa][mb] = $diagnosa[$row->kode_diagnosa][mb] + $row->mb * (1 - $diagnosa[$row->kode_diagnosa][mb]);
    $diagnosa[$row->kode_diagnosa][md] = $diagnosa[$row->kode_diagnosa][md] + $row->md * (1 - $diagnosa[$row->kode_diagnosa][md]);
    
    $diagnosa[$row->kode_diagnosa][cf] = $diagnosa[$row->kode_diagnosa][mb] -  $diagnosa[$row->kode_diagnosa][md]; 
    
    $diagnosa[$row->kode_diagnosa][nama_diagnosa] = $row->nama_diagnosa;
    $diagnosa[$row->kode_diagnosa][kode_diagnosa] = $row->kode_diagnosa;
    $diagnosa[$row->kode_diagnosa][solusi] = $row->keterangan;
}
?>
<div class="panel panel-default">
    <div class="panel-heading">        
        <h3 class="panel-title">Hasil Analisa</h3>
    </div>
    <table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Diagnosa</th>
            <th>Nilai Certainty Factor</th>
        </tr>
    </thead>
    <?php
    $no=1;
    function ranking($array){
        $new_arr = array();
        foreach($array as $key => $value) {
            $new_arr[$key] = $value[cf];
        }
        arsort($new_arr);
        
        $result = array();    
        foreach($new_arr as $key => $value){
            $result[$key] = ++$no;
        }    
        return $result;
    }    
    
    $rank = ranking($diagnosa);
   
    foreach($rank as $key => $value):?>
    <tr class="<?=($value==1) ? 'text-primary' : ''?>">
        <td><?=$no++?></td>
        <td><?=$diagnosa[$key][nama_diagnosa]?></td>
        <td><?=$diagnosa[$key][cf]?></td>
    </tr>
    <?php endforeach;
    reset($rank);
    $_SESSION[gejala] = $gejala;
    ?>
    </table>
    <div class="panel-body">
        <table class="table table-bordered">
            <tr>
                <td>Diagnosa</td>
                <td><?=$diagnosa[key($rank)][nama_diagnosa]?></td>
            </tr>
            <tr>
                <td>Solusi</td>
                <td><?=$diagnosa[key($rank)][solusi]?></td>
            </tr>
        </table>
        <a class="btn btn-primary" href="?m=konsultasi"><span class="glyphicon glyphicon-refresh"></span> Ulang</a>
        <a class="btn btn-default" href="cetak.php?m=konsultasi" target="_blank"><span class="glyphicon glyphicon-print"></span> Cetak</a>
    </div>
</div>