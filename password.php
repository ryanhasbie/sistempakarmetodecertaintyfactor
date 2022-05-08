</br>
<div class="col-md-6 offset-md-3"> 
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    <h1><span class="oi oi-people"></span> Edit Password</h1>
  </a>
  <a href="#" class="list-group-item">
    <div class="col-md-12">        
        <?php if($_POST) include'aksi.php'?>
        <form method="post" action="?m=password&act=password_ubah">
        <div class="form-group">
            <label><span class="oi oi-key"></span> Password Lama <span class="text-danger">*</span></label>
            <input class="form-control" type="password" name="pass1"/>
        </div>
        <div class="form-group">
            <label><span class="oi oi-key"></span> Password Baru <span class="text-danger">*</span></label>
            <input class="form-control" type="password" name="pass2"/>
        </div>
        <div class="form-group">
            <label><span class="oi oi-key"></span> Konfirmasi Password Baru <span class="text-danger">*</span></label>
            <input class="form-control" type="password" name="pass3"/>
        </div>
        <button class="btn btn-primary"><span class="oi oi-task"></span> Simpan</button>
        </form>      
    </div>
  </a>
</div>
</div>