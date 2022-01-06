# cscart departments module

<details>
	<summary><b>Системные требования</b></summary>
    - ОС  Windows 10
    - Версия php 7.1
    - OpenServer 5.3.7
    - MySQL
    - cs-cart 4.14.1 SP1
</details>

<details>
	<summary><b>Как развернуть приложение</b></summary>
    - Поместить чистый магазин в папку локального сервера<br>
    - Создать свою базу данных с пользователем и паролем для доступа<br>
    - В корневой папке, в файле config.local.php прописать свои настройки подключения к базе данных<br>
    - в папке var/backups лежит backup базы данных, ее нужно разархивировать и импортировать в Вашу пустую базу данных<br>
    - в папке images скопировать папку department и вставить в новый магазин по тому же пути<br>
    - в папке app/controllers/backend файл departments.php поместить в новый магазин по тому же пути<br>
    - в папке app/controllers/frontend файл departments.php поместить в новый магазин по тому же пути<br>
    - в папке app/functions файл fn.departments.php поместить в новый магазин по тому же пути и подключить этот файл в файле init.php, который находится в корневой папке магазина<br>
	- в папке design/backend/templates/views скопировать папку departments и сохранить в новом магазине по тому же пути<br>
    - в папке design/themes/responsive/templates/views скопировать папку departments и сохранить в новом магазине по тому же пути<br>
    - в папке app/schemas/menu скопировать menu.php и вставить с заменой в новом магазине по тому же пути<br>
</details>
