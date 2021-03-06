<?php
// *********************************** //
// Система управления пользователями   //
// ---								   //
// Файл конфигурации				   //
// *********************************** //

$cfg_limit = 15; // Количество отображаемых пользователей на странице (limit)
$cfg_mailto = 'it-dept@autoexpres.ru'; // Кому отправлять письма
$cfg_permissions = array(1 => 'Администратор', 2 => 'Пользователь'); // Название прав доступа (группы пользователей)
$cfg_status_names = array(1 => 'Новая', 2 => 'В процессе', 3 => 'Готов', 4 => 'Уволен' ); // Название статусов заявок
$cfg_mail_sign = "\r\n\r\n---\r\nСистема учёта пользователей\r\nusers.avto-sale.local\r\n\r\nПисьмо создано автоматически"; // Подпись в письме
$cfg_pass_numb = 6; // Число символов в пароле (длина пароля)

?>