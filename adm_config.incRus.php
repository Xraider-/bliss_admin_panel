<?php
/*  author  skynetdev
 *  email   skynetdev3@gmail.com
 *  мой канал на ютубе  https://www.youtube.com/user/bfpayer
 */


// Внимание 
// вначале вы должны импортировать SQL файл в базу данных mysql без этого админ панель работать не будет!
// по умолчанию вход в админ панель как суперадмин логин superadmin  пароль 123456


// true - истина  false - ложь  или true - да  false - нет
define('INSTANCE', 1);   //instance id
define('DISABLE_ZOOM_5_6', false);   // true/false Отключить зум 5 и 6 для карты  true - отключить false - нет
define('GET_MAP_FOR_ZOOM_5AND6_LOCAL', true); // true/false если установлено как true на зуме 5 и 6 попробует стянуть куски карты с интернета и сохранить на жесткий диск если их нет на жестком диске если установлено как false будет пытаться отобразить карту только с жесткого диска
define('SITENAME', 'Админ панель для блисс сервера');  // эта константа не задействована
define('SERVERIP', '127.0.0.1');// IP адресс сервера 
define('SERVERPORT', 2302);    //порт сервер
define('USERNAME', 'dayz');   //пользователь для базы данных mysql
define('PASSWORD', 'dayz');  //пароль пользователя  для базы данных mysql
define('RCONPASSWORD', '3d057718a'); //rcon пароль минимум 6 символов, начанаться должен с  цифры и в пароле должно быть больше цифр чем букв  (rcon работает только при включеннем battleye на сервере)
define('DBNAME', 'dayz, dayz_backupt');     // Имя базы данных mysql.  Вы можете указать несколько имен разделив их запятой
define('ALTERNATIVE_ONLINE_MINUTES', 3);  //отображать онлайн игроков алтернативным способом используя только базу данных показывать игроков сохранившиеся в базу за последние n минут  по умолчанию n = 3 минуты
define('MAX_LENGTH_PLAYER_NAME', 20);  // максимальная допустимая длинна имени игрока если установить 0 функция будет отключена по умлочанию значение стоит 20 (работает только при отображении игроков через rcon онлайн)
define('FORBIDDEN_SYMBOLS_FOR_PLAYER_NAME', "\"\\/'`:-*<>"); // кикнуть игрока если встречается запрещнный символ в имени (работает только при отображении игроков через rcon онлайн)
define('ASCII_SYMBOLS_ONLY_FOR_PLAYER_NAME', false);   //true/false кикнуть игрока если в имени игрока встречаются не ASCII (кирилицы нет ASCII) символы указать надо  true or false   по умолчанию стоит false (работает только при отображении игроков через rcon онлайн)
define('UTF8_SYMBOLS_ONLY_FOR_PLAYER_NAME', true);    //true/false кикнуть игрока  если в имени игрока встречаются не UTF8 символы указать надо  true or false   по умолчанию стоит false (работает только при отображении игроков через rcon онлайн)
define('ACTION_FORBIDDEN_ITEMS', 0);   //Проверять на зарещенные вещи в инветоре и рюкзаке игрока  0 - Выключена проверка. 1 - Бан по IP и GUID навсегда, 2 - Кикнуть, 3 - Только сообщение админу . Строго рекомендуется использовать при включенной опции "Показать полный инвентарь/рюкзак"  Full invetory/backpack (работает только при отображении игроков через rcon онлайн)
define('VIP_PLAYERS', '');  // не проверять на запрещенный лут след игроков  (указать надо имена игроков через зяпятую) пример: define('VIP_PLAYERS','player_name1, player_name2');


// для запуска и остановки сервера 
define('GAME_PATH', 'D:'.DS.'Games'.DS.'ArmA2'); // путь к папке с игрой  где DS это слеш  путь должен быть без пробелов!!!
define('SERVEREXE', 'arma2oaserver.exe');  // исполнаемый файл сервера


define('ADM_START_SERVER','ADM_START_SERVER.bat');// этот файл нужен для запуска сервер через админ панель,
//при заходе через меню в опции Конт.Сервера -> Контроль, админ панель должна автоматом скопировать файл ADM_START_SERVER.bat 
// который находится в папке installation в папку с игрой вы можете его отредактировать что бы запускать дополнительные команды 
// до запуска сервера например перл скрипт для создания техники на карту

define('SERVER_START_FILE', GAME_PATH.DS.ADM_START_SERVER);  // полный путь до ADM_START_SERVER


define('SERVEREXE_PATH', GAME_PATH.DS."expansion".DS."beta".DS.SERVEREXE); 

// для запуска и остановки BEC
//что бы узнать что такое BEC посмотрите видео https://www.youtube.com/watch?v=MbGu47Mh8_k
//что бы сказать BEC перейдите по ссылке  http://ibattle.org/  
define('BEC_PATH', GAME_PATH.DS.'BEC');  //папка  BEC  
define('BECEXE', 'BEC.exe');    //файл BEC.exe  
define('BEC_STRING', ' -f config.cfg');



?>
