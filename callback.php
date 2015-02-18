<?php include('api/config.php');  ?>

<?php 	$error = $_REQUEST['error'];		
		if($error == 'access_denied')
		{ 
			?>
            <script>
				//window.opener.document.getElementById("singnin_spinner2").style.display = 'none';
				//window.opener.document.getElementById("singnin_spinnerFB").style.display = 'none';
				window.close();
            </script>
            <?php
			die();
		}

	$google_auth = googleAuth();
	$obj = new Gmail();
	$result = $obj->is_gmail_user($google_auth['me']);

	if($result['exist'] == 0 )
	{
		
	?>
    <script>
		/*window.opener.document.getElementById("signup").style.display = 'none';
		window.opener.document.getElementById("create-account").style.display = 'block';
		window.opener.document.getElementById("user_name_sign").value = '<?php if(isset($result['me']['name'])) echo $result['me']['name']['givenName'].' '.$result['me']['name']['familyName'];?>';
		window.opener.document.getElementById("user_email").value = '<?php if(isset($result['me']['emails'][0]['value'])) echo $result['me']['emails'][0]['value'];?>';
		window.opener.document.getElementById("gender").value = '<?php if(isset($result['me']['gender']))  echo $result['me']['gender'];?>';
		window.opener.document.getElementById("google_id").value = '<?php if(isset($result['me']['id'])) echo $result['me']['id'];?>';
		window.opener.document.getElementById("google_photo").value = '<?php if(isset($result['me']['image']['url'])) echo $result['me']['image']['url'];?>';
		window.opener.document.getElementById("singnin_spinner2").style.display = 'none';*/
	</script>

    <?php
	}
	else
	{
    	$obj = new Login();
    	//$rs = $obj->getGmailDetails($result['me']['id']);
		?>
		<script>

		window.opener.gmailLogin('<?php if(isset($result['me']['id'])) echo $result['me']['id'] ;?>','<?php echo $result['me']['emails'][0]['value'];?>');
		//window.opener.location.reload(false);
        
        </script>
        <?php
	}
	?>
    	<script>window.close();</script>