<!DOCTYPE html>
<html>
<head>
	<title>Demo Upload Image using Ajax on Codeigniter</title>
	<style type="text/css">
		.container {
			padding: 10px;
		}

		.error {
			color: red;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Demo Upload Image using Ajax on Codeigniter</h1>
		<p>
			<form id="form-upload" method="POST" action="<?php echo site_url('upload_image_ajax/do_upload');?>">
				<input type="file" name="image" /> 
				<br />
				<br />
				<button type="submit">submit</button>
			</form>
		</p>
		<p class="error">
			
		</p>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
		$(document).ready(function(){

			$('#form-upload').submit(function(e) {
				e.preventDefault();
				var formData = new FormData($(this)[0]);
				//reset error messsage
				$('.error').html('');

				$.ajax({
					url: $(this).attr("action"),
					type: 'POST',
					dataType: 'json',
					data: formData,
					async: true,
					success: function(response) {
						if(response.status) {
							var SITE_URL = '<?php echo site_url('');?>';
							window.location =  SITE_URL + 'upload_image_ajax/view/' + response.id;
						} else {						
							$('.error').html(response.error);
						}
					},
					cache: false,
					contentType: false,
					processData: false
				});
			});
		});
	</script>
</body>
</html>