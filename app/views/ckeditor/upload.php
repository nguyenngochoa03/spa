<?php
require_once '../../../env.php';
if(isset($_FILES['upload']['name'])){
  $target_dir = "../../../public/upload/questions/";
  $name = time() .$_FILES["upload"]["name"];
  $target_file = $target_dir . $name;
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "<script>
        alert('Xin lỗi ảnh phải có định dạng JPG, JPEG, PNG & GIF .')
    </script>";
    $uploadOk = 0;
  }else {
    move_uploaded_file($_FILES["upload"]["tmp_name"],$target_file);
    $funcNum = $_GET['CKEditorFuncNum'] ;
    $CKEditor = $_GET['CKEditor'] ;
    $langCode = $_GET['langCode'] ;
    $url = route('').'public/upload/questions/'.$name;
    $message = '';
    echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
    echo "<script>
        alert('upload thành công')
    </script>";
  }


}
