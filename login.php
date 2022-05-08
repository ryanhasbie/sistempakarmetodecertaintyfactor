</br>
<div class="col-md-6 offset-md-3"> 
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    <h1><span class="oi oi-people"></span> Login</h1>
  </a>
  <a href="#" class="list-group-item">
    <div class="col-md-12">        
        <?php if($_POST) include 'aksi.php'; ?>
        <form class="form-signin" method="post">                        
            <div class="form-group">
                <label><span class="oi oi-person"></span> Username</label>
                <input type="text" class="form-control" placeholder="Username" name="user" autofocus />
            </div>
            <div class="form-group">            
                <label><span class="oi oi-key"></span> Password</label>
                <input type="password" class="form-control" placeholder="Password" name="pass" />  
            </div>      
            <button class="btn btn-primary btn-block" type="submit"><span class="oi oi-lock-unlocked"></span> Masuk</button>        
        </form>      
    </div>
  </a>
</div>
</div>