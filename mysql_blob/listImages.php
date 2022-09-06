<?php
    require_once "db.php";
    $sql = "SELECT imageId FROM output_images ORDER BY imageId DESC"; 
    $result = mysqli_query($conn, $sql);
?>
<HTML>
<HEAD>
<TITLE>Lista BLOB Images</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
    <?php
        while($row = mysqli_fetch_array($result)) {
    ?>
    <div><img src="imageView.php?image_id=<?php echo $row["imageId"]; ?>" /><br/></div>
    <?php		
    }
        mysqli_close($conn);
    ?>
</BODY>
</HTML>