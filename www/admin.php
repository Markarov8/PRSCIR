<?php
function run($cmd)
{
    return "<pre>" . htmlspecialchars(shell_exec($cmd)) . "</pre>";
}

echo "<h1>Информация о сервере</h1>";
echo "<h2>Текущий пользователь</h2>" . run("whoami");
echo "<h2>ID пользователя</h2>" . run("id");
echo "<h2>Список процессов</h2>" . run("ps aux | head -n 10");
echo "<h2>Файлы в текущей директории</h2>" . run("ls -l");
?>