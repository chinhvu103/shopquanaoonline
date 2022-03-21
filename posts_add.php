<?php
require 'includes/init.php';
if(isset($_SESSION['id']) && isset($_SESSION['email'])){
    $user_data = $user_obj->find_user_by_id($_SESSION['id']);
    if($user_data ===  false){
        header('Location: logout.php');
        exit;
    }
    // FETCH ALL USERS WHERE ID IS NOT EQUAL TO MY ID
    $all_users = $user_obj->all_users($_SESSION['id']);
}
else{
    header('Location: logout.php');
    exit;
}
?>
<!DOCTYPE html>  
<html>
<head>
<title>Thêm bài viết</title>
</head>
   
<body>
<form action="posts_add.php" enctype="multipart/form-data" method="post" class="form">
        <table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Tiêu đề </td>
    <td width="329"><input type="text" name="title"/></td>
  </tr>
  <tr>
    <td>URL </td>
    <td><input type="text" name="url"/></td>
  </tr>
    <tr>
    <td>Content </td>
    <td><textarea name="content" id="content" placeholder="Đây là nội dung..." class="noidung" rows="10" cols="80"></textarea></td>
  </tr>
    <tr>
    <td>Ảnh </td>
    <td><input type="hidden" name="size" value="1000000">
<input type="file" name="image" class="hinhanh"><br/><br/></td>
  </tr>
  <tr>
    <a href="Home-user.php"><td colspan="2" align="center"><input type="submit" name="btn_submit" value="Save Data"/></td></a>
  </tr>
</table>
</form>
<a href="Home-user.php">Back to your home</a>
<h2>Nội dung trong Database</h2>
<?php require 'posts_xuly.php';?>
</body>
</html>