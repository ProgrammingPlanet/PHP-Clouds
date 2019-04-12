<?php 
	


	$credentials = 'login=xxxxxxxxxxxxxxx&key=xxxxxxxxx';

	$prefix = "https://api.openload.co/1";

	function curl($url)
	{ 
		$ch = curl_init();  // Initialize a CURL session. 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // Return Page contents. 
		curl_setopt($ch, CURLOPT_URL, $url); //grab URL and pass it to the variable. 
		$result = curl_exec($ch); //execute
		return $result;
	}


	$user_info_url = "$prefix/account/info?$credentials";		//user information

	$directory_struct = "$prefix/file/listfolder?$credentials&folder=7341523";//if folder parm not given than root dir

	/* Download file */
	$dwnld_ticket = "$prefix/file/dlticket?file=TycT-d_BNU4&$credentials";	//file=linkextid in above example

	$dwnld_link = "$prefix/file/dl?file=TycT-d_BNU4&ticket=TycT-d_BNU4~a6d38c40b5ee41b5~1555094106~def~y53IK2WQohNf3iDN~1~CCz9FQg0kA2FlwKw&captcha_response=ane9";	
												//ticket and captcha_response genrate in above step

	$file_status = "$prefix/file/info?file=TycT-d_BNU4&$credentials";	//check if file exist, where file=id1,id2,.. may be one or more

	/* Upload file */
	$upload = "$prefix/file/ul?$credentials&folder=7341523";	//this give a url where post reqest will be send with file,folder param is optional

	$remoteFile = "https://www.w3schools.com/w3images/avatar2.png";
	$remote_upload = "$prefix/remotedl/add?$credentials&url=$remoteFile&folder=7341523"; //folder is optional where to upload, this will return fileid for checking status of upload,172768573

	$remote_upld_status = "$prefix/remotedl/status?$credentials&limit=5&id=172768573";	//id is file id 

	$rename_folder = "$prefix/file/renamefolder?$credentials&folder=7341523&name=newname";	//rename a folder

	$rename_file = "$prefix/file/rename?$credentials&file=TycT-d_BNU4&name=GOT_Trailer_Season_8.mp4";

	$delete_file = "$prefix/file/delete?$credentials&file=F_sT71Ws47E";

	$convert_streamable = "$prefix/file/convert?$credentials&file=TycT-d_BNU4";	//convert video into mp4 / h.264 for streaming

	$covert_status = "$prefix/file/runningconverts?$credentials";	//folder={folder} is optional parameter

	$spalash_image = "$prefix/file/getsplash?$credentials&file=TycT-d_BNU4";

	$result = curl($spalash_image);

	//echo "<script>console.log(JSON.parse('$result'));</script>";

	//print_r($result);

	$result = json_decode($result,true);

	echo "<pre>";

	print_r($result); exit;




?>

