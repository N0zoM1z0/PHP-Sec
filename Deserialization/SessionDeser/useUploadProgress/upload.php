<form action="http://192.168.37.134:8080" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="PHP_SESSION_UPLOAD_PROGRESS" value="111" />
    <input type="file" name="file" />
    <input type="submit" />
</form>

<?php
error_reporting(0);
ini_set('session.save_handler', 'files');  // 设置会话保存方式为文件
ini_set('session.save_path', '/tmp');  // 设置会话存储目录，这里需要替换为你想要存储的目录
ini_set('session.serialize_handler','php_serialize'); // default one is 'php'
session_start();
highlight_file(__FILE__);