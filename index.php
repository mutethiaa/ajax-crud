<?php
include 'server.php';
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>

<?php echo "$comment";  ?>
  	<form>
  		<label>name</label>
  		<input type="text" id="name" name="name">
  		<label>comment</label>
  		<textarea name="comment" id="comment" cols="20" rows="20"></textarea>
  		<button type="button" id="submit_btn">submit</button>
  		<button type="button" id="subit_btn">edit</button>

  	</form>
  
  </body>
  </html>
  <script src=""></script>
<script src="js/jquery-3.3.1.js"></script>

    <script src="script.js"></script>