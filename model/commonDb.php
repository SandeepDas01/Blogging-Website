<?php

function contactDB()
 {
	 
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
	$subject=$_REQUEST['subject'];
	$massege=$_REQUEST['message'];
	
	 $sql='INSERT INTO contactquery (`name`,`email`,`phone`,`subject`,`massege`,status) 
			VALUES("'.$name.'","'.$email.'","'.$phone.'","'.$subject.'","'.$massege.'",1)';
	
	 query($sql);
	 
	 //echo $sql;
 }


function submitarticleDB()
{
	
	
	$fristname=$_REQUEST['fristname'];
	$middlename=$_REQUEST['middlename'];
	$lastname=$_REQUEST['lastname'];
	$email=$_REQUEST['email'];
	$number=$_REQUEST['number'];
	$abstract=$_REQUEST['abstract'];
	$title=$_REQUEST['title'];
    $authors=$_REQUEST['authors'];
	$des2="";
	
	if($_FILES['file']['name']!='')
	{
	  	$random=rand(0,999999);
		$des2="assets/uploads/submitarticle/".$random.'_'.$_FILES['file']['name'];
		$res1=$_FILES['file']['tmp_name'];
		move_uploaded_file($res1,$des2);
		 
	}

	 $sql='INSERT INTO submitarticle (`fristname`,`middlename`,`lastname`,`email`,`number`,`abstract`,`title`,`authors`,`file`,status) 
			VALUES("'.$fristname.'","'.$middlename.'","'.$lastname.'","'.$email.'","'.$number.'","'.$abstract.'","'.$title.'","'.$authors.'","'.$des2.'",1)';
				
	query($sql);
	
	//echo $sql;
}


?>
