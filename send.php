<?php
/* ����� ����������� ������������� ���������� */
if (isset($_POST['name'])) {$phone = $_POST['name'];}
if (isset($_POST['phone'])) {$name = $_POST['phone'];}
 
/* ���� ������� ���� ��. ����� */
$myaddres  = "presnyakovsa286@gmail.com"; // ���� ����������
 
/* � ����� ������������� ����� ���������, \n - ������� ������ */
$mes = "����: ����� ��������� ������!\n�������: $phone\n���: $name";
 
/* � ��� ������� ��� ��� ���������� ��������� ������ �� ��������� ���� email */
$sub='�����'; //����
$email='����� ��������� ������'; // �� ����
$send = mail ($myaddres,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 
ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>�������! �� �������� � ����!</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("/index.html")', 3000);
/*�������� ������� ����� �������� ����� 3 ������� (3000 �����������)*/
</script> 
</head>
<body>
<h1>�������! �� �������� � ����!</h1>
</body>
</html>