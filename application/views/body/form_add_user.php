			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">User</li>
			</ol>
		</div><!--/.row-->
		
	<br>
			
			<script type="text/javascript">
			var Password = {
 
  _pattern : /[a-zA-Z0-9]/,
  
  
  _getRandomByte : function()
  {
    // http://caniuse.com/#feat=getrandomvalues
    if(window.crypto && window.crypto.getRandomValues) 
    {
      var result = new Uint8Array(1);
      window.crypto.getRandomValues(result);
      return result[0];
    }
    else if(window.msCrypto && window.msCrypto.getRandomValues) 
    {
      var result = new Uint8Array(1);
      window.msCrypto.getRandomValues(result);
      return result[0];
    }
    else
    {
      return Math.floor(Math.random() * 256);
    }
  },
  
  generate : function(length)
  {
    return Array.apply(null, {'length': length})
      .map(function()
      {
        var result;
        while(true) 
        {
          result = String.fromCharCode(this._getRandomByte());
          if(this._pattern.test(result))
          {
            return result;
          }
        }        
      }, this)
      .join('');  
  }    
    
};
			</script>
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>

<a href="#" style="text-decoration:none">Tambah User</a></div>
					<div class="panel-body">
						
					<div class="col-md-6">
					<form action="<?php echo base_url();?><?php echo $url;?>" method="POST">

					<input type="hidden" class="form-control" name="id_user" value="<?php echo $id_user;?>">

			<!-- 		<?php if($flag=="edit")
					{}else{?>
					<div class="form-group">
						<label>Username</label>
						<?php echo form_dropdown('id_karyawan',$dd_karyawan, $id_karyawan, ' id="id_karyawan" required class="form-control"');?>
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" value="<?php echo $email;?>">
					</div>
					<?php }?> -->

						<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $username;?>" id="username" autofocus="" autocomplete="off">
					</div>
						<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" placeholder="Name" name="nama" value="<?php echo $name;?>" id="name" autocomplete="off">
					</div>

					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" value="<?php echo $email;?>">
					</div>

					<div class="form-group"> 
						<label for="">Password</label>
						<input id="password" type="text" class="form-control" placeholder="**********" name="password" value="<?php echo $password;?>" autocomplete="off">
						<a class="btn btn-info" onclick='document.getElementById("password").value = Password.generate(16)' >Generate Password</a>
					</div>
					<div class="form-group">
						<label>Department</label>
						<?php echo form_dropdown('id_departemen',$dd_departemen, $id_departemen, ' id="id_departemen" name="nama_dept" required class="form-control"');?>
						
					</div>

					<div class="form-group">
						<label for="">Level</label>
						<?php echo form_dropdown('id_level',$dd_level, $id_level, ' id="id_level" name="id_level"  required class="form-control"');?>
					</div>

					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="<?php echo base_url();?>user/user_list"  class="btn btn-default">Batal</a>
				    </div>

				     </form>


					</div>
				</div>
			</div>
		</div><!--/.row-->	



		
		
