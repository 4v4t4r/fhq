<?
	include_once "config/config.php";
	include_once "fhq_class_security.php";
	include_once "fhq_class_database.php";
	
	class fhq_answer_list
	{
		function addTryAnswer($iduser, $idquest, $answer_try, $answer_real, $passed)
		{
			$db = new fhq_database();
			$answer_try = base64_encode(htmlspecialchars($answer_try));
			$answer_real = base64_encode(htmlspecialchars($answer_real));
			$nowdate = date('Y-m-d H:i:s');
			$query = "INSERT INTO tryanswer(iduser, idquest, answer_try, answer_real, passed, datetime_try) VALUES ($iduser, $idquest, '$answer_try', '$answer_real', '$passed', '$nowdate');";
			$result = $db->query($query);
		}
	}
	//---------------------------------------------------------------------
?>
