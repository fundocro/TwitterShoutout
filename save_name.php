<?php 

$phptname = $_GET['inp1'];
$phptmessage = $_GET['tt'];

if((strlen($phptname)>4)&&$phptmessage != ""){
	
	//echo strlen($phptname)."<br />";
	$dbc=mysqli_connect("localhost","root","") or die('Problem with connection');
	mysqli_select_db($dbc,'a9747047_db1');
	
	$query2=mysqli_query($dbc,"SELECT * FROM shoutoutusers WHERE TwitterName='".$phptname."'");
	$query3=mysqli_query($dbc,"SELECT * FROM shoutoutusers ");
	
	$numrows=mysqli_num_rows($query2);
	
	if($numrows != 0){
		
		while($row=mysqli_fetch_assoc($query2)){
			$dbname=$row['TwitterName'];	
		}
		
		if($phptname==$dbname){
			echo "Welcome again ". $dbname.'<br />'." We want more shoutouts from you...";	
			echo "".'<br />';
			echo "Your message has been successfully sent!".'<br />';	
			//$query=mysqli_query($dbc,"INSERT INTO shoutoutusers (Tweet,Date) VALUES('$phptmessage',NOW()) WHERE TwitterName='".$dbname."'");
			//mysqli_query($dbc,"UPDATE shoutoutusers SET Tweet='".$phptmessage."' , Date=NOW() WHERE TwitterName='".$dbname."'");
			mysqli_query($dbc,"INSERT INTO shoutoutusers (TwitterName,Tweet,Date) VALUES('$phptname','$phptmessage',NOW())");
		}
		
	}else{// if the name entered and name in db dont match:
		mysqli_query($dbc,"INSERT INTO shoutoutusers (TwitterName,Tweet,Date) VALUES('$phptname','$phptmessage',NOW())");
		echo "Welcome ".$phptname."<br />";
		echo "Your message has been successfully saved!".'<br />';
		echo "".'<br />';	
	}
}else{
	echo 'Please Enter Your Twitter Name and your shoutout message'.'<br />';
	echo 'Make sure your name have more then 3 characters';
}
?>