<?php
include "header.php";
include "leftside.php";
// include "class/cartegory_class.php";
// define('__ROOT__', dirname(dirname(__FILE__))); 
// require_once(__ROOT__.'../admin/class/comment_class.php');
 ?>
<?php
$comment = new comment();
if (!isset($_GET['comment_id'])|| $_GET['comment_id']==NULL){
    echo "<script>window.location = 'cartegorylist.php'</script>";
	 }
else {$comment_id = $_GET['comment_id'];
    }
    $delete_comment = $comment  -> delete_comment($comment_id);
    header('Location:commentlist.php');
?>