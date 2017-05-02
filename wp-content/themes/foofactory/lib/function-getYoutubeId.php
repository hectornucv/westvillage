<?php
function getYtCode($data){
	$params= (1<sizeof($data)) ? "?" : "";
	if(!empty($data["youtube"])){
			foreach ($data as $key => $value) {
				if ("youtube"==$key){
					$videoid = $value;
					$videoid = explode('/embed/',htmlentities($videoid))[1];
					$videoid = explode('?',$videoid)[0].$params;
				}else{
					$videoid .=$key."=".$value."&";
				}
			
		}
		return $videoid;
	}else{
		return "Must include something in 'youtube' parameter";
	}


}				   
 ?>