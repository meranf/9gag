<?php
/**********************************************************************************************************************************
	Description:
	This file contains all the functions related to User

**********************************************************************************************************************************/
	
	/*constants file including required php pages*/
	include_once("config.php");
  
/*********************************************************************************************************************************/
	// Calling Main Function
/*********************************************************************************************************************************/

	$returnVal 		= '';
	$action 		= $_REQUEST['action'];
	if (isset($_REQUEST['action']))
	{
		if ($action == 'updateUser')
		{

			if (isset($_REQUEST['email']) && isset($_REQUEST['name']) &&  isset($_REQUEST['gender']) && isset($_REQUEST['currentLocation']) && isset($_SESSION['s_user_id']) )
			{	
				$returnVal = UpdateUser($_REQUEST['email'],$_REQUEST['name'], $_REQUEST['gender'], $_REQUEST['currentLocation'], $_REQUEST['image_path'], $_REQUEST['birthday']  );
			}
			else
			{
				 
				$returnVal = array('status'	=> 'error','msg' => 'error: Paramater is null');
			}

		}
		else if ($action == 'getVideo')
		{
			if (isset($_REQUEST['id']))
			{		
				$returnVal = getVideo($_REQUEST['id']);
			}
			else
			{
				$returnVal = array('status'	=> 'error','msg' => 'error: Paramater is null');
			}
		}
		else if ($action == 'updateVideo')
		{
			if (isset($_REQUEST['id']) && isset($_REQUEST['type']))
			{		
				if($_REQUEST['type'] == 'like' || $_REQUEST['type'] == 'dislike' ){

					
					if ( isset($_SESSION['s_user_id']) && $_SESSION['s_user_id'] > 0) {
							
							$returnVal = updateVideo($_REQUEST['id'],$_REQUEST['type'],$_SESSION['s_user_id']);

					}else{

							$returnVal = array('status'	=> 'error','msg' => 'error: Paramater is null');
					}

				}else if($_REQUEST['type'] == 'view'  ){

						$returnVal = updateVideo($_REQUEST['id'],$_REQUEST['type']);
				}
				
			}
			else
			{
				$returnVal = array('status'	=> 'error','msg' => 'error: Paramater is null');
			}
		}
		else if ($action == 'getVideos')
		{
			if(isset($_REQUEST['start']))		
				$param['start'] 		= $_REQUEST['start'];
			else
				$param['start'] 		= '';

			if(isset($_REQUEST['noOfRecords']))		
				$param['noOfRecords'] 		= $_REQUEST['noOfRecords'];
			else
				$param['noOfRecords'] 		= '';

			if(isset($_REQUEST['OrderBy']))		
				$param['OrderBy'] 		= $_REQUEST['OrderBy'];
			else
				$param['OrderBy'] 		= '';

			if(isset($_REQUEST['SortBy']))		
				$param['SortBy'] 		= $_REQUEST['SortBy'];
			else
				$param['SortBy'] 		= '';

			if(isset($_REQUEST['cat_id']))		
				$param['cat_id'] 		= $_REQUEST['cat_id'];
			else
				$param['cat_id'] 		= '';

			if(isset($_REQUEST['genre']))		
				$param['genre'] 		= $_REQUEST['genre'];
			else
				$param['genre'] 		= '';

 			
			if($param['SortBy'] == "")
			{
				$param['SortBy']	= "id";
			}
			if($param['OrderBy'] == "")
			{
				$param['OrderBy']	= "DESC";
			}
			if($param['noOfRecords'] == "")
			{
				$param['noOfRecords']	= 20;
			}
			if($param['start'] == "")
			{
				$param['start']	= 0;
			}
					
			$returnVal = getVideos($param);
		}
		else if ($action == 'GetRankings')
		{
			if(isset($_REQUEST['start']))		
				$param['start'] 		= $_REQUEST['start'];
			else
				$param['start'] 		= '';

			if(isset($_REQUEST['noOfRecords']))		
				$param['noOfRecords'] 		= $_REQUEST['noOfRecords'];
			else
				$param['noOfRecords'] 		= '';

			if(isset($_REQUEST['OrderBy']))		
				$param['OrderBy'] 		= $_REQUEST['OrderBy'];
			else
				$param['OrderBy'] 		= '';

			if(isset($_REQUEST['SortBy']))		
				$param['SortBy'] 		= $_REQUEST['SortBy'];
			else
				$param['SortBy'] 		= '';

			if(isset($_REQUEST['keyword']))		
				$param['keyword'] 		= $_REQUEST['keyword'];
			else
				$param['keyword'] 		= '';

			if(isset($_REQUEST['genre']))		
				$param['genre'] 		= $_REQUEST['genre'];
			else
				$param['genre'] 		= '';

 			
			if($param['SortBy'] == "")
			{
				$param['SortBy']	= "id";
			}
			if($param['OrderBy'] == "")
			{
				$param['OrderBy']	= "DESC";
			}
			if($param['noOfRecords'] == "")
			{
				$param['noOfRecords']	= 20;
			}
			if($param['start'] == "")
			{
				$param['start']	= 0;
			}

			
					
			$returnVal = GetRankings($param);
		}
		
		
		else $returnVal = array('status'	=> 'error','msg' => 'error: Paramater is null');
	}
	else
	{
		$returnVal = array('status'	=> 'error','msg' => 'error: Paramater is null');
	}
	
	$json = json_encode($returnVal);
	echo $json;
	
?>