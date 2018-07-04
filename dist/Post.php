<?php
	if (isset($_POST['submit']) )
	{
		$Name = $_POST['UserName'];
		$Email = $_POST['UserMail'];
		if ( isset($_POST['UserName']) || isset($_POST['UserMail']) )
		{
			echo 'Не все поля заполнены';
		}
		else
		{
			//Фильтруем данные
			//преобразуем все символы
			$Name = htmlspecialchars($Name);
			$Email = htmlspecialchars($Email);
			//декодируем url
			$Name = urldecode($Name);
			$Email = urldecode($Email);
			//Удалить пробелы с конца и начала строки
			$Name = trim($Name);
			$Email = trim($Email);
			include 'mailforadmin.php';

			
			//Отправляем письмо
			/*"на какой адрес отправить", 
			"тема письма", 
			"Сообщение (тело письма)",
			"From: с какого email отправляется письмо 
			\r\n"*/
			if ( mail("phyraytor@gmail.com", "Заявка с сайта", $mailForAdmin) )
				echo "Письмо успешно отправлено";
			else
				echo "При отправке сообщения возникли ошибки";
		}
	}
?>
