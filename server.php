<?php 
$conn=mysqli_connect('localhost','root','','ajax');
if (!$conn) {
	die('Error:'.mysqli_error($conn));
	# code...
}


if (isset($_POST['save'])) {

$name=$_POST['name'];
$comment=$_POST['comment'];

$sql="INSERT INTO comment(name,comment) values('{$name}','{$comment}')";
if (mysqli_query($conn,$sql)) {
	$id=mysql_insert_id($conn);
	$saved_comment='<span id="delete" data-id="'.$id.'">delete</span>
<span id="edit" data-id="'.$id.'">edit</span>
<div class="desplay">
'.$name.'	
</div>
<div class="desplay">
'.$comment.'	
	
</div>';
	# code...
}
	# code...
}

$sql="SELECT*FROM comment";
$result=mysqli_query($conn,$sql);


$comment='<div id="comment_box">';
while ($row=mysqli_fetch_array($result)) {
$comment.='<span id="delete" data-id="'.$row['id'].'">delete</span>
<span id="edit" data-id="'.$row['id'].'">edit</span>

	

<div class="desplay">
'.$row['name'].'
	
</div>
<div class="desplay">
'.$row['comment'].'	
	
</div>';	# code...
}
 $comment.='</div>';




 ?>