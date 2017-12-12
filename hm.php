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
				echo "Sonuç: ".$sonuc;				
			} else {
				echo 'sayısal değer girilmedi';
			}
		}
		?>
		<form method="post" action="hm.php">
			<input name="sayi1" type="text" />
			<select name="islem">
				<option value="topla">topla</option>
				<option value="cikar">cikar</option>
				<option value="carp">carp</option>
				<option value="bol">bol</option>
			</select>
			<input name="sayi2" type="text" />
			<input name="submit" type="submit" value="Hesapla" />
		</form>
	</div>	
</body>
</html>