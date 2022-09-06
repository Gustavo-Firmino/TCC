<?php
	require_once "db.php";
	if(count($_FILES) > 0) {
	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
		$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
		$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
		
		$sql = "INSERT INTO output_images(imageType ,imageData)
		VALUES('{$imageProperties['mime']}', '{$imgData}')";
		$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
		if(isset($current_id)) {
			header("Location: listImages.php");
		}
	}
}
?>
<HTML>
	<HEAD>
	<TITLE>Upload Image to MySQL BLOB</TITLE>
	<link href="imageStyles.css" rel="stylesheet" type="text/css" />
	</HEAD>
	<BODY>
		<div>
			<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
				<label>Upload Image File:</label><br/>
				<input name="userImage" type="file" class="inputFile" />
				<input type="submit" value="Submit" class="btnSubmit" />
				<br> <b>PS.Imagens em MB são grandes demais para serem inseridas</b> 
			</form>
		<br>
			<a href="listImages.php">VER  IMAGENS NO BANCO</a>
		</div>
	</BODY>
</HTML>