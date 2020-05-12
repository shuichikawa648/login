<?php

 session_start();
 if(isset($_SESSION['id'])){
    header("Location:mypage.php");
 }
?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
       
       <title>マイページ登録</title>
       <link rel="stylesheet"type="text/css"href="login_error.css">    
    </head>
    
    <body>
        
          <header>
             <img src="4eachblog_logo.jpg">
             <div class="login"><a href="login.php">ログイン</a></div>
        
        </header>
        
        <main>
        <form action="mypage.php" method="post">
        <div class="form_contens">
        <div class="error_message">メールアドレスまたはパスワードが間違っています。</div>
        <div class="mail">
            <label>メールアドレス</label><br>
            <input type="text" class="formbox" size="40" value="<?php
                if (isset($_POST['mail'])){                             echo $_COOKIE['mail'];
                                          }
                ?>"name = "mail">    
          </div>
        <div class="password">
        <label>パスワード</label><br>
        <input type="text" class="formbox" size="40" value="<?php
        if(isset($_COOKIE['login_keep']))
        echo $_COOKIE['password'];    
        ?>"name = "password"> 
            
            
                 </div> 
                 
                 
        <div class="loginbutton">
            <input type="submit" class="submit_button" size="35" value="ログイン">     
                 </div> 
                </div>
            </form>
        </main>
         <footer>
            © 2018 internous.ink. All right reserved 
        </footer>

  </body>
</html>

