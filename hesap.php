<!DOCTYPE html>
<html>

<body>

	<div>
		
		<?php

		if(isset($_POST['submit']))
		{

			if(is_numeric($_POST['sayi1']) && is_numeric($_POST['sayi2']))
			{

				if($_POST['islem'] == 'topla')
				{
					$sonuc = $_POST['sayi1'] + $_POST['sayi2'];	
				}
				if($_POST['islem'] == 'cikar')
				{
					$sonuc = $_POST['sayi1'] - $_POST['sayi2'];	
				}
				if($_POST['islem'] == 'carp')
				{
					$sonuc = $_POST['sayi1'] * $_POST['sayi2'];	
				}
				if($_POST['islem'] == 'bol')
				{
					$sonuc = $_POST['sayi1'] / $_POST['sayi2'];	
				}


				echo "<h1>{$_POST['sayi1']} {$_POST['islem']} {$_POST['sayi2']} equals {$sonuc}</h1>";

			} else {

				echo 'sayısal değer girilmedi';

			}
		}

		?>

		<form method="post" action="hesap.php">
			<input name="sayi1" type="text"/>
			<select name="islem">
				<option value="topla">topla</option>
				<option value="cikar">çıkar</option>
				<option value="carp">çarp</option>
				<option value="bol">böl</option>
			</select>
			<input name="sayi2" type="text"/>
			<input name="submit" type="submit" value="hesapla"/>
		</form>

	</div>
	
</body>
</html>