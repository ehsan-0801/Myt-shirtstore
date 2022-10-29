<?php
header("Access-Control-Allow-Origin: *");
session_start();

error_reporting(0);
$showmenu = true;
$uid = 0;

$db_user = 'root';
$db_password = '';
$db_name = 'myt_shirtstore';

// $db_user = 'demoapps_scanning';
// $db_password = 'q1w2e3r4t5';
// $db_name = 'demoapps_scanning';


function go2($l)
{
    echo '<script>window.location = "'.$l.'"; </script>';
    exit();
}

function unset_input()
{
	unset($_GET);
	unset($_POST);
	unset($_REQUEST);
}

$con = mysqli_connect('localhost',$db_user,$db_password,$db_name);

if(mysqli_connect_errno()) 
{
    exit();
}

mysqli_set_charset($con,'utf8');

function f($ar)
{
	return mysqli_fetch_array($ar);
}

$sql_log = " ";

function q($q) {
	$q = mysql_lower($q);
	global $cur_date;

	global $con;
	global $uid;
	global $sql_log;
	$sql_log .= $q.';<br/>
	';
	$res = mysqli_query($con,$q);
	$uid = mysqli_insert_id($con);
	return $res;
}

function mysql_lower($s)
{
	return $s;
}

function is($a)
{
	if(isset($_REQUEST[$a]))
		return true;
	else false;
}

function r($a)
{
	$a = strtolower($a);
	global $con;
	if(isset($_REQUEST[$a])) {
        $r = $_REQUEST[$a];
        $r = str_ireplace('>','&gt;',$r);
        $r = str_ireplace('<','&lt;',$r);
		return mysqli_escape_string($con,$r);
    }
	else return '';
}

function rn($a)
{
	global $con;
	if(isset($_REQUEST[$a]))
		return mysqli_escape_string($con,$_REQUEST[$a]);
	else return 0;
}

function msg() {

	if(func_num_args()==0)
	{
		if(isset($_SESSION['msg']))
		{
			echo '<script> alert("'.$_SESSION['msg'].'"); </script>';
			unset($_SESSION['msg']);
			unset($_SESSION['msg_type']);
		}
		if(isset($_SESSION['alert']))
		{
			echo '<script> alert("'.$_SESSION['alert'].'"); </script>';
			unset($_SESSION['alert']);
		}
	}
	else if(func_num_args()==1)
	{
		if(isset($_SESSION['msg']))
		$_SESSION['msg'] .= '\n\n '.func_get_arg(0);
		else
		$_SESSION['msg'] = func_get_arg(0);
		//$_SESSION['msg']['type'] = 'warning';
	}
	else if(func_num_args()==2)
	{
		if(isset($_SESSION['msg']))
		$_SESSION['msg'] .= '\n\n '.func_get_arg(0);
		else
		$_SESSION['msg'] = func_get_arg(0);
		$_SESSION['msg_type'] = func_get_arg(1);
	}

	//unset($_POST);unset($_REQUEST);unset($_GET);
}

function data_in_table($table_name, $id, $required_column)
{
	$q = q('select '.$required_column.' from '.$table_name.' where id = "'.$id.'"');
	//echo $required_column.'..'.$table_name;
	if($r = mysqli_fetch_array($q))
		return $r[$required_column];
}

function countn($qry) {
    $q = q($qry);
    if($r = mysqli_fetch_array($q)) {
        return $r['n'];
    }
    return '';
}

function nr($q) {
    return mysqli_num_rows($q);
}


function thumb_move_uploaded_file($src, $dest, $desired_width = 300) {

	$source_image = imagecreatefromstring(file_get_contents($src));
	$width = imagesx($source_image);
	$height = imagesy($source_image);
	
	$desired_height = floor($height * ($desired_width / $width));
	
	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
	
	imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
	
	imagejpeg($virtual_image, $dest, 90);
}

function dlink($url) {
    return filemtime($url);
}

function get_table_info($mod,$id='') {
	$col = Array();
	$row = Array();

	if($id!='')
	{
		$q = q('select * from '.$mod.' where id = '.$id);

		if($r = mysqli_fetch_array($q))
			$row = $r;
	}

	$res = q("show full columns from ".$mod);
	while($r = mysqli_fetch_array($res)){
		if($r['Field']=='id')
			continue;
		else
		{
			$comment = explode('|', $r['Comment']);
			$col[$r['Field']]['name'] = $r['Field'];
		
			if(count($comment)>0)
				$col[$r['Field']]['type'] = $comment[0];
			else
				$col[$r['Field']]['type'] = '';
		
			if(count($comment)>1)
				$col[$r['Field']]['is_required'] = $comment[1];
			else
				$col[$r['Field']]['is_required'] = '';
		
			if(count($comment)>2)
				$col[$r['Field']]['title'] = $comment[2];
			else 
				$col[$r['Field']]['title'] = $r['Field'];
			
			if(count($comment)>3)
				$col[$r['Field']]['break'] = $comment[3];
			else
				$col[$r['Field']]['break'] = '';
		
	
			//if(count($comment)>5)
			//	$col[$r['Field']]['break'] = $comment[5];
			//else
			//	$col[$r['Field']]['break'] = '';

			//if(isset($row[$r['Field']]))
			{
				if(!is_null($row[$r['Field']]))
					$col[$r['Field']]['value'] = $row[$r['Field']];
				else 
					$col[$r['Field']]['value'] = '';
			}
		}
	}
	return $col;
}
