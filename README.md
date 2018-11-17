`ssh-keygen` - создаем ключ для github
копируем его из `C:\Users\andrey\.ssh\id_rsa.pub`
Добавляем в `SSH and GPG keys`
- скачать OpenServer
`https://ospanel.io/download/`
- установить в корень диска C
- создаем папку `<name>` и переходим в нее 
`cd /c/OSPanel/domains/<name>`
- создаем файл `.htaccess` и прописываем кодировку `AddDefaultCharset UTF-8`

`heroku config`
получим `CLEARDB_DATABASE_URL:mysql://USER:PASSWORD@HOSTNAME/DBASENAME?reconnect=true`

работа с бд
`https://www.heidisql.com/download.php?download=installer`

Доступ к базе в php
```
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"],1);

    mysqli_connect($server, $username, $password);
    mysqli_select_db($db);
```
MySQL Installer
`https://dev.mysql.com/downloads/installer/`