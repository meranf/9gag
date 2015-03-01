<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Tang Hero</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
</head>
<body>
<?php
require('api/config.php');
	$server='';
	$server_path = '';
	$required_width = '400';
	$required_height = '400';
	$image_name    = date("Ymdhis");
	
	 
	$server=WEBSITE_URL;
	$server_path= DOC_ROOT;

	$uploaddir1 = 'files/assets/';
	$required_width = '200';
	$required_height = '200';
		
	
	
	define('SIZE_WIDTH', 		$required_width);
	define('SIZE_HEIGHT', 		$required_height);
	
	if(isset($_FILES['imagepath']))
	{       
			$picture		= $_FILES['imagepath'];

			$picture_extension = Extension($picture["name"]);
			
				
				$tempImageName = substr($_FILES['imagepath']['name'],-3);
				$temp1FileName = $image_name.'.'.$tempImageName;
 				
 				$thumbfile 	   = $uploaddir1.$temp1FileName;
				$uploadfile1 = $uploaddir1 . basename($temp1FileName);
				move_uploaded_file($_FILES['imagepath']['tmp_name'], $uploadfile1);
			//	echo $uploadfile1;
				$imagepath = $temp1FileName;
				
				 $imagepath_full =  $server.'files/assets/'.$imagepath;
			     
				 echo '<script>window.parent.document.getElementById("pic_path").value="'.$imagepath_full.'";</script>';
				 echo '<script>window.parent.document.getElementById("upload-spinner").style.display="none";</script>';
 				   echo '<script>window.parent.document.getElementById("image_preview").src="'.$imagepath_full.'";</script>';
			   /*
				 echo '<script>window.parent.document.getElementById("upload_spinner").style.display="none";</script>';
				 echo '<script>window.parent.document.getElementById("success_msg").innerHTML="'.PHOTO_SUCESS.'";</script>';	*/			
			
			
		}
	else
	{
	}
		ShowForm();
?>
<?php
function ShowForm()
{
?>
<?php $show = '';//$_REQUEST['show'];
  ?>
<div style="display:inline;" id="form_div">
  <form name="upload_pic" id="upload_pic" method="post" action="" enctype="multipart/form-data">
    <input type="file"    size="20" name="imagepath" id="imagepath" onChange="CheckValue(this);" class="inputFile" style="float:left; margin-top:-5px;"  /> &nbsp; </span>
  </form>
</div>
<div id="img_div" style="display:none;">
  <div style="margin-top:0px;"> Please wait... </div>
</div>
<script language="javascript" type="text/javascript">
	function CheckValue(browse_pic)
	{
		if(browse_pic.value!='')
		{
			document.getElementById("upload_pic").submit();
			document.getElementById("form_div").style.display='none';
			document.getElementById("img_div").style.display='inline';
			window.parent.document.getElementById("upload-spinner").style.display='block';
		}
	}
	
	


</script>
<?php
}
//Set Extension
function Extension($file)
{
	$ext		= explode(".", $file);
	$extension	= count($ext)-1;
	return strtolower($ext[$extension]);
}
  
?>
</body>
</html>