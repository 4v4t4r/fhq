<?
	require_once "config.php";
	require_once "process_date.php";
	//if ($_POST['email']) {
		include "subscribe.php";
	//}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head>
	<script language="Javascript" type="text/javascript" src="js/jquery-1.4.1.js"></script>
	<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
	<script language="Javascript" type="text/javascript" src="js/misc.js"></script>
	<link rel="Stylesheet" type="text/css" href="style/precour.css"></link>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Добрый день!</title>
<!-- script language="javascript" type="text\javascript">
var url = "subscribe2.php?email=";
function handleHttpResponse()
{
  if(http.readyState==4 && http.status==200)
  {
    results = http.responseText;
    document.getElementById('msg2').value = results;
  }
}

function updateMsg()
{
   var email = document.getElementById('email_field2');
   http.open("GET", "subscribe2.php?email=ddd.dd"), true );
   http.onreadystatechange = handleHttpResponse;
   http.send(null);
}

function getHttpObject()
{
  var xmlhttp;
  xmlhttp = new XMLHttpRequest();
  return xmlhttp;
}

var http = getHttpObject();

</script -->

<script language="javascript" type="text/javascript">

var url = "subscribe2.php?email=";

function handleHttpResponse() {
  if (http.readyState == 4) {
    results = http.responseText;
    document.getElementById('msg2').innerHTML = results;
  }
}

function updateMsg() {
  var email = document.getElementById("email_field").value;

  http.open("GET", url + escape(email), true);
  http.onreadystatechange = handleHttpResponse;
  http.send(null);
}

function getHTTPObject() {
  var xmlhttp;
  xmlhttp = new XMLHttpRequest();
  return xmlhttp;
}

var http = getHTTPObject();

</script>

</head>

<body>

	<div id="container">

		<h1>Команда KeV@</h1>
		<h3 class="subtitle">
Приглашает студентов на семинары по защите и взлому компьютерных систем.<br>
Новая информация будет рассылаться на e-mail. <br>
<br>
<br> подпишись на лекторно-семинарские занятия<br>
  (когда: 29.09.2012 в 18:30; где: ул. Вершинина 74 (кор. ФЭТ ТУСУР), аудитория 412) <br>
</h3>

		<!-- Начало панели счетчика -->
		<div id="countdown_dashboard">
			<div class="dash weeks_dash">
				<span class="dash_title">недель</span>
				<div class="digit"><?=$date['weeks'][0]?></div>
				<div class="digit"><?=$date['weeks'][1]?></div>
			</div>

			<div class="dash days_dash">
				<span class="dash_title">дней</span>
				<div class="digit"><?=$date['days'][0]?></div>
				<div class="digit"><?=$date['days'][1]?></div>
			</div>

			<div class="dash hours_dash">
				<span class="dash_title">часов</span>
				<div class="digit"><?=$date['hours'][0]?></div>
				<div class="digit"><?=$date['hours'][1]?></div>
			</div>

			<div class="dash minutes_dash">
				<span class="dash_title">минут</span>
				<div class="digit"><?=$date['mins'][0]?></div>
				<div class="digit"><?=$date['mins'][1]?></div>
			</div>

			<div class="dash seconds_dash">
				<span class="dash_title">секунд</span>
				<div class="digit"><?=$date['secs'][0]?></div>
				<div class="digit"><?=$date['secs'][1]?></div>
			</div>

		</div>
		<!-- Завершение панели счетчика -->

		<!-- div class="subscribe">

			<form action="" id="subscribe_form">
				<input type="text" name="email" id="email_field" class="faded" value="your@email.com" />
				<input type="submit" id="subscribe_button" value="Оставайтесь на связи" />

				<div id="loading">
					<img src="images/loading.gif" />
				</div>
			</form>
<div id="msg4" style="display: block"> </div>
		</div -->

		<br><br>
		<div class="subscribe">
			<form action="" id="subscribe_form">
				<input name="email" type="text" id="email_field" class="faded" value="your@email.com"/>
				<input type="button" id="subscribe_button" onClick="updateMsg();" value="Оставайтесь на связи"/>
				<div id="msg2" style="display: block"> </div>
			</form>
		</div>

		<script language="javascript" type="text/javascript">
			jQuery(document).ready(function() {
				$('#countdown_dashboard').countDown({
					targetDate: {
						'day': 		<?=$config['targetDate']['day']?>,
						'month': 	<?=$config['targetDate']['month']?>,
						'year': 	<?=$config['targetDate']['year']?>,
						'hour': 	<?=$config['targetDate']['hour']?>,
						'min': 		<?=$config['targetDate']['minute']?>,
						'sec': 		<?=$config['targetDate']['second']?>
					}
				});

				// Функции подписки
				$('#email_field').focus(email_focus).blur(email_blur);
				$('#subscribe_form').bind('submit', subscribe_submit);
			});
		</script>

	</div>
</body>

</html>
