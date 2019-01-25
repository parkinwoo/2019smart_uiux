

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>title</title>
</head>
<body>
<?
$active = $_GET["active"];

if($active == 10){?>

<div style="height:200px; background:#cdcdcd;"></div>
<?}
?>
<h1>입력내용입니다.</h1>
환영합니다. <?php echo $_GET["name"]; ?> 님<br>
이메일: <?php echo $_GET["email"]; ?><br>
핸드폰: <?php echo $_GET["phone"]; ?>

<hr>
<h3>개인정보</h3>
성별: <?php echo $_GET["user-s"]; ?><br>
생년월일 <?php echo $_GET["year"]; ?> / <?php echo $_POST["month"]; ?><br>


</body>
</html>