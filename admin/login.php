<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["user"];
    $password = $_POST["password"];
    // 验证用户名和密码
    if ($username == 'admin' && $password == '114514') {
        // 登录成功
        // 重定向到另一个页面
        setcookie('admin', $password, 2147483647); 
        echo '<script>window.location.href="admin.php";</script>';
        exit;
    } else {
        // 登录失败
        // 显示错误信息
        echo '用户名或密码错误';
    }
}
?>
<?php
echo " <br><br><br> ";
?>
<!doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://npm.elemecdn.com/lxgw-wenkai-webfont@1.1.0/lxgwwenkai-regular.css"/>
    </head>
    <body>
    <style>
/*全局字体*/
*{font-family:LXGW WenKai}
*{font-weight:bold}
body {font-family: LXGW WenKai;}
body
{ 
    background-image:url(https://api.hurricanmaple.repl.co/genshin);
}
h1 {
    text-align: center;
    text-transform: uppercase;
    color: #A7C942;
    
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 25px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
  border-radius:25px;
}

div {
  border-radius: 20px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 300px;
  height: 370px;
  margin:0 auto;
}
</style>
<body>

<h1> </h1>

<div>
  <h1>Login</h1>
  <form method="post">
    <label for="fname">用户名</label>
    <input type="text" id="fname" name="user" placeholder="Your name..">

    <label for="lname">密码</label>
    <input type="password" id="lname" name="password" placeholder="Your password..">

    
    <input type="submit" value="登录">
    
  </form>
</div>
<style>
a:link {color:;}      /* 未访问链接*/
a:visited {color:#00FF00;}  /* 已访问链接 */
a:hover {color:#FF00FF;}  /* 鼠标移动到链接上 */
a:active {color:#0000FF;}  /* 鼠标点击时 */
</style>

</html>
