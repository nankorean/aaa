<html>
 <head>
  <title>PHP �׽�Ʈ</title>
 </head>
 <body>
 	<?php echo '<p>Hello World</p>'; ?> 
 	
	<?php
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
		?>
		<h3>strpos()�� false�� �ƴ� ���� ��ȯ�߽��ϴ�.</h3>
		<p>Internet Explorer�� ����ϰ� �ֽ��ϴ�.</p>
		
		<?php
		} else {
		?>
		<h3>strpos()�� false�� ��ȯ�߽��ϴ�.</h3>
		<p>Internet Explorer�� ����ϰ� ���� �ʽ��ϴ�.</p>
		<?php
		}
	?>
	
	
 </body>
</html>