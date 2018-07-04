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
			$mailForAdmin = '<table cellpadding="0" cellspacing="0" border="0" width="700px" style="width:700px!important;min-width:600px;max-width:700px"><tr><td align="center" valign="middle"  background="img/bg.png" style="width: 100%" bgcolor="#e3c7d7"> <table cellpadding="0" cellspacing="0" border="0" width="700px" style="width: 700px !important; min-width: 600px; max-width: 700px"><tr>
<td align="center" valign="top" bgcolor = "#000000">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#FFFFFF" width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#000000"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino,  serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#000000"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#000000"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
</tr>
<!---*************************************************************---><tr>
<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">

  
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#FFFFFF" colspan = "6" rowspan = "3">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino,  serif; color:#000000; font-size: 1.7em; line-height: 4em" >
Доброго времени суток.<br> 
На вашем сайте была оставлена заявка.<br>
'.$Name.' хочет заказать у вас Web-проект.<br>


</span>
</font>
</td>

<td align="center" valign="top" bgcolor = "#000000"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino,  serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">

</span>
</font>
</td>
</tr>
<!---*************************************************************---><tr>
<td align="center" valign="top" bgcolor = "#000000"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">

&nbsp;
</span>
</font>
</td>

<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
</tr>
<!---*************************************************************---><tr>
<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">

&nbsp;
</span>
</font>
</td>

<td align="center" valign="top" bgcolor = "#000000"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
</tr>
<!---*************************************************************---><tr>
<td align="center" valign="top" bgcolor = "#000000"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">

&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#000000" colspan = "6" rowspan = "3">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#FFFFFF; font-size: 1.7em; line-height: 4em" >
Ему уже отправлено письмо <br>
с просьбой написать техническое задание. <br>
Его почта: '.$Email.' <br>   
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
</tr>
<!---*************************************************************---><tr>
<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">

&nbsp;
</span>
</font>
</td>

<td align="center" valign="top" bgcolor = "#000000"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino,serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
</tr>
<!---*************************************************************---><tr>
<td align="center" valign="top" bgcolor = "#000000"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">

&nbsp;
</span>
</font>
</td>

<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
</tr>
<!---*************************************************************---><tr>
<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">

&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#000000"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#000000"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#FFFFFF"  width = "50px" height = "50px">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#000000">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#FFFFFF">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, serif; color:#000000; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
<td align="center" valign="top" bgcolor = "#000000">
 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
<span style="font-family: Palatino, Georgia,  serif; color:#FFFFFF; font-size: 1.7em; line-height: 2.8em">
&nbsp;
</span>
</font>
</td>
</tr>
</table>
</td>
</tr>
</table>
';

			$mailForClient = '<table cellpadding="0" cellspacing="0" border="0" width="700px" style="width:700px!important;min-width:600px;max-width:700px">
      <tr>
        <td align="center" valign="middle"  background="img/bg.png" style="width: 100%" bgcolor="#e3c7d7">
         <table cellpadding="0" cellspacing="0" border="0" width="700px" style="width: 700px !important; min-width: 600px; max-width: 700px">
                       <tr width = "25%">
					<td align="center" valign="top" bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "center" style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       Здравствуйте. 
		                    </span>
                		</font>	
					</td>

					<td align="center" valign="top" bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "center" style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                       Спасибо,
		                    </span>
                		</font>							
					</td>

					<td align="center" valign="top"  bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "center" style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       что выбрали 
		                    </span>
                		</font>							
					</td>
					<td align="center" valign="top" bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "justify" style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                          меня
	                    </span>
                		</font>							
					</td>
                         
                  <td align="center" valign="top" bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "center" style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       в качестве
		                    </span>
                		</font>							
					</td>
				</tr>
				
                       <tr width = "25%">
					<td align="center" valign="top" bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "center" style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                       испольнителя
		                    </span>
                		</font>	
					</td>

					<td align="center" valign="top" bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "center" style="font-family: Palatino, serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       вашей
		                    </span>
                		</font>							
					</td>

					<td align="center" valign="top" bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "center" style="font-family: Palatino, serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                       работы. 
		                    </span>
                		</font>							
					</td>
					<td align="center" valign="top" bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "justify" style="font-family: Palatino, serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                     Я с большим 
		                    </span>
                		</font>							
					</td>
					<td align="center" valign="top"  bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "center" style="font-family: Palatino, serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                       удовольствием
		                    </span>
                		</font>							
					</td>
				</tr>
            <tr width = "25%">
					<td align="center" valign="top"   bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "center" style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       возьмусь
		                    </span>
                		</font>	
					</td>

					<td align="center" valign="top" bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "center" style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                     за неё  
		                    </span>
                		</font>							
					</td>

					<td align="center" valign="top"  bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "center" style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                        Пожалуйста, 
		                    </span>
                		</font>							
					</td>
					<td align="center" valign="top"  bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "justify" style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                     подробно   	
		                    </span>
                		</font>							
					</td>
              					<td align="center" valign="top"  bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span align = "justify" style="font-family: Palatino, Georgia, serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       опишите   	
		                    </span>
                		</font>							
					</td>
				</tr>

	             <tr>
					<td align="center" valign="top"  bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                      проект, 
		                    </span>
                		</font>	
					</td>

					<td align="center" valign="top" bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       который мне 
		                    </span>
                		</font>	
					</td>
					
					<td align="center" valign="top" bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
								необходимо
		                    </span>
                		</font>	
					</td>
					<td align="center" valign="top" bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       сделать. 
		                    </span>
                		</font>	
					</td>
					<td align="center" valign="top" bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
								Для удобства,
		                    </span>
                		</font>	
					</td>                   
                  
				</tr>
		
	             <tr>
					<td align="center" valign="top"  bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       вы можете  
                          </span>
                		</font>	
					</td>

					<td align="center" valign="top" bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#0000000;font-size:1.7em;line-height:2.8em">
		                       использовать 
		                    </span>
                		</font>	
					</td>
					
					<td align="center" valign="top" bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       шаблон  <br>
		                    </span>
                		</font>	
					</td>
					<td align="center" valign="top" bgcolor = "white"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
                              технического 
		                    </span>
                		</font>	
					</td>
                   
                   					<td align="center" valign="top" bgcolor = "black"> 
						<font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       задания,  <br>
		                    </span>
                		</font>	
					</td>
				</tr>
				
              <tr>
                <td align="center" valign="top" bgcolor = "white"> 
                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                       который
		                    </span>
                		</font>	
              </td>
              		<td align="center" valign="top" bgcolor = "black"> 
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">		                      
		                        можно
		                    </span>
                		</font>							
					</td>
					
					<td align="center" valign="top" bgcolor = "white"> 
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Palatino,serif;color:#0000000;font-size:1.7em;line-height:2.8em">
		                         
                              скачать с
		                    </span>
                		</font>							
					</td>
					<td align="center" valign="top" bgcolor = "black"> 
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                      
		                        моего
		                    </span>
                		</font>							
					</td>
				<td align="center" valign="top" bgcolor = "white"> 
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                      
		                       сайта.  
		                    </span>
                		</font>							
					</td>
	    	</tr>
           
            <tr>
                <td align="center" valign="top" bgcolor = "black"> 
                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                      Есть
		                    </span>
                		</font>	
              </td>
              		<td align="center" valign="top" bgcolor = "white"> 
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                         
                              вопросы?
		                    </span>
                		</font>							
					</td>
					
					<td align="center" valign="top" bgcolor = "black"> 
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                     спрашивайте!    
	                    </span>
                		</font>							
					</td>
					<td align="center" valign="top" bgcolor = "white"> 
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:2.8em">
		                      Cпособы  
		                    </span>
                		</font>							
					</td>
				<td align="center" valign="top" bgcolor = "black"> 
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2.8em">
		                       связи
		                    </span>
                		</font>							
					</td>
	    	</tr>
           
            <tr>
                <td align="center" valign="top" bgcolor = "white"> 
                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
		                    <span style="font-family: Palatino,serif;color:#000000;font-size:1.7em;line-height:5em">
		                         со мной:
		                    </span>
                		</font>	
              </td>
              		<td align="center" valign="top" bgcolor = "black"> 
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Palatino,serif;color:#FFFFFF;font-size:1.7em;line-height:2em">
		                      phyraytor<br>@gmail.com 
		                    </span>
                		</font>							
					</td>
					
					<td align="center" valign="top" bgcolor = "white"> 
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Palatino, serif;color:#000000;font-size:1.7em;line-height:2em">
		                        FaceBook.com<br>/phyraytor
		                    </span>
                		</font>							
					</td>
					<td align="center" valign="top" bgcolor = "black"> 
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Palatino, Georgia,serif;color:#FFFFFF;font-size:1.7em;line-height:2em">		                     
							   vk.com<br>/phyraytor
		                    </span>
                		</font>							
					</td>
<td align="center" valign="top" bgcolor = "#E41010"> 
  <a href = "https://vk.com/im?peers=206702620&sel=317770718" style =" text-decoration: none;">
    <div width = "100%" height = "100%" >
		                 <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
				                    <span style="font-family: Georgia,Palatino,serif;color:#001010;font-size:2.3em;line-height:3.5em">		                     							
                                Написать      
		                    </span>
                                     
                		</font>							
					</div> </a></td> 
	    	</tr>
	    	 
          </table>
        </td>
      </tr>

    </table>
';
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

			if ( mail($Email, "Ответ исполнителя", $mailForClient ) )
				echo "Письмо успешно отправлено";
			else
				echo "При отправке сообщения возникли ошибки";
			header('Location:http://phyraytor.000webhostapp.com/');
		}
	}
?>
