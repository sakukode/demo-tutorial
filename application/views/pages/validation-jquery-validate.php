<!DOCTYPE html>
<html>
<head>
	<title>Validation Form using Jquery Validate</title>
	<style type="text/css">
		body {
			margin-top: 50px;
			margin-left: 30px;
		}
	</style>
</head>
<body>

<form id="form" action="<?php echo site_url('validation/save');?>">
	<p>
		Nama : <br />
		<input type="text" name="nama" />
	</p>
	<p>
		Email : <br />
		<input type="email" name="email" />
	</p>
	<p>
		Url : <br />
		<input type="url" name="url" />
	</p>
	<p>
		Pesan : <br />
		<textarea name="pesan" rows="4"></textarea>
	</p>
	<p>
		<button type="submit">Kirim</button>
	</p>
</form>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
<script src="<?php echo base_url('js/jquery.validate.js');?>"></script>
<script src="<?php echo base_url('js/additional-methods.js');?>"></script>
<script>
	$(document).ready(function() {
		//memanggil method validate dengan selector id form (form id = "form")
		$('#form').validate({
			//mendefinisikan aturan validasi
			/*
			 * required : tidak boleh kosong
			 * email : harus berupa alamat email yang benar/valid (ex: demo@gmail.com, demo@yahoo.com)
			 * url : harus berupa alamat url yang benar/valid (ex: http://google.com, http://facebook.com)
			 * minlength : karakter tidak boleh kurang dari digit yang sudah ditentukan
			 */
			rules: {
	            nama: {
	                required: true 
	            },
	            email: {
	            	email: true,
	                required: true
	            },
	            url: {
	            	url: true,	                
	            },            
	            pesan: {	            	
	            	minlength: 8
	            }
	        },
	        // mengcustom pesan error validasi yang akan ditampilkan
	        messages: {
	        	nama: {
	                required: 'Nama harap diisi',
	            },
	            email: {
	                required: 'Email harap diisi',
	                email: 'Email harus valid'
	            },
	            url: {	            
	            	url: 'Url harus menggunakan alamat yang valid'
	            },
	            pesan: {
	            	minlength: 'Pesan minimal harus 8 karakter'
	            }
	        },        
	        // Jika validasi berhasil atau sudah tidak error, maka script pada blok ini akan dieksekusi
	        submitHandler: function(form) {	           	  
	        	// memanggil method pada controller dengan ajax    
	            $.ajax({
	              url: $(form).attr("action"), //diambil dari action form
	              type: 'POST',	              
	              data: {},	              	           
	              //jika request ajax berhasil
	              success: function (response) {
	              	  var data = JSON.parse(response);	              	  
	                  if(data.status === true) {
	                  	//mereset form
	                    $('#form input,textarea').val('');
	                    //menampilkan pesan sukses yang didapat melalui request ajax ke server
	                    alert(data.message);

	                  } else {	          
	                    alert('Gagal mengirim data');
	                  }
	              },
	              //jika request ajax gagal
	              error: function() {
	                alert('Terjadi Kesalahan')
	              },	              
	            });
	        }
		});
	});
</script>
</body>
</html>