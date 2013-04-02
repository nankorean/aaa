<html>
 <head>
  <title>PHP 테스트</title>
 </head>
 <body>
 	<?php echo '<p>Hello World</p>'; ?> 
 	
	<?php
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
		?>
		<h3>strpos()는 false가 아닌 것을 반환했습니다.</h3>
		<p>Internet Explorer를 사용하고 있습니다.</p>
		
		<?php
		} else {
		?>
		<h3>strpos()는 false를 반환했습니다.</h3>
		<p>Internet Explorer를 사용하고 있지 않습니다.</p>
		<?php
		}
	?>
	
	
 </body>
</html>