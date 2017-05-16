<?php include ROOT . '/views/layouts/header.php'; ?>

<?php if ($resp != null && $resp->success) {
	echo "You got it!";
}
?>
<div class="container">
	<?php if ($result) :?>
		<div class="accept">
			<p>Данные были добавлены</p>
		</div>
	<?php else : ?>
	  <?php if (isset($errors) && is_array($errors)) :?>
		<div class="fail">
			<ul class="error">
				<?php foreach($errors as $error) :?>
				<li> - <?php echo $error;?></li>
			  <?php endforeach;?>
			</ul>
			<?php endif;?>
		</div>
	 <div id="html_element" class="form-contact">
 		<form action="#" method="post" enctype="multipart/form-data">
 	    	<input type="text" name="name" required placeholder="User Name" value=""/>
    		<input type="email" name="email"  required placeholder="E-mail" value=""/>
    		<input type="text" name="homepage" placeholder="Homepage" value=""/>
    		<center><textarea name="text" rows="10" cols="50" required placeholder="Text"></textarea></center>
    		<div class="g-recaptcha" data-sitekey="<?php echo $siteKey;?>"></div>
			<input type="file" name="image" id="file" onChange="readURL(this); value="Обзор">
			<div class="row">
				<span id="output"></span>
			</div>
			<script type="text/javascript"
					src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang;?>">
			</script>
    		<input type="submit" name="submit" class="btn btn-default" value="Send" />
    	</form>
    </div>
	<?php endif;?>

	<script>
		function handleFileSelectSingle(evt) {
			var file = evt.target.files; // FileList object

			var f = file[0]

			// Only process image files.
			if (!f.type.match('image.*')) {
				alert("Только изображения....");
			}

			var reader = new FileReader();

			// Closure to capture the file information.
			reader.onload = (function(theFile) {
				return function(e) {
					// Render thumbnail.
					var span = document.createElement('span');
					span.innerHTML = ['<img class="img-thumbnail" src="', e.target.result,
						'" title="', escape(theFile.name), '"/>'].join('');
					document.getElementById('output').innerHTML = "";
					document.getElementById('output').insertBefore(span, null);
				};
			})(f);

			// Read in the image file as a data URL.
			reader.readAsDataURL(f);
		}


		document.getElementById('file').addEventListener('change', handleFileSelectSingle, false);

		function handleFileSelectMulti(evt) {
			var files = evt.target.files; // FileList object
			document.getElementById('outputMulti').innerHTML = "";
			for (var i = 0, f; f = files[i]; i++) {

				// Only process image files.
				if (!f.type.match('image.*')) {
					alert("Только изображения....");
				}

				var reader = new FileReader();

				// Closure to capture the file information.
				reader.onload = (function(theFile) {
					return function(e) {
						// Render thumbnail.
						var span = document.createElement('span');
						span.innerHTML = ['<img class="img-thumbnail" src="', e.target.result,
							'" title="', escape(theFile.name), '"/>'].join('');
						document.getElementById('outputMulti').insertBefore(span, null);
					};
				})(f);

				// Read in the image file as a data URL.
				reader.readAsDataURL(f);
			}
		}


		document.getElementById('fileMulti').addEventListener('change', handleFileSelectMulti, false);

	</script>

</div>



<?php include ROOT . '/views/layouts/footer.php'; ?>