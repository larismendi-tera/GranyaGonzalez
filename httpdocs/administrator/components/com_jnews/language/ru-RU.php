<?php
defined('_JEXEC') or die('Restricted access');
### Copyright (c) 2006-2012 Joobi Limited. All rights reserved.
### license GNU GPLv3 , link http://www.joobi.co

/**
* <p>Русский языковой файл</p>
* @author Salikhov Ilyas <salikhoff@gmail.com>
* @version $Id: russian.php 491 2007-02-01 22:56:07Z chris $
*/


### General ###
 // Описание jnews
define('_JNEWS_DESC_CORE', 'jNews - это инструмент почтовых рассылок, рассылки новостей и автореспондер для эффективной коммуникации с Вашими пользователя и клиентами.  ' .
		'jNews, Ваш коммуникационный партнер!');
define('_JNEWS_DESC_GPL', 'jNews - это инструмент почтовых рассылок, рассылки новостей и автореспондер для эффективной коммуникации с Вашими пользователя и клиентами.  ' .
		'jNews, Ваш коммуникационный партнер!');
define('_JNEWS_FEATURES', 'jNews, Ваш коммуникационный партнер!');

// Тип списков
define('_JNEWS_NEWSLETTER', 'Информационный бюллетень');
define('_JNEWS_AUTORESP', 'Автоответчик');
define('_JNEWS_AUTORSS', 'RSS-подписка');
define('_JNEWS_ECARD', 'eCard');
define('_JNEWS_POSTCARD', 'Почтовая открытка');
define('_JNEWS_PERF', 'Производительность');
define('_JNEWS_COUPON', 'Купон');
define('_JNEWS_CRON', 'Задача Хрона');
define('_JNEWS_MAILING', 'Почтовая рассылка');
define('_JNEWS_LIST', 'Список');

// Меню jnews
define('_JNEWS_MENU_LIST', 'Списки');
define('_JNEWS_MENU_SUBSCRIBERS', 'Подписчики');
define('_JNEWS_MENU_NEWSLETTERS', 'Информационные бюллетени');
define('_JNEWS_MENU_AUTOS', 'Автоответчики');
define('_JNEWS_MENU_COUPONS', 'Купоны');
define('_JNEWS_MENU_CRONS', 'Задачи Хрона');
define('_JNEWS_MENU_AUTORSS', 'RSS-подписка');
define('_JNEWS_MENU_ECARD', 'eCards');
define('_JNEWS_MENU_POSTCARDS', 'Почтовые Открытки');
define('_JNEWS_MENU_PERFS', 'Производительность');
define('_JNEWS_MENU_TAB_LIST', 'Списки');
define('_JNEWS_MENU_MAILING_TITLE', 'Почтовые рассылки');
define('_JNEWS_MENU_MAILING' , 'Рассылки для ');
define('_JNEWS_MENU_STATS', 'Статистика');
define('_JNEWS_MENU_STATS_FOR', 'Статистика для');
define('_JNEWS_MENU_CONF', 'Конфигурация');
define('_JNEWS_MENU_UPDATE', 'Import');
define('_JNEWS_MENU_ABOUT', 'О');
define('_JNEWS_MENU_LEARN', 'центр Образования');
define('_JNEWS_MENU_MEDIA', 'Медиа-менеджер'); // был - "Менеджер Носителя"
define('_JNEWS_MENU_HELP', 'Помощь');
define('_JNEWS_MENU_CPANEL', 'CPanel');
define('_JNEWS_MENU_IMPORT', 'Импорт');
define('_JNEWS_MENU_EXPORT', 'Экспорт');
define('_JNEWS_MENU_SUB_ALL', 'Подписаться на все');
define('_JNEWS_MENU_UNSUB_ALL', 'Аннулирует всю подписку');
define('_JNEWS_MENU_VIEW_ARCHIVE', 'Архив');
define('_JNEWS_MENU_PREVIEW', 'Предпросмотр');
define('_JNEWS_MENU_SEND', 'Отправка');
define('_JNEWS_MENU_SEND_TEST', 'Электронная почта для Теста Отправки');
define('_JNEWS_MENU_SEND_QUEUE', 'Очередь Процесса');
define('_JNEWS_MENU_VIEW', 'Вид');
define('_JNEWS_MENU_COPY', 'Копия');
define('_JNEWS_MENU_VIEW_STATS' , 'Просмотр статистики');
define('_JNEWS_MENU_CRTL_PANEL' , 'Панель Управления');
define('_JNEWS_MENU_LIST_NEW' , 'Создать Список');
define('_JNEWS_MENU_LIST_EDIT' , 'Править Список');
define('_JNEWS_MENU_BACK', 'Назад');
define('_JNEWS_MENU_INSTALL', 'Инсталляция');
define('_JNEWS_MENU_TAB_SUM', 'Резюме');
define('_JNEWS_STATUS', 'Состояние');

// сообщения
define('_JNEWS_ERROR' , ' Произошла ошибка! ');
define('_JNEWS_SUB_ACCESS' , 'Права доступа');
define('_JNEWS_DESC_CREDITS', 'О модуле');
define('_JNEWS_DESC_INFO', 'Информация');
define('_JNEWS_DESC_HOME', 'Домашняя страница');
define('_JNEWS_DESC_MAILING', 'Список рассылки');
define('_JNEWS_DESC_SUBSCRIBERS', 'Подписчики');
define('_JNEWS_PUBLISHED','Опубликовано');
define('_JNEWS_UNPUBLISHED','Не опубликовано');
define('_JNEWS_DELETE','Удалить');
define('_JNEWS_FILTER','Фильтр');
define('_JNEWS_UPDATE','Обновить');
define('_JNEWS_SAVE','Сохранить');
define('_JNEWS_CANCEL','Отменить');
define('_JNEWS_NAME','Имя');
define('_JNEWS_EMAIL','Электронная почта');
define('_JNEWS_SELECT','Выбрать');
define('_JNEWS_ALL','Все');
define('_JNEWS_SEND_A', 'Отправляются... ');
define('_JNEWS_SUCCESS_DELETED', ' удаление прошло успешно');
define('_JNEWS_LIST_ADDED', 'Список успешно создан');
define('_JNEWS_LIST_COPY', 'Список успешно скопирован');
define('_JNEWS_LIST_UPDATED', 'Список успешно обновлен');
define('_JNEWS_MAILING_SAVED', 'Почтовые отправления успешно сохранены.');
define('_JNEWS_UPDATED_SUCCESSFULLY', 'успешно обновлен.');

### Subscribers information ###
// подписка и отписка новостей
define('_JNEWS_SUB_INFO', 'Данные подписчика');
define('_JNEWS_VERIFY_INFO', 'Пожалуйста, проверьте введенную вами ссылку. Некоторая информация является недостающей.');
define('_JNEWS_INPUT_NAME', 'Имя');
define('_JNEWS_INPUT_EMAIL', 'Электронная почта');
define('_JNEWS_RECEIVE_HTML', 'Получать HTML?');
define('_JNEWS_TIME_ZONE', 'Часовой пояс');
define('_JNEWS_BLACK_LIST', 'Чёрный список');
define('_JNEWS_REGISTRATION_DATE', 'Дата регистрации пользователя');
define('_JNEWS_USER_ID', 'Идентификатор пользователя');
define('_JNEWS_DESCRIPTION', 'Описание');
define('_JNEWS_ACCOUNT_CONFIRMED', 'Ваша учетная запись активирована.');
define('_JNEWS_SUB_SUBSCRIBER', 'Подписчик');
define('_JNEWS_SUB_PUBLISHER', 'Издатель');
define('_JNEWS_SUB_ADMIN', 'Администратор');
define('_JNEWS_REGISTERED', 'Зарегистрировано');
define('_JNEWS_SUBSCRIPTIONS', 'Ваша подписка');
define('_JNEWS_SEND_UNSUBCRIBE', 'Сообщение об аннулировании подписки');
define('_JNEWS_SEND_UNSUBCRIBE_TIPS', 'Нажмите Да, чтобы посылать письмо с подтверждением аннулирования подписки.');
define('_JNEWS_SUBSCRIBE_SUBJECT_MESS', 'Пожалуйста, подтвердите подписку');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_MESS', 'Подтверждение отказа от подписки');
define('_JNEWS_DEFAULT_SUBSCRIBE_MESS', 'Здравствуйте, {tag:name},<br />' .
		'Еще один шаг, и вы будете подписаны на рассылку. Пожалуйста, перейдите по ссылке чтобы подтвердить подписку.' .
		'<br /><br />{tag:confirm}<br /><br />Если у вас возникли вопросы, пожалуйста, обратитесь к администратору.');
define('_JNEWS_DEFAULT_UNSUBSCRIBE_MESS', 'Настоящим письмом собщаем вам, что вы были удалены из числа наши подписчиков. Мы сожалеем о том, что Вы приняли решение отказаться от подписки. Если Вы захотите восстановить подписку, Вы всегда можете сделать это на нашем сайте. Если у Вас возникнут вопросы, обращайтесь к нашему администратору.');

// Подписчики jNews
define('_JNEWS_SIGNUP_DATE', 'Дата подписки');
define('_JNEWS_CONFIRMED', 'Подтверждено');
define('_JNEWS_SUBSCRIB', 'Подписаться');
define('_JNEWS_HTML', 'HTML рассылки');
define('_JNEWS_RESULTS', 'Результаты');
define('_JNEWS_SEL_LIST', 'Выберите список');
define('_JNEWS_SEL_LIST_TYPE', '- Выберите тип списка -');
define('_JNEWS_SUSCRIB_LIST', 'Список всех подписчиков');
define('_JNEWS_SUSCRIB_LIST_UNIQUE', 'Подписчики на:  ');
define('_JNEWS_NO_SUSCRIBERS', 'Для этого списка не найдено ни одного подписчика.');
define('_JNEWS_COMFIRM_SUBSCRIPTION', 'Вам было выслано письмо для подтверждения подписки.  Пожалуйста, проверь почту и перейдите по высланной ссылке.<br />' .
		'Чтобы подписка была активированна, вы должны подтвердить свой e-mail.');
define('_JNEWS_SUCCESS_ADD_LIST', 'Вы были успешно добавлены в список подписчиков.');


 // Subcription info
define('_JNEWS_CONFIRM_LINK', 'Нажмите здесь, чтобы подтвердить подписку');
define('_JNEWS_UNSUBSCRIBE_LINK', 'Нажмите здесь, чтобы удалить себя из списка подписчиков');
define('_JNEWS_UNSUBSCRIBE_MESS', 'Адрес вашей электронной почты был удален из списка');

define('_JNEWS_QUEUE_SENT_SUCCESS' , 'Все составленные рассылки были успешно разосланы.');
define('_JNEWS_MALING_VIEW', 'Показать все рассылки');
define('_JNEWS_UNSUBSCRIBE_MESSAGE', 'Вы уверены, что хотите отказаться от рассылки по данному листу?');
define('_JNEWS_MOD_SUBSCRIBE', 'Подписаться');
define('_JNEWS_SUBSCRIBE', 'Подписаться');
define('_JNEWS_UNSUBSCRIBE', 'Отказаться от подписки');
define('_JNEWS_VIEW_ARCHIVE', 'Показать архив');
define('_JNEWS_SUBSCRIPTION_OR', ' или нажмите здесь чтобы принять изменения');
define('_JNEWS_EMAIL_ALREADY_REGISTERED', 'Этот адрес уже есть в базе.');
define('_JNEWS_SUBSCRIBER_DELETED', 'Подписчик успешно удален.');


### Панель Пользователя ###
 // Пользовательское Меню
define('_JNEWS_UCP_USER_PANEL', 'Пользовательская Панель управления');
define('_JNEWS_UCP_USER_MENU', 'Пользовательское Меню');
define('_JNEWS_UCP_USER_CONTACT', 'Мои Подписки');
 // Меню Хрона jNews
define('_JNEWS_UCP_CRON_MENU', 'Управление Задачами Хрона');
define('_JNEWS_UCP_CRON_NEW_MENU', 'Новый Хрон');
define('_JNEWS_UCP_CRON_LIST_MENU', 'Список мой Хрон');
 // Меню Купона jNews
define('_JNEWS_UCP_COUPON_MENU', 'Управление Купонами');
define('_JNEWS_UCP_COUPON_LIST_MENU', 'Список Купонов');
define('_JNEWS_UCP_COUPON_ADD_MENU', 'Добавить Купон');

### списки ###
// Вкладки
define('_JNEWS_LIST_T_GENERAL', 'Описание');
define('_JNEWS_LIST_T_LAYOUT', 'Раскладка');
define('_JNEWS_LIST_T_SUBSCRIPTION', 'Подписка');
define('_JNEWS_LIST_T_SENDER', 'Данные отправителя');

define('_JNEWS_LIST_TYPE', 'Тип списка');
define('_JNEWS_LIST_NAME', 'Имя списка');
define('_JNEWS_LIST_ISSUE', 'Публикация #');
define('_JNEWS_LIST_DATE', 'Дата отправки');
define('_JNEWS_LIST_SUB', 'Тема рассылки');
define('_JNEWS_ATTACHED_FILES', 'Прикрепленные файлы');
define('_JNEWS_SELECT_LIST', 'Пожалуйста, выберите список для редактирования!');

// Окно автоответчика
define('_JNEWS_AUTORESP_ON', 'Тип списка');
define('_JNEWS_AUTO_RESP_OPTION', 'Настройки автоответчика');
define('_JNEWS_AUTO_RESP_FREQ', 'Подписчики могут выбирать периодичность рассылки');
define('_JNEWS_AUTO_DELAY', 'Перерыв (в днях)');
define('_JNEWS_AUTO_DAY_MIN', 'Минимальная частота');
define('_JNEWS_AUTO_DAY_MAX', 'Максимальная частота');
define('_JNEWS_FOLLOW_UP', 'Определить прикрепленный автоответчик');
define('_JNEWS_AUTO_RESP_TIME', 'Подписчики могут выбирать время');
define('_JNEWS_LIST_SENDER', 'Отправитель списка');

define('_JNEWS_LIST_DESC', 'Описание списка');
define('_JNEWS_LAYOUT', 'Стиль');
define('_JNEWS_SENDER_NAME', 'Имя отправителя');
define('_JNEWS_SENDER_EMAIL', 'Эл. адрес отправителя');
define('_JNEWS_SENDER_BOUNCE', 'Обратный адрес отправителя');
define('_JNEWS_LIST_DELAY', 'Перерыв');
define('_JNEWS_HTML_MAILING', 'HTML рассылка?');
define('_JNEWS_HTML_MAILING_DESC', '(Если Вы сохраните это, Вам будет необходимо выйти и снова войти на страницу, чтобы увидеть изменения.)');
define('_JNEWS_HIDE_FROM_FRONTEND', 'Не показывать во фронтенд?');
define('_JNEWS_SELECT_IMPORT_FILE', 'Выберите файл для импорта');;
define('_JNEWS_IMPORT_FINISHED', 'Импортирование закончено');
define('_JNEWS_DELETION_OFFILE', 'Удаление файла');
define('_JNEWS_MANUALLY_DELETE', 'не состоялось, вы должны вручную удалить файл');
define('_JNEWS_CANNOT_WRITE_DIR', 'Не могу записать в директорию');
define('_JNEWS_NOT_PUBLISHED', 'Не могу разослать рассылку.Список не опубликован.');

//  Информационный блок списков
define('_JNEWS_INFO_LIST_PUB', 'Надмите Да, чтобы опубликовать список.');
define('_JNEWS_INFO_LIST_NAME', 'Введите имя списка. С помощью этого имени Вы сможете идентифицировать список.');
define('_JNEWS_INFO_LIST_DESC', 'Введите краткое описание вашего списка. Оно будет доступно для посетителей вашего ресурса.');
define('_JNEWS_INFO_LIST_SENDER_NAME', 'Введите имя отправителя сообщения. Это имя будут видеть Ваши подписчики в графе "от кого".');
define('_JNEWS_INFO_LIST_SENDER_EMAIL', 'Введите электронный адрес, с которого будут отправляться сообщения.');
define('_JNEWS_INFO_LIST_SENDER_BOUNCED', 'Введите электронный адрес для ответов подписчиков. Настоятельно рекомендуется указывать тот же адрес, что и у автора рассылки, так как такое письмо легче проходит через спам-фильтры почтовых систем.');
define('_JNEWS_INFO_LIST_AUTORESP', 'Выберите тип рассылок для данного списка. <br />' .
		'Новостная рассылка: Обычная новостная рассылка<br />' .
		'Автоответчик: автоответчик это лист, который рассылается автоматически через веб-сайт через заданные промежутки времени.');
define('_JNEWS_INFO_LIST_FREQUENCY', 'Разрешить пользователям выбирать, насколько часто они будут получать письма. Это рассылку более гибкой и удобной для пользователей.');
define('_JNEWS_INFO_LIST_TIME', 'Разрешить пользователям выбирать время дня, предпочтительное для получения рассылки.');
define('_JNEWS_INFO_LIST_MIN_DAY', 'Установите минимальную периодичность получения рассылки, которую может выбрать пользователь.');
define('_JNEWS_INFO_LIST_DELAY', 'Задайте интервал между работой этого автоответчика и предыдущего.');
define('_JNEWS_INFO_LIST_DATE', 'Установите дату отправки (публикации) новостной рассылки, если Вы хотите отложить публикацию.<br /> FORMAT : YYYY-MM-DD HH:MM:SS');
define('_JNEWS_INFO_LIST_MAX_DAY', 'Установите максимальную периодичность получения рассылки, которую может выбрать пользователь.');
define('_JNEWS_INFO_LIST_LAYOUT', 'Введите стиль Вашего списка подписки. Здесь Вы можете ввести любой стиль для Ваших рассылок.');
define('_JNEWS_INFO_LIST_SUB_MESS', 'Это сообщение будет отправлено пользователю, который впервые зарегистрировался. Вы можете ввести здесь любой свой текст.');
define('_JNEWS_INFO_LIST_UNSUB_MESS', 'Это сообщение будет отправлено пользователю, который аннулирует подписку. Вы можете ввести здесь любой свой текст.');
define('_JNEWS_INFO_LIST_HTML', 'Выберите эту опцию, если Вы хотите рассылать сообщения в формате HTML. Пользователи могут выбирать между HTML вариантом рассылки и обычным текстом, когда подписываются на HTML рассылку.');
define('_JNEWS_INFO_LIST_HIDDEN', 'Нажмите Да, чтобы убрать подписку с фронтенда. Пользователи не смогут подписаться на рассылку, но Вы по-прежнему сможете отправлять сообщения уже подписавшимся.');
define('_JNEWS_INFO_LIST_JNEWS_AUTO_SUB', 'Вы хотите, чтобы пользователи автоматически добавлялись в этот список?<br /><B>Новые пользователи:</B> будут зарегистрированы все новые пользователи, зарегистрированные на сайте .<br /><B>Все пользователи:</B> будут зарегистрированы все пользователи, содержащиеся в базе данных.<br />(выбор варианта Все поддерживает Community Builder)');
define('_JNEWS_INFO_LIST_ACC_LEVEL', 'Выберите уровень доступа с фронтенда. Это позволяет показывать или скрывать рассылки от пользователей, которые не должны иметь доступа к этим подпискам, то есть они не смогут подписаться на эти рассылки.');
define('_JNEWS_INFO_LIST_ACC_USER_ID', 'Выберите уровень доступа для групп пользователей, которым разрешено редактирование. Эта группа и другие с более высокими уровнями доступа смогут редактировать рассылку и осуществлять отправку, как с фронтенда, так и из панели администратора.');
define('_JNEWS_INFO_LIST_FOLLOW_UP', 'Если Вы хотите, чтобы автоответчик передал действие другому, после того как дойдет до последнего сообщения, определите здесь последующий.');
define('_JNEWS_INFO_LIST_JNEWS_OWNER', 'Это ID пользователя, создавшего список.');
define('_JNEWS_INFO_LIST_WARNING', '   Эта последняя опция доступна только при создании списка.');
define('_JNEWS_INFO_LIST_SUBJET', ' Тема рассылки.  Это тема письма, которую будет видеть подписчик.');
define('_JNEWS_INFO_MAILING_CONTENT', 'Это содержание письма, которое Вы хотите отправить.');
define('_JNEWS_INFO_MAILING_NOHTML', 'Введите здесь содержание письма, которое Вы хотите отправить подписчикам решившим получать только HTML рассылки. <BR/> ЗАМЕЧАНИЕ: если вы оставите эту опцию пустой, то jNews автоматически преобразует HTML текст в обычный текст.');
define('_JNEWS_INFO_MAILING_VISIBLE', 'Нажмите Да, чтобы отображать рассылку во фронтенде.');
define('_JNEWS_INSERT_CONTENT', 'Вставить существующий контент');

// Купоны
define('_JNEWS_SEND_COUPON_SUCCESS', 'Купон успешно отправлен!');
define('_JNEWS_CHOOSE_COUPON', 'Выберите купон');
define('_JNEWS_TO_USER', ' этому пользователю');

### опции Хрона (демон ОС Unix, исполняющий предписанные команды в строго определённые дни и часы, указанные в специальном файле)
//надписи частоты рассылки Хрона
define('_JNEWS_FREQ_CH1', 'Каждый час');
define('_JNEWS_FREQ_CH2', 'Каждые 6 часов');
define('_JNEWS_FREQ_CH3', 'Каждые 12 часов');
define('_JNEWS_FREQ_CH4', 'Ежедневно');
define('_JNEWS_FREQ_CH5', 'Еженедельно');
define('_JNEWS_FREQ_CH6', 'Ежемесячно');
define('_JNEWS_FREQ_NONE', 'Нет');
define('_JNEWS_FREQ_NEW', 'Новый пользователь');
define('_JNEWS_FREQ_ALL', 'Все пользователи');

//Подписи для формы Хрона
define('_JNEWS_LABEL_FREQ', 'jNews Хрон?');
define('_JNEWS_LABEL_FREQ_TIPS', 'Нажмите Да, если Вы хотите использовать это для Хрона jNews, Нет для любого другого Хрон задания.<br />' .
		'Если выберете Да, Вам не нужно будет задавать адрес Хрона, он будет автоматически добавлен.');
define('_JNEWS_SITE_URL' , 'URL вашего сайта');
define('_JNEWS_CRON_FREQUENCY' , 'Частота запуска Хрона');
define('_JNEWS_STARTDATE_FREQ' , 'Дата начала');
define('_JNEWS_LABELDATE_FREQ' , 'Выберите дату');
define('_JNEWS_LABELTIME_FREQ' , 'Выберите время');
define('_JNEWS_CRON_URL', 'Хрон URL');
define('_JNEWS_CRON_FREQ', 'Частота');
define('_JNEWS_TITLE_CRONLIST', 'Список задач Хрона');
define('_JNEWS_NEW_LIST', 'Создать новый список');

//заголовок формы Хрона
define('_JNEWS_TITLE_FREQ', 'Редактор Хрона');
define('_JNEWS_CRON_SITE_URL', 'Пожалуйста, введите правильный адресс, начинающийся с http://');

### Рассылки ###
define('_JNEWS_MAILING_ALL', 'Все рассылки');
define('_JNEWS_EDIT_A', 'Редактировать... ');
define('_JNEWS_SELCT_MAILING', 'Пожалуйста, выберите список в выпадающем меню, чтобы добавить новую рассылку.');
define('_JNEWS_VISIBLE_FRONT', 'Видна во фронтенде');

// рассыльщик
define('_JNEWS_SUBJECT', 'Тема');
define('_JNEWS_CONTENT', 'Содержание');
define('_JNEWS_NAMEREP', '{tag:name} = Это будет заменено на имя введенное подписчиком, При использовании этого, Вы будете рассылать письма, написанные непосредственно на имя подписчика.<br />');
define('_JNEWS_FIRST_NAME_REP', '{tag:firstname} = Это будет заменено на Имя (имя, введенное первым) подписчика.<br />');
define('_JNEWS_NONHTML', 'Не html версия');
define('_JNEWS_ATTACHMENTS', 'Прикрепленные данные');
define('_JNEWS_SELECT_MULTIPLE', 'Удерживайте ctrl, чтобы выбрать сразу несколько элементов.<br />' .
		'Файлы, показанные в списке прикрепленных данных расположены в папке прикрепленных файлов, Вы можете изменить их местонахождение в панели конфигурации.');
define('_JNEWS_CONTENT_ITEM', 'Часть контента');
define('_JNEWS_SENDING_EMAIL', 'Идет рассылка');
define('_JNEWS_MESSAGE_NOT', 'Сообщение не может быть отослано');
define('_JNEWS_MAILER_ERROR', 'Ошибка отправки');
define('_JNEWS_MESSAGE_SENT_SUCCESSFULLY', 'Сообщение было успешно отправлено');
define('_JNEWS_SENDING_TOOK', 'Отправка данной рассылки заняла');
define('_JNEWS_SECONDS', 'сек.');
define('_JNEWS_NO_ADDRESS_ENTERED', 'Не доступно ни одного адреса подписчика для оправки');
define('_JNEWS_CHANGE_SUBSCRIPTIONS', 'Изменить');
define('_JNEWS_CHANGE_EMAIL_SUBSCRIPTION', 'Изменение Вашей подписки');
define('_JNEWS_WHICH_EMAIL_TEST', 'Выберите e-mail, чтобы отправить на него тестовое сообщение, или нажмите предпросмотр');
define('_JNEWS_SEND_IN_HTML', 'Оправлять в HTML  формате (для html рассылок)?');
define('_JNEWS_VISIBLE', 'Видимое');
define('_JNEWS_INTRO_ONLY', 'Только вступление');

// статистика
define('_JNEWS_GLOBALSTATS', 'Глобальная статистика');
define('_JNEWS_DETAILED_STATS', 'Детализированная статистика');
define('_JNEWS_MAILING_LIST_DETAILS', 'Детали списка рассылки');
define('_JNEWS_SEND_IN_HTML_FORMAT', 'Отправлять в HTML формате');
define('_JNEWS_VIEWS_FROM_HTML', 'Просмотры (из сообщений, отправленных в формате html)');
define('_JNEWS_SEND_IN_TEXT_FORMAT', 'Разослано в текстовом формате');
define('_JNEWS_HTML_READ', 'HTML прочитано');
define('_JNEWS_HTML_UNREAD', 'HTML не прочитано');
define('_JNEWS_TEXT_ONLY_SENT', 'Только текст');

// Панель Конфигурирования
// закладки
define('_JNEWS_MAIL_CONFIG', 'Почта');
define('_JNEWS_LOGGING_CONFIG', 'Логи и статистика');
define('_JNEWS_SUBSCRIBER_CONFIG', 'Подписчики');
define('_JNEWS_MISC_CONFIG', 'Разное');
define('_JNEWS_MAIL_SETTINGS', 'Настройки почты');
define('_JNEWS_MAILINGS_SETTINGS', 'Настройки рассылок');
define('_JNEWS_SUBCRIBERS_SETTINGS', 'Настройки подписчиков');
define('_JNEWS_CRON_SETTINGS', 'Настройки Хрона');
define('_JNEWS_SENDING_SETTINGS', 'Настройки отправки');
define('_JNEWS_STATS_SETTINGS', 'Настройки статистики');
define('_JNEWS_LOGS_SETTINGS', 'Настройки логов');
define('_JNEWS_MISC_SETTINGS', 'Другие настройки');
// mail settings
define('_JNEWS_SEND_MAIL_FROM', 'Адрес отправителя');
define('_JNEWS_SEND_MAIL_NAME', 'Имя отправителя');
define('_JNEWS_MAILSENDMETHOD', 'Метод рассылки');
define('_JNEWS_SENDMAILPATH', 'Путь к папке "Отосланные"');
define('_JNEWS_SMTPHOST', 'SMTP сервер');
define('_JNEWS_SMTPAUTHREQUIRED', 'Требуется аутентификация для SMTP');
define('_JNEWS_SMTPAUTHREQUIRED_TIPS', 'Выберите Да, если Ваш SMTP требует аутентификацию');
define('_JNEWS_SMTPUSERNAME', 'SMTP логин');
define('_JNEWS_SMTPUSERNAME_TIPS', 'Введите SMTP логин, если Ваш SMTP требует аутентификацию');
define('_JNEWS_SMTPPASSWORD', 'SMTP пароль');
define('_JNEWS_SMTPPASSWORD_TIPS', 'Введите SMTP пароль, если Ваш SMTP требует аутентификацию');
define('_JNEWS_USE_EMBEDDED', 'Использовать вставленные изображения');
define('_JNEWS_USE_EMBEDDED_TIPS', 'Выберите "Да", если картинки в прикрепленных элементах должны быть уложены в письмо для html сообщений, или "Нет", чтобы использовать обычные теги картинок, ссылающихся на картинки на веб-ресурсе.');
define('_JNEWS_UPLOAD_PATH', 'Путь к папке Загрузки/Вложения');
define('_JNEWS_UPLOAD_PATH_TIPS', 'Вы можете задать директорию для загрузки файлов на сервер<br />' .
		'Убедитесь, что директория, которую вы создали существует, если её нет, то создайте ее.');

// настройки подписчиков
define('_JNEWS_ALLOW_UNREG', 'Позволять незарегистрированным');
define('_JNEWS_ALLOW_UNREG_TIPS', 'Выберите "Да", если Вы хотите разрешить пользователям подписываться на рассылку без регистрации на сайте.');
define('_JNEWS_REQ_CONFIRM', 'Требовать письмо-подтверждение');
define('_JNEWS_REQ_CONFIRM_TIPS', 'Выберите "Да", если требуете от незарегистрировавшихся пользователей подтверждения их электронной почте.');
define('_JNEWS_SUB_SETTINGS', 'Настройки подписчика');
define('_JNEWS_SUBMESSAGE', 'Адрес для подписки');
define('_JNEWS_SUBSCRIBE_LIST', 'Подписаться на рассылку');

define('_JNEWS_USABLE_TAGS', 'Полезные тэги');
define('_JNEWS_NAME_AND_CONFIRM', '<b>{tag:confirm}</b> = создает кликабельную ссылку, пройдя по которой пользователь может подтвердить подписку. Эта опция <strong>необходима</strong>, чтобы jNews работал правильно.<br />'
.'<br />{tag:name} = Это будет заменено на имя введенное подписчиком, При использовании этого, Вы будете рассылать письма, написанные непосредственно на имя подписчика.<br />'
.'<br />{tag:firstname} = Это будет заменено ИМЕНЕМ подписчика, за имя подписчика принимается первое из введенных имен.<br />');
define('_JNEWS_CONFIRMFROMNAME', 'Подтверждение, от:');
define('_JNEWS_CONFIRMFROMNAME_TIPS', 'Введите имя отправителя для показа в сообщениях подтверждения подписки.');
define('_JNEWS_CONFIRMFROMEMAIL', 'Подтверждение, с адреса:');
define('_JNEWS_CONFIRMFROMEMAIL_TIPS', 'Введите адрес для показа в сообщениях подтверждения подписки.');
//define('_JNEWS_CONFIRMBOUNCE', 'E-mail адрес для уведомлений о несуществующих адресах');
//define('_JNEWS_CONFIRMBOUNCE_TIPS', 'Введите адрес, который будет отображаться в сообщениях подтверждения подписки, и на который Вы хотели бы, чтобы поступали сообщения о несуществующих e-mail адресах подписчиков.');
define('_JNEWS_HTML_CONFIRM', 'HTML подтверждение');
define('_JNEWS_HTML_CONFIRM_TIPS', 'Выберите "Да", если Вы хотите отправлять сообщения подтверждения в формате HTML (если пользователь разрешил присылать ему такие письма).');
define('_JNEWS_TIME_ZONE_ASK', 'Спрашивать часовой пояс');
define('_JNEWS_TIME_ZONE_TIPS', 'Выберите "Да", если хотите запрашивать ввод часового пояса. Рассылки, находящиеся в очереди будут выполняться используя это значение.');

 // Настройки Хрона
 define('_JNEWS_AUTO_CONFIG', 'Хрон');
define('_JNEWS_TIME_OFFSET_URL', 'Нажмите здесь, чтобы установить расхождение в панели глобальной конфигурации - Локаль');
define('_JNEWS_TIME_OFFSET_TIPS', 'Установите временное смещение сервера, которое будет вписано в точную дату и время');
define('_JNEWS_TIME_OFFSET', 'Сдвиг времени');
define('_JNEWS_CRON_DESC','<br />Используя функцию Хрон, Вы можете установить автоматическую задачу, которая будет выполняться по расписанию, для Вашего сайта!<br />' .
		'Чтобы настроить это, Вам нужно добавить из панели управления в задачи по расписанию следующую команду:<br />' .
		'<b>' . JNEWS_JPATH_LIVE . '/index.php?option=com_jnews&act=cron</b> ' .
		'<br /><br />Если вам понадобится помощь, то получить её можно на форуме разработчиков <a href="http://www.joobi.co" target="_blank">http://www.joobi.co</a>');

// установки отправки
define('_JNEWS_PAUSEX', 'Пауза x секунд после каждого сконфигурированного и заданного количества писем');
define('_JNEWS_PAUSEX_TIPS', 'Введите время в секундах, которое jNews будет давать Вашему SMTP серверу в качестве паузы между отправками заданного сконфигурированного количества писем.');
define('_JNEWS_EMAIL_BET_PAUSE', 'Письма между паузами');
define('_JNEWS_EMAIL_BET_PAUSE_TIPS', 'Количество писем для отправки до паузы.');
define('_JNEWS_WAIT_USER_PAUSE', 'Ждать ввода пользователем команды при паузе');
define('_JNEWS_WAIT_USER_PAUSE_TIPS', 'Должен ли скрипт при паузе ожидать ввода пользователем команды для отправки следующего пакета писем.');
define('_JNEWS_SCRIPT_TIMEOUT', 'Пауза скрипта');
define('_JNEWS_SCRIPT_TIMEOUT_TIPS', 'Количество минут, которое скрипт будет запущен (0 для снятия ограничения).');
// установки статистики
define('_JNEWS_ENABLE_READ_STATS', 'Разрешить вести статистику');
define('_JNEWS_ENABLE_READ_STATS_TIPS', 'Выберите Да, если Вы хотите сохранять количество просмотров. Данная статистика может вестись только для писем в формате HTML');
define('_JNEWS_LOG_VIEWSPERSUB', 'Записывать просмотры пользователя');
define('_JNEWS_LOG_VIEWSPERSUB_TIPS', 'Выберите Да, если Вы хотите сохранять количество просмотров выпусков рассылки отдельным подписчиком. Данная статистика может вестись только для писем в формате HTML');
// установки логов
define('_JNEWS_DETAILED', 'Детальные логи');
define('_JNEWS_SIMPLE', 'Упрощенные логи');
define('_JNEWS_DIAPLAY_LOG', 'Отображать логи');
define('_JNEWS_DISPLAY_LOG_TIPS', 'Выберите "Да", если хотите отображать логи в момент рассылки писем.');
define('_JNEWS_SEND_PERF_DATA', 'Отсылать статистику');
define('_JNEWS_SEND_PERF_DATA_TIPS', 'Выберите "Да", если Вы хотите разрешить, чтобы jNews отсылал АНОНИМНЫЕ сведения о конфигурации, количестве подписчиков и времени, которое занимает отправка сообщений. Это даст разработчикам идеи по улучшению работы компонента и поможет оптимизировать его в будущих релизах.');
define('_JNEWS_SEND_AUTO_LOG', 'Отправлять логи для автореспондера');
define('_JNEWS_SEND_AUTO_LOG_TIPS', 'Выберите Да, если Вы хотите, чтобы программа отправляла Вам сообщение каждый раз, когда обработан запрос. Предупреждение: это может привести к большому количеству сообщений в Вашем почтовом ящике.');
define('_JNEWS_SEND_LOG', 'Отправлять лог');
define('_JNEWS_SEND_LOG_TIPS', 'Должен ли быть лог отправки рассылки быть отправлен на почтовый адрес пользователя, который произвел рассылку.');
define('_JNEWS_SEND_LOGDETAIL', 'Отправлять детальные логи');
define('_JNEWS_SEND_LOGDETAIL_TIPS', 'Детальные логи включают в себя информацию об успешной или неудачной отправке сообщения каждому подписчику и обзор информации (статистику). Упрощенные отсылают только обзор.');
define('_JNEWS_SEND_LOGCLOSED', 'Отправлять лог, если соединение закрыто');
define('_JNEWS_SEND_LOGCLOSED_TIPS', 'С этой включенной опцией пользователь, производящий рассылку, получит отчет о рассылке по электронной почте.');
define('_JNEWS_SAVE_LOG', 'Сохранять лог');
define('_JNEWS_SAVE_LOG_TIPS', 'Должен ли лог отправки рассылки быть сохранен в файле лога');
define('_JNEWS_SAVE_LOGDETAIL', 'Сохранять детальный лог');
define('_JNEWS_SAVE_LOGDETAIL_TIPS', 'Детальные логи включают в себя информацию об успешной или неудачной отправке сообщения каждому подписчику и обзор информации (статистику). Упрощенные включают только обзор.');
define('_JNEWS_SAVE_LOGFILE', 'Сохранить файл лога');
define('_JNEWS_SAVE_LOGFILE_TIPS', 'Файл, в который записывается информация лога. Позднее этот файл может стать значительно больше.');
define('_JNEWS_CLEAR_LOG', 'Очистить лог');
define('_JNEWS_CLEAR_LOG_TIPS', 'Очистить файл лога.');

### панель управления
define('_JNEWS_CP_LAST_QUEUE', 'Последний обработанный запрос');
define('_JNEWS_CP_TOTAL', 'Всего');
define('_JNEWS_MAILING_COPY', 'Рассылка успешно скопирована!');

// разнообразные настройки
define('_JNEWS_SHOW_GUIDE', 'Показать руководство');
define('_JNEWS_SHOW_GUIDE_TIPS', 'Показывать руководство при старте программы, чтобы помочь новым пользователям создать новостную рассылку, настроить автореспондер и корректно настроить jNews.');
define('_JNEWS_AUTOS_ON', 'Использовать Автореспондеры');
define('_JNEWS_AUTOS_ON_TIPS', 'Выберите Нет, если Вы не хотите использовать автореспондеры, и опции автореспондеров будут деактивированы.');
define('_JNEWS_NEWS_ON', 'Использовать Новостные рассылки');
define('_JNEWS_NEWS_ON_TIPS', 'Выберите Нет, если Вы не хотите использовать новостные рассылки, и все их опции будут деактивированы.');
define('_JNEWS_SHOW_TIPS', 'Показывать советы');
define('_JNEWS_SHOW_TIPS_TIPS', 'Показать советы, чтобы помочь пользователям использовать jNews более эффективно.');
define('_JNEWS_SHOW_FOOTER', 'Показывать футер (footer)');
define('_JNEWS_SHOW_FOOTER_TIPS', 'Должно ли быть показано извещение об авторских правах.');
define('_JNEWS_SHOW_LISTS', 'Показывать список во фронтенде');
define('_JNEWS_SHOW_LISTS_TIPS', 'Показывать незарегистрированным пользователям список рассылок, на которые они могут подписаться с кнопкой перехода в архив подписки, или же просто форму регистрации, чтобы они могли зарегистрироваться.');
define('_JNEWS_CONFIG_UPDATED', 'Конфигурация была успешно обновлена!');
define('_JNEWS_UPDATE_URL', 'URL для обновлений');
define('_JNEWS_UPDATE_URL_WARNING', 'ВНИМАНИЕ! Не изменяйте этот URL, кроме случаев, когда Вас об этом просит техническая команда jNews.<br />');
define('_JNEWS_UPDATE_URL_TIPS', 'Пример: http://www.joobi.co/update/ (Включая закрывающий слеш)');

// модуль
define('_JNEWS_EMAIL_INVALID', 'Введенный e-mail некорректен.');
define('_JNEWS_REGISTER_REQUIRED', 'Пожалуйста, зарегистрируйтесь на сайте перед тем, как Вы подпишетесь на рассылку.');

// блок уровней доступа
define('_JNEWS_OWNER', 'Создатель рассылки:');
define('_JNEWS_ACCESS_LEVEL', 'Установить уровень доступа к рассылке');
define('_JNEWS_ACCESS_LEVEL_OPTION', 'Опции доступа');
define('_JNEWS_USER_LEVEL_EDIT', 'Выберите, какая группа пользователей сможет редактировать рассылку по этому списку (как с фронтенда, так и с бэкенда)');

//  выпадающие опции
define('_JNEWS_AUTO_DAY_CH1', 'Ежедневно');
define('_JNEWS_AUTO_DAY_CH2', 'Ежедневно, кроме выходных');
define('_JNEWS_AUTO_DAY_CH3', 'По дням недели');
define('_JNEWS_AUTO_DAY_CH4', 'По дням недели, кроме праздников');
define('_JNEWS_AUTO_DAY_CH5', 'Еженедельно');
define('_JNEWS_AUTO_DAY_CH6', 'Раз в две недели');
define('_JNEWS_AUTO_DAY_CH7', 'Ежемесячно');
define('_JNEWS_AUTO_DAY_CH9', 'Ежегодно');
define('_JNEWS_AUTO_OPTION_NONE', 'Нет');
define('_JNEWS_AUTO_OPTION_NEW', 'Новые Подписчики');
define('_JNEWS_AUTO_OPTION_ALL', 'Все Подписчики');

//
define('_JNEWS_UNSUB_MESSAGE', 'Письмо об аннулировании подписки');
define('_JNEWS_UNSUB_SETTINGS', 'Установки аннулирования подписки');
define('_JNEWS_AUTO_ADD_NEW_USERS', 'Автоподписка пользователей?');

// Update and upgrade messages
define('_JNEWS_NO_UPDATES', 'Нет возможных обновлений.');
define('_JNEWS_VERSION', 'Версия jNews');
define('_JNEWS_NEED_UPDATED', 'Файлы, которые необходимо заменить на новые:');
define('_JNEWS_NEED_ADDED', 'Файлы, которые необходимо добавить:');
define('_JNEWS_NEED_REMOVED', 'Файлы, которые необходимо удалить:');
define('_JNEWS_FILENAME', 'Имя файла:');
define('_JNEWS_CURRENT_VERSION', 'Текущая версия:');
define('_JNEWS_NEWEST_VERSION', 'Последняя версия:');
define('_JNEWS_UPDATING', 'Идет обновление');
define('_JNEWS_UPDATE_UPDATED_SUCCESSFULLY', 'Файлы были успешно обновлены.');
define('_JNEWS_UPDATE_FAILED', 'Не удалось обновить!');
define('_JNEWS_ADDING', 'Идет добавление');
define('_JNEWS_ADDED_SUCCESSFULLY', 'Добавление прошло успешно.');
define('_JNEWS_ADDING_FAILED', 'Не удалось добавить!');
define('_JNEWS_REMOVING', 'Идет удаление');
define('_JNEWS_REMOVED_SUCCESSFULLY', 'Удаление прошло успешно.');
define('_JNEWS_REMOVING_FAILED', 'Не удалось удалить!');
define('_JNEWS_INSTALL_DIFFERENT_VERSION', 'Проинсталлируйте другую версию');
define('_JNEWS_CONTENT_ADD', 'Добавить содержимое');
define('_JNEWS_UPGRADE_FROM', 'Импорт информации (выпусков рассылок и подписчиков) из: ');
define('_JNEWS_UPGRADE_MESS', 'Нет никакого риска потерять Ваши существующие данные. <br /> Этот процесс просто импортирует информацию в базу данных jNews.');
define('_JNEWS_CONTINUE_SENDING', 'Продолжить отправку');

// сообщения jNews
define('_JNEWS_UPGRADE1', 'Вы можете легко импортировать своих подписчиков и сообщения из ');
define('_JNEWS_UPGRADE2', ' в jNews через панель обновлений.');
define('_JNEWS_UPDATE_MESSAGE', 'Доступна новая версия jNews! ');
define('_JNEWS_UPDATE_MESSAGE_LINK', 'Нажмите здесь для обновления!');
define('_JNEWS_THANKYOU', 'Спасибо Вам за использование jNews, Вашего коммуникационного партнера!');
define('_JNEWS_NO_SERVER', 'Сервер обновлений недоступен, пожалуйста, попробуйте позднее.');
define('_JNEWS_MOD_PUB', 'Модуль jNews не опубликован.');
define('_JNEWS_MOD_PUB_LINK', 'Нажмите здесь для его публикации!');
define('_JNEWS_IMPORT_SUCCESS', 'успешно импортировано');
define('_JNEWS_IMPORT_EXIST', 'подписчик уже существует в базе');

// установка jNews
define('_JNEWS_INSTALL_CONFIG', 'Конфигурация jNews');
define('_JNEWS_INSTALL_SUCCESS', 'Установка успешна');
define('_JNEWS_INSTALL_ERROR', 'Ошибка установки');
define('_JNEWS_INSTALL_BOT', 'Плагин (Бот) jNews ');
define('_JNEWS_INSTALL_MODULE', 'Модуль jNews');
//Другое
define('_JNEWS_JAVASCRIPT','!Внимание! Javascript должен быть включен для корректной работы.');
define('_JNEWS_EXPORT_TEXT','Подписчики экспортируются на основе выбранного Вами списка.<br />Экспорт подписчиков из списка');
define('_JNEWS_IMPORT_TIPS','Импорт подписчиков. Информация в импортируемом файле должна быть в следующем формате: <br />' .
		'Имя,email,получатьHTML(1/0),<span style="color: rgb(255, 0, 0);">подтвержден(1/0)</span>');
define('_JNEWS_SUBCRIBER_EXIT', 'уже является подписчиком');
define('_JNEWS_GET_STARTED', 'Нажмите здесь, чтобы начать!');

//Новое, начиная с 1.0.1
define('_JNEWS_WARNING_1011','Предупреждение: 1011: Обновления не будут работать из-за ограничений на Вашем сервере.');
define('_JNEWS_SEND_MAIL_FROM_TIPS', 'Выберите, какой email адрес будет показываться как адрес отправителя.');
define('_JNEWS_SEND_MAIL_NAME_TIPS', 'Выберите, какое имя будет показываться как имя отправителя.');
define('_JNEWS_MAILSENDMETHOD_TIPS', 'Выберите метод отправки почты: почтовая функция PHP<span>Sendmail</span> или SMTP сервер.');
define('_JNEWS_SENDMAILPATH_TIPS', 'Это директория почтового сервера');
define('_JNEWS_LIST_T_TEMPLATE', 'Шаблон');
define('_JNEWS_NO_MAILING_ENTERED', 'Не выбрана рассылка');
define('_JNEWS_NO_LIST_ENTERED', 'Не выбран список');
define('_JNEWS_SENT_MAILING' , 'Отправленные рассылки');
define('_JNEWS_SELECT_FILE', 'Выберите файл для ');
define('_JNEWS_LIST_IMPORT', 'Выберите списки, с которыми Вы хотели бы проассоциировать своих подписчиков');
define('_JNEWS_PB_QUEUE', 'Подписчик добавлен, но возникла проблема при присоедии его к списку(-ам). Пожалуйста, проверьте вручную.');
define('_JNEWS_UPDATE_MESS' , '');
define('_JNEWS_UPDATE_MESS1' , 'Настоятельно рекомендуется обновить!');
define('_JNEWS_UPDATE_MESS2' , 'Патчи и маленькие доделки.');
define('_JNEWS_UPDATE_MESS3' , 'Новый релиз.');
define('_JNEWS_UPDATE_MESS5' , 'Joomla 1.5 необходима для обновления.');
define('_JNEWS_UPDATE_IS_AVAIL' , ' доступен!');
define('_JNEWS_NO_MAILING_SENT', 'Нет отправленных рассылок!');
define('_JNEWS_SHOW_LOGIN', 'Показывать форму логина');
define('_JNEWS_SHOW_LOGIN_TIPS', 'Выберите Да, чтобы показывать форму авторизации во фронтенде панели управления jNews, чтобы пользователь мог зарегистрироваться на сайте.');
define('_JNEWS_LISTS_EDITOR', 'Редактор описания списка');
define('_JNEWS_LISTS_EDITOR_TIPS', 'Выберите Да, чтобы использовать HTML-редактор для редактирования поля описания списка.');
define('_JNEWS_SUBCRIBERS_VIEW', 'Просмотр подписчиков');

//Новое, начиная с 1.0.2
define('_JNEWS_FRONTEND_SETTINGS' , 'Настройки фронтенда' );
define('_JNEWS_SHOW_LOGOUT', 'Показывать кнопку выхода');
define('_JNEWS_SHOW_LOGOUT_TIPS', 'Выберите Да, чтобы показывать кнопку выхода во фронтенде панели управления jNews.');

//Новое, начиная с 1.0.3, CB интеграция

define('_JNEWS_CONFIG_INTEGRATION', 'Интеграция');
define('_JNEWS_CB_INTEGRATION', 'Интеграция с Community Builder');
define('_JNEWS_INSTALL_PLUGIN', 'Плагин для Community Builder (Интеграция с jNews) ');
define('_JNEWS_CB_PLUGIN_NOT_INSTALLED', 'Плагин jNews для Community Builder еще не установлен!');
define('_JNEWS_CB_PLUGIN', 'Списки при регистрации');
define('_JNEWS_CB_PLUGIN_TIPS', 'Выберите Да, чтобы показывать перечень Списков в форме регистрации Community Builder');
define('_JNEWS_CB_LISTS', 'Идентификаторы Списков');
define('_JNEWS_CB_LISTS_TIPS', 'ЭТО ПОЛЕ ОБЯЗАТЕЛЬНО ДЛЯ ЗАПОЛНЕНИЯ. Введите через запятую номера id Списков, которые должны видеть пользователи при регистрации для подписки на них,  (При установке поля в 0 будут показаны все списки)');
define('_JNEWS_CB_INTRO', 'Текст приветствия');
define('_JNEWS_CB_INTRO_TIPS', 'Текст, который появится до перечня возможных подписок. ОСТАВЬТЕ ПУСТЫМ, ЕСЛИ НИЧЕГО НЕ ХОТИТЕ ПОКАЗЫВАТЬ. Вы можете использовать тэги HTML для изменения внешнего вида текста.');
define('_JNEWS_CB_SHOW_NAME', 'Показывать название Списка');
define('_JNEWS_CB_SHOW_NAME_TIPS', 'Выберите, показывать или нет название Списка(ов) после приветствия.');
define('_JNEWS_CB_LIST_DEFAULT', 'Список выбран по умолчанию?');
define('_JNEWS_CB_LIST_DEFAULT_TIPS', 'Выберите, должен ли чекбокс уже быть отмечен для каждого Списка по умолчанию.');
define('_JNEWS_CB_HTML_SHOW', 'Показывать "Получать HTML"');
define('_JNEWS_CB_HTML_SHOW_TIPS', 'Установите "Да", чтобы позволить пользователям выбирать, хотят ли они получать рассылку в формате HTML. Установите Нет, чтобы подписчики получали HTML по умолчанию.');
define('_JNEWS_CB_HTML_DEFAULT', 'Получать HTML по умолчанию');
define('_JNEWS_CB_HTML_DEFAULT_TIPS', 'Отметьте эту опцию, чтобы показывать "Получение HTML" пользователями по умолчанию. Если показывать "Получать HTML" установлено в Нет, тогда эта опция будет включена по умолчанию.');

// Новое, начиная с 1.0.4
define('_JNEWS_BACKUP_FAILED', 'Не удалось создать бэкап файла! Файл не заменен.');
define('_JNEWS_BACKUP_YOUR_FILES', 'Старые версии файлов были сохранены в папку:');
define('_JNEWS_SERVER_LOCAL_TIME', 'Локальное время сервера');
define('_JNEWS_SHOW_ARCHIVE', 'Показывать кнопку Архив');
define('_JNEWS_SHOW_ARCHIVE_TIPS', 'Выберите ДА, чтобы показывать кнопку Архив во фронтенде перечня рассылок');
define('_JNEWS_LIST_OPT_TAG', 'Тэги');
define('_JNEWS_LIST_OPT_IMG', 'Изображения');
define('_JNEWS_LIST_OPT_CTT', 'Контент');
define('_JNEWS_INPUT_NAME_TIPS', 'Введите имя и фамилию (Имя первым, пожалуйста)');
define('_JNEWS_IP_TIPS', 'IP of the subscriber' );
define('_JNEWS_INPUT_EMAIL_TIPS', 'Введите Ваш email адрес (Вводите, пожалуйста, существующий и работающий адрес)');
define('_JNEWS_RECEIVE_HTML_TIPS', 'Выберите Да, если Вы хотели бы получать рассылку в формате HTML (это будет использовать чуть больше трафика, но Ваши письма будут приятно оформлены) или Нет, чтобы получать рассылку только в текстовом формате');
define('_JNEWS_TIME_ZONE_ASK_TIPS', 'Выберите Ваш часовой пояс.');

// Новое, начиная с 1.0.5
define('_JNEWS_FILES' , 'Файлы');
define('_JNEWS_FILES_UPLOAD' , 'Загрузки');
define('_JNEWS_MENU_UPLOAD_IMG' , 'Загрузки картинок');
define('_JNEWS_TOO_LARGE' , 'Размер файла превышает допустимый. Максимальный разрешенный размер файла');
define('_JNEWS_MISSING_DIR' , 'Директория назначения не существует');
define('_JNEWS_IS_NOT_DIR' , 'Директория назначения не существует или является файлом.');
define('_JNEWS_NO_WRITE_PERMS' , 'Директория назначения не имеет прав записи.');
define('_JNEWS_NO_USER_FILE' , 'Вы не выбрали ни одного файла для загрузки.');
define('_JNEWS_E_FAIL_MOVE' , 'Невозможно переместить файл.');
define('_JNEWS_FILE_EXISTS' , 'Такой файл уже существует на сервере.');
define('_JNEWS_CANNOT_OVERWRITE' , 'Такой файл уже существует и не может быть перезаписан.');
define('_JNEWS_NOT_ALLOWED_EXTENSION' , 'Расширение файла не входит в список разрешенных');
define('_JNEWS_PARTIAL' , 'Файл загружен лишь частично.');
define('_JNEWS_UPLOAD_ERROR' , 'Ошибка загрузки:');
define('_JNEWS_DEV_NO_DEF_FILE' , 'Файл был загружен лишь частично.');

// уже существует, но изменен: добавлен <br/> в первой строке и строка про [SUBSCRIPTIONS]
define('_JNEWS_CONTENTREP', '{tag:subscriptions} = Это будет заменено линками на подписку.' .
		' Это <strong>требуется</strong> , чтобы jNews работал корректно.<br />' .
		'Если Вы расположите любой другой контент в этом окне, это будет отображаться во всех письмах, направленных этому Списку.' .
		' <br />Добавьте Ваш текст для приветственного письма при подписке в конец. jNews автоматически добавит линки для подписчиков на изменение их информации и аннулирование подписки.');

// Новое, начиная с 1.0.6
define('_JNEWS_NOTIFICATION', 'Уведомление');  // ссылка на Email уведомление
define('_JNEWS_NOTIFICATIONS', 'Уведомления');
define('_JNEWS_USE_SEF', 'SEF в рассылках');
define('_JNEWS_USE_SEF_TIPS', 'Рекомендуется выбирать Нет. Если Вы все-таки хотите, чтобы URL-ы, включенные в Ваши рассылки, использовали SEF, тогда выбирайте Да.' .
		' <br /><b>Ссылки будут работать одинаково при разных условиях. Так Вы можете быть уверены, что пользователь, кликнув по линку в письме любой давности, попадет к Вам на сайт, даже если вы измените Вашу SEF структуру.</b> ');
define('_JNEWS_ERR_NB' , 'Ошибка #: ERR');
define('_JNEWS_ERR_SETTINGS', 'Установки отчетов об ошибках');
define('_JNEWS_ERR_SEND' ,'Отправлять отчет об ошибках');
define('_JNEWS_ERR_SEND_TIPS' ,'Если Вы хотите помочь jNews стать лучше, пожалуйста, выберите Да. Это включает функцию "отправить отчет об ошибках разработчику", то есть Вам даже на придется спрашивать на форуме о способе устранения бага ;-) <br /> <b>ЛИЧНАЯ ИНФОРМАЦИЯ НЕ ОТПРАВЛЯЕТСЯ</b>.  Мы даже не знаем, с каких сайтов поступают такие отчеты. Отправляется только информация об jNews , настройках PHP и запросах SQL . ');
define('_JNEWS_ERR_SHOW_TIPS' ,'Выберите Да, чтобы показывать номер ошибки на экране. Используется для целей дебагга скрипта. ');
define('_JNEWS_ERR_SHOW' ,'Показывать ошибки');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE', 'Показывать линки аннулирования подписки');
define('_JNEWS_LIST_SHOW_UNSUBCRIBE_TIPS', 'Выберите Да для показа ссылок аннулирования подписки внизу писем, чтобы подписчики смогли изменить статус их подписки. <br /> Нет  отключает футер и ссылки.');
define('_JNEWS_UPDATE_INSTALL', '<span style="color: rgb(255, 0, 0);">ВАЖНОЕ СООБЩЕНИЕ!</span> <br />Если Вы обновляетесь с предыдущей версии jNews, Вам следует обновить структуру базу данных, кликнув по этой кнопке (Ваша информация останется в целости)');
define('_JNEWS_UPDATE_INSTALL_BTN' , 'Обновить таблицы и конфигурацию');
define('_JNEWS_MAILING_MAX_TIME', 'Максимальное время очереди' );
define('_JNEWS_MAILING_MAX_TIME_TIPS', 'Установите максимальное время для каждого комплекта писем, рассылаемых по очереди. Рекомендуется устанавливать между 30 секундами и 2 минутами.');

// virtuemart интеграция beta
define('_JNEWS_VM_INTEGRATION', 'Интеграция с VirtueMart ');
define('_JNEWS_VM_COUPON_NOTIF', 'ID извещения о Купоне');
define('_JNEWS_VM_COUPON_NOTIF_TIPS', 'Установите ID письма, которое Вы хотите использовать, чтобы разослать Купоны Вашим клиентам.');
define('_JNEWS_VM_NEW_PRODUCT', 'ID извещения о новых продуктах');
define('_JNEWS_VM_NEW_PRODUCT_TIPS', 'Установите ID письма, которое Вы хотите использовать, чтобы разослать извещение о новых продуктах Вашим клиентам.');

// Новое, начиная с 1.0.8
// создать формы для подписки
define('_JNEWS_FORM_BUTTON', 'Создать форму');
define('_JNEWS_FORM_COPY', 'HTML код');
define('_JNEWS_FORM_COPY_TIPS', 'Скопируйте сгенерированный HTML код на Вашу HTML страницу.');
define('_JNEWS_FORM_LIST_TIPS', 'Выберите Список, который Вы хотите включить в форму');
// обновить сообщения
define('_JNEWS_UPDATE_MESS4' , 'Не может быть обновлено автоматически');
define('_JNEWS_WARNG_REMOTE_FILE' , 'Удаленный файл недоступен.');
define('_JNEWS_ERROR_FETCH' , 'Ошибка fetching файла.');

define('_JNEWS_CHECK' , 'Проверить');
define('_JNEWS_MORE_INFO' , 'Подробнее');
define('_JNEWS_UPDATE_NEW' , 'Обновить до последней версии');
define('_JNEWS_UPGRADE' , 'Обновить до более новой версии');
define('_JNEWS_DOWNDATE' , 'Восстановить прежнюю версию');
define('_JNEWS_DOWNGRADE' , 'Обратно к первой версии');
define('_JNEWS_REQUIRE_JOOM' , 'Требовать Joomla');
define('_JNEWS_TRY_IT' , 'Сделай это!');
define('_JNEWS_NEWER', 'Более новая');
define('_JNEWS_OLDER', 'Более старая');
define('_JNEWS_CURRENT', 'Текущая');

// Новое, начиная с 1.0.9
define('_JNEWS_CHECK_COMP', 'Попробовать один из других компонентов');
define('_JNEWS_MENU_VIDEO' , 'Видео пособия');
define('_JNEWS_SCHEDULE_TITLE', 'Настройки автоматической функции планирования');
define('_JNEWS_ISSUE_NB_TIPS' , 'Получить число, автоматически сгенерированное системой' );
define('_JNEWS_SEL_ALL' , 'Все рассылки');
define('_JNEWS_SEL_ALL_SUB' , 'Все списки');
define('_JNEWS_INTRO_ONLY_TIPS' , 'Если вы всавите только вступление статьи, в письмо будет вставлена ссылка "Подробнее...", ведущая на полный разворот статьи на вашем сайте.' );
define('_JNEWS_TAGS_TITLE' , 'Тэг статьи');
define('_JNEWS_TAGS_TITLE_TIPS' , 'Скопируйте и вставьте этот тэг в письмо в то место, в которое хотите.');
define('_JNEWS_PREVIEW_EMAIL_TEST', 'Укажите email, на который уйдет тестовое письмо');
define('_JNEWS_PREVIEW_TITLE' , 'Просмотр');
define('_JNEWS_AUTO_UPDATE' , 'Уведомление о новых версиях');
define('_JNEWS_AUTO_UPDATE_TIPS' , 'Выберите "Да", если Вы хотите знать о новых версиях компонента. <br />ВАЖНО!! Настройка "Показывать советы" необходима для работы этой функции.');

// Новое, начиная с 1.1.0
define('_JNEWS_LICENSE' , 'Лицензионное соглашение');

// Новое, начиная с 1.1.1
define('_JNEWS_NEW' , 'Новое');
define('_JNEWS_SCHEDULE_SETUP', 'Для рассылки с помощью автореспондеров, в концигурациях должен быть установлен планировщик.');
define('_JNEWS_SCHEDULER', 'Планировщик');
define('_JNEWS_jnews_CRON_DESC' , 'если у Вас нет доступа к панели управления Хронами вашего сайта, Вы можете зарегистрировать бесплатный учетную запись Хрона jNews:' );
define('_JNEWS_CRON_DOCUMENTATION' , 'Вы можете найти дополнительную информацию по настройкам Планировщика jNews по следующему адресу:');
define('_JNEWS_CRON_DOC_URL' , '<a href="http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60"
 target="_blank">http://www.joobi.co/index.php?option=com_content&Itemid=72&view=category&layout=blog&id=29&limit=60</a>' );
define( '_JNEWS_QUEUE_PROCESSED' , 'Очередь успешно выполнена...' );
define( '_JNEWS_ERROR_MOVING_UPLOAD' , 'Ошибка перемещения импортируемого файла' );

//Новое, начиная с 1.1.4
define( '_JNEWS_SCHEDULE_FREQUENCY' , 'Частота работы планировщика' );
define( '_JNEWS_CRON_MAX_FREQ' , 'Максимальная частота работы планировщика' );
define( '_JNEWS_CRON_MAX_FREQ_TIPS' , 'Определяет максимальную частоту, с которой планировщик будет запускаться (в минутах). Является ограничением планировщика, даже если задание хрона запускается чаще.' );
define( '_JNEWS_CRON_MAX_EMAIL' , 'Максимальное число писем за раз' );
define( '_JNEWS_CRON_MAX_EMAIL_TIPS' , 'Определяет максимальное количество писем, рассылаемых за раз. If this is set to O the maximim emails per task will be 1' );
define( '_JNEWS_CRON_MINUTES' , ' минут(-ы)' );
define( '_JNEWS_SHOW_SIGNATURE' , 'Показывать низ (footer) письма' );
define( '_JNEWS_SHOW_SIGNATURE_TIPS' , 'Хотите ли вы установить внизу письма ссылку на jNews.' );
define( '_JNEWS_QUEUE_AUTO_PROCESSED' , 'Работа автореспондера прошла успешно...' );
define( '_JNEWS_QUEUE_NEWS_PROCESSED' , 'Почтовая рассылка прошла успешно...' );
define( '_JNEWS_MENU_SYNC_USERS' , 'Синхронизировать данные пользователей в базе данных' );
define( '_JNEWS_SYNC_USERS_SUCCESS' , 'Синхронизация данных пользователей прошла успешно!' );

// совместимость с Joomla 15
if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Выйти' );
if (!defined('_CMN_YES')) define( '_CMN_YES', 'Да' );
if (!defined('_CMN_NO')) define( '_CMN_NO', 'Нет' );
if (!defined('_HI')) define( '_HI', 'Привет' );
if (!defined('_CMN_TOP')) define( '_CMN_TOP', 'Вверх' );
if (!defined('_CMN_BOTTOM')) define( '_CMN_BOTTOM', 'Вниз' );
//if (!defined('_BUTTON_LOGOUT')) define( '_BUTTON_LOGOUT', 'Logout' );

// For include title only or full article in content item tab in newsletter edit - p0stman911
define('_JNEWS_TITLE_ONLY_TIPS' , 'Если вы выберите, то в письмо добавится только заголовок статьи в виде ссылки на полный разворот статьи на вашем сайте.');
define('_JNEWS_TITLE_ONLY' , 'Только заголовок');
define('_JNEWS_FULL_ARTICLE_TIPS' , 'Если вы выберите, то статья полностью добавиться в письмо');
define('_JNEWS_FULL_ARTICLE' , 'Вся статья');
define('_JNEWS_CONTENT_ITEM_SELECT_T', 'Выберите статью, которую Вы хотите добавить в письмо. <br />Скопируйте и вставьте <b>тэг статьи</b> в тело письма.  Вы можете выбрать, в каком виде ее вставлять: весь текст, только вступление или только заголовок-ссылку (0, 1 или 2 соответственно). ');
define('_JNEWS_SUBSCRIBE_LIST2', 'Список(ки) рассылки');

// For sorting in content tab by date, section or category
define('_JNEWS_CONTENT_ITEM_SORT', 'Sort by: ');
define('_JNEWS_SORT_DATE' , 'Date');
define('_JNEWS_SORT_DATE_TIPS' , 'If you select this, the contents will be sorted according to date created');
define('_JNEWS_SORT_SECTION' , 'Section');
define('_JNEWS_SORT_SECTION_TIPS' , 'If you select this, the contents will be sorted according to its section');
define('_JNEWS_SORT_CATEGORY' , 'Category');
define('_JNEWS_SORT_CATEGORY_TIPS' , 'If you select this, the contents will be sorted according to its category');
define('_JNEWS_SORT_BUTTON' , 'Sort');


// Функция умной рассылки
define('_JNEWS_AUTONEWS', 'Умная рассылка');
define('_JNEWS_MENU_AUTONEWS', 'Умные рассылки');
define('_JNEWS_AUTO_NEWS_OPTION', 'Настройки умной рассылки');
define('_JNEWS_AUTONEWS_FREQ', 'Частота рассылки');
define('_JNEWS_AUTONEWS_FREQ_TIPS', 'Определяет частоту, с которой вы хотите производить умные рассылки.');
define('_JNEWS_AUTONEWS_SECTION', 'Раздел статей');
define('_JNEWS_AUTONEWS_SECTION_TIPS', 'Определяет раздел, из которого будут браться статьи для рассылки.');
define('_JNEWS_AUTONEWS_CAT', 'Категория статей');
define('_JNEWS_AUTONEWS_CAT_TIPS', 'Определяет категорию, из которой будут браться статьи для рассылки. (Все из всех тех статей в указанном разделе).');
define('_JNEWS_SELECT_SECTION', 'Выберите раздел');
define('_JNEWS_SELECT_CAT', 'Все категории');
define('_JNEWS_AUTO_DAY_CH8', 'Quaterly');
define('_JNEWS_AUTONEWS_STARTDATE', 'Дата начала');
define('_JNEWS_AUTONEWS_STARTDATE_TIPS', 'Определяет дату, с которой начинают производиться умные рассылки.');
define('_JNEWS_AUTONEWS_TYPE', 'Представление статьи');// каким мы увидим статьи, вставленные в письма
define('_JNEWS_AUTONEWS_TYPE_TIPS', 'Полная статья: будет вставлять всю статью в рассылку.<br />' .
		'Только вступление: будет вставлять только вступление статьи в рассылку.<br/>' .
		'Только заголовок: будет вставлять только заголовок в рассылку.');
define('_JNEWS_TAGS_AUTONEWS', '[SMARTNEWSLETTER] = Этот тэг будет заменен быстрой рассылкой.' );

//Новое, начиная с 1.1.3
define('_JNEWS_MALING_EDIT_VIEW', 'Создание / Просмотр писем');
define('_JNEWS_LICENSE_CONFIG' , 'Лицензия' );
define('_JNEWS_ENTER_LICENSE' , 'Ввести лицензию');
define('_JNEWS_ENTER_LICENSE_TIPS' , 'Введите ваш номер лицензии и сохраните его.');
define('_JNEWS_LICENSE_SETTING' , 'Настройки лицензии' );
define('_JNEWS_GOOD_LIC' , 'Ваша лизензия корректна!' );
define('_JNEWS_NOTSO_GOOD_LIC' , 'Ваша лицензия корректна: ' );
define('_JNEWS_PLEASE_LIC' , 'Пожалуйста, свяжитесь с jNews, чтобы обновить свою лицензиию ( license@joobi.co ).' );
define('_JNEWS_DESC_PLUS', 'jNews Plus - первый компонент автоматической рассылки для  Joomla CMS.  ' . _JNEWS_FEATURES );
define('_JNEWS_DESC_PRO', 'jNews PRO - самый мощный компонент - система рассылки для Joomla CMS.  ' . _JNEWS_FEATURES );

//Новое, начиная с 1.1.4
define('_JNEWS_ENTER_TOKEN' , 'Введите номер талона');
define('_JNEWS_ENTER_TOKEN_TIPS' , 'Введите номер талона, который вы получили при покупке jNews. ');
define('_JNEWS_jnews_SITE', 'Сайт jNews:');
define('_JNEWS_MY_SITE', 'Мой сайт:');
define( '_JNEWS_LICENSE_FORM' , ' ' .
 		'Лицензия.</a>' );
define('_JNEWS_PLEASE_CLEAR_LICENSE' , 'Пожалуйста, очистите поле лицензии.<br />  Если проблемы продолжают взникать, ' );
define( '_JNEWS_LICENSE_SUPPORT' , 'Если вы до сих пор имете вопросы, ' . _JNEWS_PLEASE_LIC );
define( '_JNEWS_LICENSE_TWO' , 'Вы можете получить Ваше лицензионное руководство, введя номер талона и адрес сайта URL (который подсвечен зеленым вверху страницы) в лицензионной форме. '
			. _JNEWS_LICENSE_FORM . '<br /><br/>' . _JNEWS_LICENSE_SUPPORT );
define('_JNEWS_ENTER_TOKEN_PATIENCE', 'После сохранения вашего номера лицензия автоматически сгенерируется. ' .
		' Обычно купон действителен в течение 2-х минут.  Однако, в некоторых случаях он может быть продлен до 15 минут.<br />' .
		'<br />Вернитесь обратно в панель управления через несколько минут.  <br /><br />' .
		'Если вы не получили верный лицензионный ключ в течение 15 минут, '. _JNEWS_LICENSE_TWO);
define( '_JNEWS_ENTER_NOT_YET' , 'Ваш номер еще не действителен.');
define( '_JNEWS_UPDATE_CLICK_HERE' , 'Пожалуйста, посетите <a href="http://www.joobi.co" target="_blank">www.joobi.co</a>, чтобы скачать последнюю версию.');
//define( '_JNEWS_NOTIF_UPDATE' , 'Чтобы узнавать о последних обновлениях, введите свой электронный ящик и нажмите Подписаться ');

define('_JNEWS_THINK_PLUS', 'Если Вы хотите большего от вашей системы рассылки, подумайте о Plus!');
define('_JNEWS_THINK_PLUS_1', 'Автореспонседоры');
define('_JNEWS_THINK_PLUS_2', 'Планируйте отправку ваших рассылок предопределённой датой');
define('_JNEWS_THINK_PLUS_3', 'Нет ограничений со стороны сервера');
define('_JNEWS_THINK_PLUS_4', 'и многое другое...');


//since 1.2.2
define( '_JNEWS_LIST_ACCESS', 'List Access' );
define( '_JNEWS_INFO_LIST_ACCESS', 'Specify what group of users can view and subscribe to this list' );
define( 'JNEWS_NO_LIST_PERM', 'You don\'t have enough permission to subscribe to this list' );

//Archive Configuration
 define('_JNEWS_MENU_TAB_ARCHIVE', 'Archive');
 define('_JNEWS_MENU_ARCHIVE_ALL', 'Archive All');

//Archive Lists
 define('_JNEWS_FREQ_OPT_0', 'None');
 define('_JNEWS_FREQ_OPT_1', 'Every Week');
 define('_JNEWS_FREQ_OPT_2', 'Every 2 Weeks');
 define('_JNEWS_FREQ_OPT_3', 'Every Month');
 define('_JNEWS_FREQ_OPT_4', 'Every Quarter');
 define('_JNEWS_FREQ_OPT_5', 'Every Year');
 define('_JNEWS_FREQ_OPT_6', 'Other');

define('_JNEWS_DATE_OPT_1', 'Created date');
define('_JNEWS_DATE_OPT_2', 'Modified date');

define('_JNEWS_ARCHIVE_TITLE', 'Setting up auto-archive frequency');
define('_JNEWS_FREQ_TITLE', 'Archive frequency');
define('_JNEWS_FREQ_TOOL', 'Define how often you want the Archive Manager to arhive your website content.');
define('_JNEWS_NB_DAYS', 'Number of days');
define('_JNEWS_NB_DAYS_TOOL', 'This is only for the Other option! Please specify the number of days between each Archive.');
define('_JNEWS_DATE_TITLE', 'Date type');
define('_JNEWS_DATE_TOOL', 'Define if the archived should be done on the created date or modified date.');

define('_JNEWS_MAINTENANCE_TAB', 'Maintenance settings');
define('_JNEWS_MAINTENANCE_FREQ', 'Maintenance frequency');
define( '_JNEWS_MAINTENANCE_FREQ_TIPS', 'Specify the frequency at which you want the maintenance routine to run.' );
define( '_JNEWS_CRON_DAYS' , 'hour(s)' );

define( '_JNEWS_LIST_NOT_AVAIL', 'There is no list available.');
define( '_JNEWS_LIST_ADD_TAB', 'Add/Edit' );

define( '_JNEWS_LIST_ACCESS_EDIT', 'Mailing Add/Edit Access' );
define( '_JNEWS_INFO_LIST_ACCESS_EDIT', 'Specify what group of users can add or edit a new mailing for this list' );
define( '_JNEWS_MAILING_NEW_FRONT', 'Createa New Mailing' );

define('_JNEWS_AUTO_ARCHIVE', 'Auto-Archive');
define('_JNEWS_MENU_ARCHIVE', 'Auto-Archive');

//Extra tags:
define('_JNEWS_TAGS_ISSUE_NB', '{tag:issuenb} = This will be replaced by the issue number of  the newsletter.');
define('_JNEWS_TAGS_DATE', '{tag:date} = This will be replaced by the sent date.');
define('_JNEWS_TAGS_CB', '[CBTAG:{field_name}] = This will be replaced by the value taken from the Community Builder field: eg. [CBTAG:firstname] ');
define( '_JNEWS_MAINTENANCE', 'Maintenance' );


define('_JNEWS_THINK_PRO', 'When you have professional needs, you use professional components!');
define('_JNEWS_THINK_PRO_1', 'Smart-Newsletters');
define('_JNEWS_THINK_PRO_2', 'Define access level for your list');
define('_JNEWS_THINK_PRO_3', 'Define who can edit/add mailings');
define('_JNEWS_THINK_PRO_4', 'More tags: add your CB fields');
define('_JNEWS_THINK_PRO_5', 'Joomla contents Auto-archive');
define('_JNEWS_THINK_PRO_6', 'Database optimization');

define('_JNEWS_LIC_NOT_YET', 'Your license is not yet valid.  Please check the license Tab in the configuration panel.');
define('_JNEWS_PLEASE_LIC_GREEN' , 'Make sure to provide the green information at the top of the tab to our support team.' );

define('_JNEWS_FOLLOW_LINK' , 'Get Your License');
define( '_JNEWS_FOLLOW_LINK_TWO' , 'You can get your license by entering the token number and site URL (which is highlighted in green at the top of this page) in the License form. ');
define( '_JNEWS_ENTER_TOKEN_TIPS2', ' Then click on Apply button in the top right menu.' );
define( '_JNEWS_ENTER_LIC_NB', 'Enter your License' );
define( '_JNEWS_UPGRADE_LICENSE', 'Upgrade Your License');
define( '_JNEWS_UPGRADE_LICENSE_TIPS' , 'If you received a token to upgrade your license please enter it here, click Apply and proceed to number <b>2</b> to get your new license number.' );

define( '_JNEWS_MAIL_FORMAT', 'Encoding format' );
define( '_JNEWS_MAIL_FORMAT_TIPS', 'What format do you want to use for encoding your mailings, Text only or MIME' );
define( '_JNEWS_jnews_CRON_DESC_ALT', 'If you do not have access to a cron task manager on your website, you can use the Free jCron component to create a cron task from your website.' );

//since 1.3.1
define('_JNEWS_SHOW_AUTHOR', 'Show Author\'s Name');
define('_JNEWS_SHOW_AUTHOR_TIPS', 'Select Yes if you want to add the name of the author when you add an article in the Mailing');

//since 1.3.5
define('_JNEWS_REGWARN_NAME','Пожалуйста, введите Ваше настоящее имя.');
define('_JNEWS_REGWARN_MAIL','Пожалуйста, введите правильно адрес e-mail.');

//since 1.5.6
define('_JNEWS_ADDEMAILREDLINK_TIPS','If you select Yes, the e-mail of the user will be added as a parameter at the end of your redirect URL (the redirect link for your module or for an external jNews form).<br/>That can be usefull if you want to execute a special script in your redirect page.');
define('_JNEWS_ADDEMAILREDLINK','Add e-mail to the redirect link');

//since 1.6.3
define('_JNEWS_ITEMID','ItemId');
define('_JNEWS_ITEMID_TIPS','This ItemId will be added to your jNews links.');

//since 1.6.5
define('_JNEWS_SHOW_JCALPRO','jCalPRO');
define('_JNEWS_SHOW_JCALPRO_TIPS','Show the integration tab for jCalPRO <br/>(only if jCalPRO is installed on your website!)');
define('_JNEWS_JCALTAGS_TITLE','jCalPRO Tag:');
define('_JNEWS_JCALTAGS_TITLE_TIPS','Copy and paste this tag into the mailing where you want to have the event to be placed.');
define('_JNEWS_JCALTAGS_DESC','Description:');
define('_JNEWS_JCALTAGS_DESC_TIPS','Select Yes if you want to insert the description of the event');
define('_JNEWS_JCALTAGS_START','Start date:');
define('_JNEWS_JCALTAGS_START_TIPS','Select Yes if you want to insert the start date of the event');
define('_JNEWS_JCALTAGS_READMORE','Read more:');
define('_JNEWS_JCALTAGS_READMORE_TIPS','Select Yes if you want to insert a <b>read more link</b> for this event');
define('_JNEWS_REDIRECTCONFIRMATION','Email Confirmation redirect URL');
define('_JNEWS_REDIRECTCONFIRMATION_TIPS','If you require a confirmation e-mail, the user will be confirmed and redirected to this URL if he clicks on the confirmation link.');

//since 2.0.0 compatibility with Joomla 1.5
if(!defined('_CMN_SAVE') and defined('CMN_SAVE')) define('_CMN_SAVE',CMN_SAVE);
if(!defined('_CMN_SAVE')) define('_CMN_SAVE','Save');
if(!defined('_NO_ACCOUNT')) define('_NO_ACCOUNT','No account yet?');
if(!defined('_CREATE_ACCOUNT')) define('_CREATE_ACCOUNT','Register');
if(!defined('_NOT_AUTH')) define('_NOT_AUTH','You are not authorised to view this resource.');

//since 3.0.0
define('_JNEWS_DISABLETOOLTIP', 'Disable Tooltip');
define('_JNEWS_DISABLETOOLTIP_TIPS', 'Disable the tooltip on the frontend');
define('_JNEWS_MINISENDMAIL', 'Use Mini SendMail');
define('_JNEWS_MINISENDMAIL_TIPS', 'If your server use Mini SendMail, select this option to don\'t add the name of the user in the header of the e-mail');

//Since 3.1.5
define('_JNEWS_READMORE','Read more...');
define('_JNEWS_VIEWARCHIVE','Click here');

//since 4.0.0
define('_JNEWS_SHOW_JLINKS','Link Tracking');
define('_JNEWS_SHOW_JLINKS_TIPS','Enables the integration with jLinks to be able to do link tracking for each links in the newsletter.');

//since 4.1.0
define( '_JNEWS_MAIL_ENCODING', 'Mail encoding' );
define( '_JNEWS_MAIL_ENCODING_TIPS', 'What encoding format do you want to use UTF-8 (highly recommended) or ISO-8859-2' );
define( '_JNEWS_COPY_SUBJECT', 'Copy Subject' );

//since 5.0.0
//fieldset for column configuration
define('_JNEWS_COLUMN','User-defined Columns');
define('_JNEWS_COL1_NAME', 'Column 1 Name');
define('_JNEWS_COL2_NAME', 'Column 2 Name');
define('_JNEWS_COL3_NAME', 'Column 3 Name');
define('_JNEWS_COL4_NAME', 'Column 4 Name');
define('_JNEWS_COL5_NAME', 'Column 5 Name');
define('_JNEWS_COLUMN1_REP', '{tag:profile nb=1} = This will be replaced by your user defined column 1');
define('_JNEWS_COLUMN2_REP', '{tag:profile nb=2} = This will be replaced by your user defined column 2');
define('_JNEWS_COLUMN3_REP', '{tag:profile nb=3} = This will be replaced by your user defined column 3');
define('_JNEWS_COLUMN4_REP', '{tag:profile nb=4} = This will be replaced by your user defined column 4');
define('_JNEWS_COLUMN5_REP', '{tag:profile nb=5} = This will be replaced by your user defined column 5');
//url
define('_JNEWS_URL_PASS','Password');
define('_JNEWS_URL_PASS_TIPS','Enter the password to be able to add a subscriber by entering the url. Append the catcher variable password in the URL.<br>(For Plus and PRO this code will used for captcha.)');
define('_JNEWS_URL_MES','Please subscribe through the Subscriber Module or subscribe through the frontend.');
define('_JNEWS_URL_PASS_WARN','(In the PRO If you change this password, please update the hidden password in your external form as well.)');
define('_JNEWS_ENABLE_CAPTCHA', 'Enable Captcha');
define('_JNEWS_ENABLE_CAPTCHA_TIPS','Enable captcha functionality in the subscriber module and in the subscription via external form in the PRO.');
//url
// subscription notification
define('_JNEWS_SUBSCRIPTION_NOTIFY','Send Subscription Notification');
define('_JNEWS_SUBSCRIPTION_NOTIFY_TIPS','Specify here if you want to send a subscription notification to the list owner or not.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG1','A subscription notification email has been sent to the administrator.');
define('_JNEWS_SUBSCRIPTION_NOTIFY_MSG2','No subscription notification email sent.');
define('_JNEWS_NEW_SUB','jNews Newsletter Subscription');
define('_JNEWS_SUBSCRIPTION_NOTIFY_ERR','Unable in sending a subscription notification to the administrator.');
//subscription notification messages
//for captcha
define('_JNEWS_CAPTCHA_CAPTION','Code: ');
define('JNEWS_WRONG_CAPTCHA_ENTERED','<p style=\'text-align: justify;\'><b>CAPTCHA security code is incorrect or the information you provided are invalid.</b><br>(The security code is necessary to prevent automatic registrations by bots and to verify that registrations are made by a person.)<br><br><b><font color=#ff0000>Your subscription was not processed.</font></b><br><br>Please fill in your information and the security code more carefully and click the <b>Subscribe</b> button.<br><br>Thanks for your understanding.</p><br>');
define('_JNEWS_REGWARN_CAPTCHA','Enter the captcha code.');
define('_JNEWS_SUB_ERR','<br>Error in subscribing.');

//since 6.0.0
define('_JNEWS_MOOTOOLS_BTNTEXT' , 'Subscribe Here');
define('_JNEWS_QUEUE_SUBJECT','Subject');
define('_JNEWS_QUEUE_EMAIL','Email');
define('_JNEWS_QUEUE_PRIOR','Priority');
define('_JNEWS_QUEUE_ATT','Attempts');
define('_JNEWS_QUEUE_DEL', 'Delete');
define('_JNEWS_PROCESS_Q','Process Queue');
define('_JNEWS_CLEAN_Q','Clean Queue');
define('_JNEWS_SENDDATE','Send date');
define('_JNEWS_MAILING_Q','All Mailings in Queue');
define('_JNEWS_MENU_QUEUE', 'Queue');
define('_JNEWS_MENU_TEMPLATES','Templates');
define('_JNEWS_MENU_TAB_QUEUE' , 'Queue');
define('_JNEWS_Q_PROCESS' , 'Queue Configuration');
define('_JNEWS_MAX_Q','Maximum number of e-mails per batch');
define('_JNEWS_SUBS_LIST_LABEL' , 'This Newsletter will be sent to the subscribers of the following selected lists:');
define('_JNEWS_SUBS_LIST_CAMPAIGN' , 'This auto-responder will be sent to the subscribers of the following selected auto-responder:');
define('_JNEWS_SUBS_LIST_RECEIVE', 'Receive' );
define('_JNEWS_SUBS_LIST_TOALL', 'Select All' );
define('_JNEWS_SUBS_LIST_TONONE', 'None' );
define('_JNEWS_LIST_COLOR','Color');
define('_JNEWS_LIST_COLOR_TIP','Select the color for your list. It can be usefull for the statistics.');
define('_JNEWS_MENU_NEW', 'New');
define('_JNEWS_MENU_EDIT', 'Edit');
define('_JNEWS_MENU_APPLY', 'Apply');
define('_JNEWS_MENU_CANCEL', 'Cancel');
define('_JNEWS_MENU_TEMPLATE', 'Template');
define('_JNEWS_HTML_VERSION', 'HTML Version');
define('_JNEWS_NONHTML_VERSION', 'Non-HTML Version');
define('_JNEWS_TAG_NAME_DESC' , 'This will be replaced by the name the subscriber entered, you will be sending personalized email when using this.');
define('_JNEWS_TAG_FNAME_DESC' , 'This will be replaced by the FIRST name of the subscriber entered.');
define('_JNEWS_TAG_ISSUENB_DESC' , 'This will be replaced by the issue number of the newsletter.');
define('_JNEWS_TAG_DATE_DESC' , 'This will be replaced by the sent date.');
define('_JNEWS_TAG_CBNAME' , '[CBTAG:{field_name}]');
define('_JNEWS_TAG_CBNAME_DESC' , 'This will be replaced by the value taken from the Community Builder field: eg. [CBTAG:firstname] ');
define('_JNEWS_TAG_LOADMODINFO_DESC' , 'This will be replaced by the Joomla module where id is equal to id of the joomla module. For example {module=1}.<br /> The modules can only be loaded through the cron task. <br /> ');
define('_JNEWS_DATETIME' , 'Date and Time');
define('_JNEWS_TEMPLATE_COPY' , '_copy');
define('_JNEWS_TEMPLATE_DEFAULT_NODEL' , 'You cannot delete a default template!');
define('_JNEWS_TEMPLATE_DEFAULT_SUCCS' , 'Successfully set to default!');
define('_JNEWS_TEMPLATE' , 'Template');
define('_JNEWS_TEMPLATES' , 'Templates');
define('_JNEWS_AR' , 'Auto-responder');
define('_JNEWS_SELCT_MAILINGLIST', 'Please select a list in the List tab in order to add a mailing.');
define('_JNEWS_SELCT_MAILINGCAMPAIGN', 'Please select a campaign in the List tab in order to add a mailing.');
define('_JNEWS_TEMPLATE_AVAIL', 'All Available Templates');
define('_JNEWS_TEMPLATE_NAME', 'Name');
define('_JNEWS_TEMPLATE_NAME_T', 'Enter the name of the template.');
define('_JNEWS_TEMPLATE_NAMEKEY', 'Namekey');
define('_JNEWS_TEMPLATE_NAMEKEY_T', 'Enter the namekey of the template.');
define('_JNEWS_TEMPLATE_DESC', 'Description');
define('_JNEWS_TEMPLATE_DEFAULT', 'Default');
define('_JNEWS_TEMPLATE_DEFAULT_T', 'Select "Yes" to set as the default template.');
define('_JNEWS_TEMPLATE_PUBLISH', 'Publish');
define('_JNEWS_TEMPLATE_PUBLISH_T', 'Select "Yes" to publish the template.');
define('_JNEWS_TEMPLATE_BG', 'Background Color');
define('_JNEWS_TEMPLATE_BG_T', 'Select the template background color.');
define('_JNEWS_TEMPLATE_UPLOAD', 'Upload Thumbnail');
define('_JNEWS_TEMPLATE_UPLOAD_T', 'Upload an image thumbnail of the template.');
define('_JNEWS_TEMPLATE_DESC_T', 'Enter the description of the template.');
define('_JNEWS_TEMPLATE_STYLE_TH1', 'Title h1');
define('_JNEWS_TEMPLATE_STYLE_TH2', 'Title h2');
define('_JNEWS_TEMPLATE_STYLE_TH3', 'Title h3');
define('_JNEWS_TEMPLATE_STYLE_TH4', 'Title h4');
define('_JNEWS_TEMPLATE_STYLE_UNSUB', 'Style for the Unsubscribe Link');
define('_JNEWS_TEMPLATE_STYLE_SUB', 'Style for the "Change Your Subscription" Link');
define('_JNEWS_TEMPLATE_STYLE_CONTENT', 'Style for the content area');
define('_JNEWS_TEMPLATE_STYLE_CHEAD', 'Style for the content title');
define('_JNEWS_TEMPLATE_STYLE_CREADMORE', 'Style for the read more link');
define('_JNEWS_TEMPLATE_STYLE_VONLINE', 'Style for the "View it online" Link');
define('_JNEWS_TEMPLATE_STYLE_NEW', 'Add a New Style');
define('_JNEWS_TEMPLATE_STYLE_NEWC', 'Name of the CSS Class');
define('_JNEWS_TEMPLATE_STYLE_NEWAPPLIED', 'CSS styles that will be applied to the class.');

//statistics & reports
define('_JNEWS_REPORTS_SUBS', 'Subscribers Reports');
define('_JNEWS_REPORTS_MAIL', 'Mailing Reports');
define('_JNEWS_REPORTS_LIST', 'List Reports');
define('_JNEWS_LIST_SUBCRIBERS', 'No. of Subscribers');
define('_JNEWS_LIST_UNSUBSCRIBERS', 'No. of Unsubscribers');
define('_JNEWS_LIST_CONFIRMED', 'No. of Confirmed Emails');
define('_JNEWS_LIST_UNCONFIRMED', 'No. of Unconfirmed Emails');
define('_JNEWS_LIST_SUB_DATE', 'Subscribed Date');
define('_JNEWS_MAILING_SEND_DATE','Send Date');
define('_JNEWS_MAILING_SUBJECT', 'Subject');
define('_JNEWS_MAILING_SENT_HTML','Sent in HTML');
define('_JNEWS_MAILING_SENT_TEXT','Sent in Text');
define('_JNEWS_MAILING_FAILED', 'Send Fails');
define('_JNEWS_MAILING_PENDING', 'Mail Pending');
define('_JNEWS_MAILING_BOUNCES','Bounces');
define('_JNEWS_MAILING_SENT', 'Total Sent');
//Mailing Reports
define('_JNEWS_MAIL_GRAPH', 'Graph');
define('_JNEWS_MAIL_DETAILS', 'Details');
define('_JNEWS_MAIL_DETAILS_READ', 'HTML Read');
define('_JNEWS_MAIL_DETAILS_UNREAD', 'HTML Unread');
define('_JNEWS_MAIL_DETAILS_TEXT', 'TEXT Only');

//stats filters
define('_JNEWS_GROUP_PREDEFINED_DATE','Predefined Date');		//legend
define('_JNEWS_GROUP_SPECIFIED_DATE','Specified Date');
define('_JNEWS_LABEL_SET_INTERVAL', 'Set Interval');		//labels
define('_JNEWS_LABEL_DATE_RANGE','Date Range');
define('_JNEWS_LABEL_CURRENT_SERVER_TIME', 'Current Server Time');
define('_JNEWS_LABEL_REPORT_TYPE','Report Type');
define('_JNEWS_INTERVAL_DAILY','Daily');					//intervals
define('_JNEWS_INTERVAL_WEEKLY','Weekly');
define('_JNEWS_INTERVAL_MONTHLY', 'Monthly');
define('_JNEWS_INTERVAL_YEARLY','Yearly');
define('_JNEWS_DEFINED_RANGE_YESTERDAY','Yesterday');		//predefined range
define('_JNEWS_DEFINED_RANGE_TODAY', 'Today');
define('_JNEWS_DEFINED_RANGE_THIS_WEEK','This Week');
define('_JNEWS_DEFINED_RANGE_LAST_WEEK','Last Week');
define('_JNEWS_DEFINED_RANGE_LAST_TWO_WEEK','Last 2 Weeks');
define('_JNEWS_DEFINED_RANGE_THIS_MONTH','This Month');
define('_JNEWS_DEFINED_RANGE_LAST_MONTH','Last Month');
define('_JNEWS_DEFINED_RANGE_THIS_YEAR','This Year');
define('_JNEWS_DEFINED_RANGE_LAST_YEAR','Last Year');
define('_JNEWS_DEFINED_RANGE_TWO_YEARS_AGO','2 Years Ago');
define('_JNEWS_DEFINED_RANGE_3_YEARS_AGO','3 Years Ago');
define('_JNEWS_BUTTON_REFRESH','Refresh');				//buttons
define('_JNEWS_BUTTON_GENERATE','Generate');
define('_JNEWS_BUTTON_RESET', 'Reset');
define('_JNEWS_SPECIFIED_DATE_START','Start');			//specified date
define('_JNEWS_SPECIFIED_DATE_END','End');
define('_JNEWS_REPORT_LISTING','Listing');
define('_JNEWS_REPORT_GRAPH','Graph');
define('_JNEWS_REPORT_EXPORT','Export');
define('_JNEWS_SUBSCRIBERS_ALL_USERS', 'All Users');		//subscribers
define('_JNEWS_SUBSCRIBERS_REGISTERED', 'Registered');
define('_JNEWS_SUBSCRIBERS_GUESTS','Guests');
define('_JNEWS_REPORT_WARN_MESSAGE', 'Incomplete Date Selection in Specified Fieldset!');

//stats export
define('_JNEWS_STATS_EXPORT', 'Export');
define('_JNEWS_EXPORT_WARN_MESSAGE', 'No Data to be Exported');
define('_JNEWS_GRAPH_WARN_MESSAGE', 'No Data to be Displayed');
define('_JNEWS_REPORT_HEADER', 'Report');
define('_JNEWS_REPORT_HEADER_TO', 'to');
define('_JNEWS_PIE_PROCESS_WARN_MESSAGE', 'No Data for Mailing Process');
define('_JNEWS_PIE_FORMAT_WARN_MESSAGE', 'No Data for HTML/Text Format');

//stats graph labels
define('_JNEWS_GRAPH_LBL_HTML', 'HTML');
define('_JNEWS_GRAPH_LBL_TEXT', 'TEXT');
define('_JNEWS_GRAPH_TITLE_FORMAT', 'HTML/TEXT Format');
define('_JNEWS_GRAPH_PIE_TITLE_MAIL', 'Mailing Process');
define('_JNEWS_PIE_SUBS', 'Subscribers');
define('_JNEWS_PIE_UNSUBS', 'Unsubscribers');
define('_JNEWS_PIE_UNCONFIRMED', 'Unconfirmed');
define('_JNEWS_PIE_CONFIRMED', 'Confirmed');
define('_JNEWS_MAILING_SUBJECT_HEADER', 'Subject');


//Wizards
define('_JNEWS_WIZARD', 'Wizard');
define('_JNEWS_CHECKLISTFOUND', 'Please create your list first and be sure that it is published.');

define('_JNEWS_CHECKCAMPAIGNFOUND', 'Please create your campaign(list) first and be sure that it is published.');
define('_JNEWS_TEMPLATE_ALERT_NAMEKEY', 'Template must have a namekey!');
define('_JNEWS_LIST_GUIDE', '<strong>List Management:</strong> <br/>'.
       '<ul><li>The first thing you have to do to start with jNews is to create your list.</li>'.
       '<li>You will be able to subscribe users to this list and send one or more Newsletters.</li>'.
       '<li>You can specify here the basic information of the list including your <i><u>Sender Information</u></i>.</li>'.
       '<li>And be able to specify users or group of users who can subscribe to that list.</li>'.
       '<li>For <i>Plus</i> and <i>Pro</i> version you can specify what group of user or user who can add or edit mailings for this list.</li>'.
       '<li>For <i>Pro</i> version you have the option to send <i><u>Unsubscription</u></i> and <i><u>Subscription Notification</u></i> to the owner of the list or the admin of the site.</li></ul>');
define('_JNEWS_SUBSCRIBERS_GUIDE', '<strong>Subscriber Management:</strong> </br>' .
	    '<ul><li><strong>During Creation: </strong></li><br>'.
        '<ul><li>You can proceed here adding your subscribers.</li>'.
        '<li>Specify your <i><u>Subscriber Information</i></u></li>'.
        '<li>And select which <i><u>List</u></i> you want your subscriber to subscribe to, provided that you have created list.</li>'.
        '<li>You can Confirm your added subscriber to receive your newsletters.</li>'.
        '<li>You can also allow your subscriber to recieve the HTML format of your newsletter.</li>'.
        '<li><i><u>IP</u></i> field is added to automatically detect the IP of your subscriber from the frontend of your site. </li></ul></ul>'.
        '<ul><li><strong>Export Button</strong></li>' .
        '<ul><li>This allows you to <i><u>Export</u></i> your subscribers from all your lists or selected lists.</li></ul></ul>' .
        '<ul><li><strong>Import Button</strong></li>' .
        '<ul><li>This allows you to <i><u>Import</u></i> your subscribers to all your lists or selected lists.</li></ul></ul>');
define('_JNEWS_NEWSLETTER_GUIDE', '<strong>Newsletter Management:</strong> <br/>'.
        '<ul><li>Provided that you have created List(s) you can now proceed creating your <i><u>Newsletters</u></i>.</li>'.
        '<li>For the <i><u>Plus</u></i> version you can create <i><u>Scheduled Newsletter</u></i> and also <i><u>Autoresponder</u></i> or <i><u>Auto-responder</u></i> type of mailing.</li>'.
        '<li>For <i><u>PRO</u></i> you have the functionality with <i><u>Smart-Newsletter</u></i>, which takes your <i>latest created</i>, <i>modified</i> and <i>published articles</i> of your site.</li></ul>'.
        '<ul><li><strong>During Creation:</strong></li>'.
		'<ul><li><i><u>Newsletter Content Area</u></i> -> where you put all the contents of your Newsletter.</li>'.
		'<li><i><u>List Tab</u></i> -> the area where you can send the newsletter to one or more Lists.</li>'.
		'<li><i><u>Sender Tab</u></i> -> the area of the Sender Information Settings of your Newsletter.</li>'.
		'<li><i><u>Content Tab</u></i> -> the area where you can look for the contents of your site and specify which article to insert into your Newsletter.</li>'.
        '<li><i><u>Attachments</u></i> -> Newsletter Attachement Information area.</li></ul></ul>' .
        '<ul><li><strong>Unpublished Button</strong></li>' .
        '<ul><li>Enables you to unpublished your newsletter.</li></ul></ul>' .
        '<ul><li><strong>Preview Button</strong></li>' .
        '<ul><li>Preview the content and format of your newsletter.</li></ul></ul>' .
        '<ul><li><strong>Send Button</strong></li>' .
        '<ul><li>Enables you to manually send the newsletter to your list of subscribers.</li></ul></ul>' .
        '<ul><li><i>Note: You can only edit an unpublished newsletter.</i></li></ul>');
define('_JNEWS_AUTORESPONDER_GUIDE', '<strong>Autoresponder Management:</strong><br/>'.
		  '<ul><li>Provided that you have created <i><u>Auto-responder</u></i> type of list you can proceed creating your <i><u>Autoresponder</u></i>.</li>'.
		  '<li>During the creation process you can specify the <i><u>Number of Delays</u></i> for your autoresponder, after the previous one has been processed.</li>' .
		  '<li> The process is more or less the same on how to create your newsletter.</li></ul>');
define('_JNEWS_SMARTNEWSLETTER_GUIDE', '<strong>Smart-Newsletter Management:</strong> <br/>' .
		 '<ul><li>Provided that you have created <i>list(s)</i> and <i>latest created</i>, <i>modified</i> and <i>published article</i> on your site you can proceed creating <i><u>SmartNewsletter</u></i>.</li>'.
         '<li>The creation process is more or less the same with Newsletter Creation.</li>' .
         '<li>From the <i><u>Smart-Newsletter Tab</u></i> during creation you can specify your settings for the processing of your Smart-Newsletters.</li>');
define('_JNEWS_TEMPLATES_GUIDE', '<strong>Template Management:</strong><br><ul><li>Templates can be very useful in creating newsletter.</li>' .
		'<li>This view will allow you to create Templates for your newsletters</li>' .
		'<li><i><u>Default Template</u></i> will be applied to the newly created newsletter.</li>' .
		'<li><i><u>Inline CSS</u></i> of the template will be applied/inherited to the created newsletter.</li>' .
		'<li>You can also choose a <i><u>Background Color</u></i> that will be a background of the newsletter.</li>' .
		'<li>Note: Only newly created newsletter will get the html of the default template</li></ul>' .
		'<ul><strong>Default Button</strong>'.
		'<ul><li>Inorder to make your Template as the default template to be used in your newsletter you just need to click on this button.</li></ul></ul>');
define('_JNEWS_QUEUE_GUIDE','<strong>Queue Management:</strong><br/> ' .
		'<ul><li>This view enables you to see your <i><u>Queued Mailings</u></i>.' .
		'<li>These are your <i><u>Scheduled Newsletters</i></u>, <i><u>Autoresponders</i></u> and <i><u>Smart-Newsletters</i></u></li>'.
        '<li>The <i><u>Process Queue Button</i></u> will allow you to proces your queued mailings manually by just clicking the said button.</li>' .
        '<li>The <i><u>Reset S.N. Counter Button</i></u> will allow you to reset the <i>next send date</i> or <i>generated date</i> of your Smart-Newsletter.</li>' .
        '<li>The <i><u>Empty Queue Button</i></u> will allow you to clean the whole queue.</li></ul>');
define('_JNEWS_ABOUT_GUIDE','jnews');
define('_JNEWS_IMPORT_GUIDE','<strong>Import Management:</strong><br/>'.
         '<ul><li>Here you can import your subscribers to all your lists or to select lists.</li>'.
         '<li>By following the link given below, you can proceed importing your subscribers.</li>'.
         '<li><i>Note: You need to create first your lists before importing your subscribers.</i></li></ul>');
define('_JNEWS_CONFIGURATION_GUIDE','<strong>Configuration:</strong><br/>'.
        '<ul>All the jnews configuration settings can be done in this area.<br/><br/>'.
	    '<strong>Mail Tab:</strong>'.
	    '<ul><li>The area where you can define the Mail Settings and Sending Settings of jNews depending on your server requirements.</li></ul>'.
	    '<br/><strong>Subscribers Tab:</strong>'.
	    '<ul><li>The area where we can define the subscription settings both from the backend and frontend of your site.</li></ul>'.
	    '<br/><strong>Scheduler Tab:</strong>'.
	    '<ul><li>The area where we can specify the Scheduler Frequency so do with Maintenance Settings on the sending of your mailings.</li>
         <li>The Information entered on this area depends also on your server requirements or server limitation.</li></ul>'.
	    '<br/><strong>Logs & Stats Tab:</strong>'.
	    '<ul><li>The area to specify the Statistics Settings and Logs Settings.</li></ul>'.
	    '<br/><strong>Archive Tab:</strong>'.
	    '<ul><li>This is mainly used for the auto archive frequency.</li></ul>'.
	    '<br/><strong>Miscellaneous Tab:</strong>'.
	    '<ul><li>All the other settings and preferences can be found here.</li></ul>'.
	    '<br/><strong>Queue Tab:</strong>'.
	    '<ul><li>Mainly used for the Queue Management View (available for Plus and Pro Version).</li></ul>'.
	    '<br/><strong>License Tab:</strong>'.
	    '<ul><li>The area where we can validate the license by just following the steps presented.</li></ul></ul>');
define('_JNEWS_EMPTY_Q','Empty Queue');
define('_JNEWS_RESET_SN','Reset S.N. Counter');
define('_JNEWS_Q_M1','There are no emails in the queue.');
define('_JNEWS_INSTALL_CLICKSTART', 'Click here to get started!');
define('_JNEWS_INSTALL_DESC', 'Thank you for choosing jNews.<br><br>
jNews is a mailing lists, newsletters, auto-responders and follow up tool for communicating effectively with your users and customers.');
define('_JNEWS_INSTALL_ERRORN' , 'If you have error during the installation process, please refer to our');
define('_JNEWS_INSTALL_DOC' , 'documentation here.');
define('_JNEWS_INSTALL_SUCC' , 'Successfuly Installed.');
define('_JNEWS_INSTALL_STATUS_CONFIG' , 'jNews Configuration:');
define('_JNEWS_INSTALL_STATUS_PLUGIN' , 'jNews Plugin(Bot):');
define('_JNEWS_INSTALL_STATUS_MOD' , 'jNews Module:');
define('_JNEWS_INSTALL_UPDATES' , 'jNews Updates');
define('_JNEWS_STATS_GUIDE', '<strong>Mailing Reports: </strong><br/>'.
		'<ul> <li>It will generate a list of mailings sent based on the given date range. </li> ' .
		'<li>It will count the following: <ul><li> the no. of mails sent in HTML & Text Format,</li>' .
			'<li> no. of how many viewed the mails in HTML format, </li>' .
			'<li>how many mail sent that are failed, </li><li>still on-process (pending), ' .
			'</li><li>email bounced,</li> <li>and the total sent is the no. of emails sent on each mailing.</li> </ul></li></ul>'.
		'<strong>List Reports:</strong> <br/>'.
		'<ul> <li>It will generate a listing of List Names based on the date of subscriptions on a given date range. </li>' .
			'<li>It will list the following:  <ul><li>total no. of subscribers who made a subscription </li> ' .
			'<li>total no. of subscribers who unsubscribed, </li>' .
			'<li>total no. of confirmed and unconfirmed subscribers on each list type. </li>  </ul></li></ul>'.
		'<strong>Subscribers Report:</strong> <br/>'.
		'<ul> <li>It will generate a report on the total no. of subscribers on a given date range.</li> </ul>'.
		'<strong>How to Export the Report into CSV File:</strong>'.
		'<ul> <li>On each Reports (Mailing, List and Subscribers), an export icon is found at the upper right of each tab.</li>'.
		'<li>Click the export icon to export the file.</li></ul>'
		);
define('_JNEWS_TEMPLATE_ALIAS' , 'Alias');
define('_JNEWS_SEARCH' , 'Search');
define('_JNEWS_SEARCH_GO' , 'Go');
define('_JNEWS_SEARCH_RESET' , 'Reset');
define('_JNEWS_SENDER_LIST_INFO', 'Click to select sender from list' );
define('_JNEWS_FILTER_MAILING' , 'Select a Mailing ');
define('_JNEWS_MESSAGE_QUEUE' , 'All Mailings in the Queue ');
define('_JNEWS_FILTER_LIST' , 'Select Type');
define('_JNEWS_MAILING_TAG' , 'Tag');
define('_JNEWS_MAILING_TAGINSERT' , 'Insert');
define('_JNEWS_MAILING_TAG_INSTRUCT' , '<p>Select the desired tag to be added and click insert.<br> Note: <i>Make sure to place the cursor in the text editor where you want to insert.</i></p>');
define('_JNEWS_TAG_SUBSCRIPTION', '{tag:subscriptions}');
define('_JNEWS_TAG_UNSUBSCRIBE', '{tag:unsubscribe}');
define('_JNEWS_TAG_SUBSCRIPTION_DESC', 'This will be replaced by the defined constant "_JNEWS_CHANGE_EMAIL_SUBSCRIPTION" in the translation.');
define('_JNEWS_TAG_UNSUBSCRIBE_DESC', 'This will be replaced by the defined constant "_JNEWS_UNSUBSCRIBE" in the translation.');
define('_JNEWS_TAG_VIEWONLINETXT', '{viewonline:text here}');
define('_JNEWS_TAG_VIEWONLINE', 'view it in your browser');
define('_JNEWS_TAG_VIEWONLINE_DESC', 'This will be replaced by either the default text or what you put in the "text here" with a link.');

//since 1.1.0
define('_JNEWS_SHOW_CRON','Enable joobi cron');

define('_JNEWS_SHOW_CRON_TIPS','Enables the cron set up upon the installation of jNews.<br>This cron was set up in http://www.joobi.co and will be triggered every 15 minutes');
define('_JNEWS_CRON_FSETTINGS' , 'Cron Settings');

define('_JNEWS_INSTALL_ACAUPDATEMSG' , 'Do you want to import your database from Acajoom to jNews?');
define('_JNEWS_INSTALL_ACAUPDATEBTN' , 'Import Acajoom Data');
define('_JNEWS_INSTALL_ACAUPDATENOTE' , 'NOTE : This will transfer data stored from Acajoom tables to jNews tables.');

define('_JNEWS_MAILING_UPDATED' , 'Mailings successfully imported.');
define('_JNEWS_DETAIL_UPDATED' , 'Stats Details successfully imported');
define('_JNEWS_GLOBAL_UPDATED' , 'Stats Globals successfully imported');
define('_JNEWS_SUBSCRIBER_UPDATED' , 'Subscribers successfully imported');
define('_JNEWS_QUEUE_UPDATED' , 'Queues successfully imported');
define('_JNEWS_LISTSUBSCRIBER_UPDATED' , 'List Subscribers successfully imported');

define('_JNEWS_LIST_UPDATED_FAILED' , 'No Lists successfully imported');
define('_JNEWS_MAILING_UPDATED_FAILED' , 'No Mailings successfully imported');
define('_JNEWS_DETAIL_UPDATED_FAILED' , 'No Detailed Statistics successfully imported');
define('_JNEWS_GLOBAL_UPDATED_FAILED' , 'No Global Statistics successfully imported');
define('_JNEWS_SUBSCRIBER_UPDATED_FAILED' , 'No Subscribers successfully imported');
define('_JNEWS_QUEUE_UPDATED_FAILED' , 'No records successfully imported to Queue');
define('_JNEWS_LISTSUBSCRIBER_UPDATED_FAILED' , 'No records successfully imported to List Subscribers');

define('_JNEWS_LEGEND' , 'Legend');
define('_JNEWS_NOTVISIBLE', 'Not Visible');
define('_JNEWS_SCHEDULED', 'Scheduled');
define('_JNEWS_SUBSCRIBERS_UNREGISTERED', 'Unregistered');
define('_JNEWS_TEMPLATE_UPLOAD_SUCCESS', 'Successfully uploaded template' );
define('_JNEWS_TEMPLATE_UPLOAD_FAIL', 'Fail to upload template. Kindly verify the zip file if it has the main index.html file.' );
define('_JNEWS_UPLOAD_ZIP_INVALID', 'Can only upload templates in zip files' );
define('_JNEWS_CUSTOMCSS', 'Input your Custom CSS here');
define('_JNEWS_TEMPLATE_ALERT', 'Template name and alias are required!');

//since 2.2.0
define('_JNEWS_UNSUB_NOTIFYMSG','Send Unsubscribe Notification');
define('_JNEWS_SEND_UNSUBNOTIFY_TIPS','Specify here if you want to send an unsubscription notification to the list owner or not.');
define('_JNEWS_UNSUB_ADMINMESSAGE', 'Unsubscribe Notification Message');
define('_JNEWS_INFO_AMIN_UNSUB_NOTIFY', 'This message will be send to List Owner or List creator when someone unsubscribes to the list. Any message can be entered here.');

//templates
define('_JNEWS_CSS_TOGGLESTYLE','Toggle Styling');
define('_JNEWS_EXTERNALCSS_LINK','Add External CSS Link');
define('_JNEWS_EXTERNALCSS_PROCESS','Process');
define('_JNEWS_TEMP_COMBINECLASS','Combined class selector');
define('_JNEWS_COMBINECLASS_SUPPORT','is not supported');
define('_JNEWS_TEMP_COMBINECLASS_IN','in');
define('_JNEWS_TEMP_HTMLTAG','Found html tag ');
define('_JNEWS_TEMP_CONTDEV','You may contact developer for it to be added');
define('_JNEWS_TEMP_COMBCLASSPSEUDO','Combined pseudo-class selector');
define('_JNEWS_TEMP_COMBCLASSEID','or element id');

//Menus
define('_JNEWS_MENU_LIVE_SUPPORT','Live Support');

//Tags
define ('_JNEWS_SMART_TAG', 'This will be replaced by the latest created, modified and published article when you create a Smart-Newsletter type of mailing.');

//Toobar Menus
define('_JNEWS_DONEW_SUBSCRIBERB', 'Name and Email are required!');

//since 3.1.0
define('_JNEWS_IP', 'IP');
define('_JNEWS_MENU_STATS_REPORTS', 'Statistics');
define('_JNEWS_LIST_T_ADMIN_NOTIFICATION' , 'Notification');
define('_JNEWS_MENU_REFRESH_STATS' , 'Refresh');
define('_JNEWS_MENU_GENERATE_STATS' , 'Generate');

//since 3.2.0
define('_JNEWS_LIST_T_LIST' , 'List');
define('_JNEWS_UNSUBSCRIBE_ADMIN_NOTIFICATION', '<p>Dear [LISTOWNERNAME],<br /> <br /></p> <p style="padding-left: 30px;">This is an automated message from [SITE]. To inform you that a user unsubscribed to your newsletter list.</p> <p style="padding-left: 60px;"><strong>Details</strong></p> <p style="padding-left: 60px;">Date and Time of Unsubscription: <strong>{tag:date}</strong><br />Subscriber Name: <strong>[SUBSCRIBERNAME]</strong><br />Subscriber Email: <strong>[SUBSCRIBEREMAIL]</strong></p> <p style="padding-left: 60px;">Unsubscribed List: <strong>[LISTID] - [LISTNAME]</strong></p> <p style="padding-left: 30px;">Please do not response to this message as it is automatically generated and is for information purposes only.</p> <p> </p> <p>Thank You!</p>');

//Tagging
define('_JNEWS_TAG_MODNAME' , 'Module Name');
define('_JNEWS_TAG_MODTYPE' , 'Type');
define('_JNEWS_TAG_MODPOSITION' , 'Position');
define('_JNEWS_TAG_ACL' , 'Access Level');
define('_JNEWS_TAG_SPECIAL' , 'Special');
define('_JNEWS_TAG_PUBLIC' , 'Public');
define('_JNEWS_TAG_ARTICLESECTION' , 'Section');
define('_JNEWS_TAG_ARTICLECATEGORY' , 'Category');
define('_JNEWS_TAGMENU_MODULE' , 'Joomla Module');
define('_JNEWS_TAGMENU_AUTOCONTENT' , 'Auto Content');
define('_JNEWS_TAGMENU_SUBSCRIPTION' , 'Subscription');
define('_JNEWS_TAGMENU_USERS' , 'Users');
define('_JNEWS_TAGMENU_DATETIME' , 'Date/Time');
define('_JNEWS_TAGMENU_WEBSITE' , 'Site Links');
define('_JNEWS_TAGMENU_CONTENT' , 'Content');
define('_JNEWS_TAGPICKLIST_ORDERING' , 'Ordering');
define('_JNEWS_TAGPICKLIST_ORDERINGTIP' , 'Select the way you want your articles to be ordered.');
define('_JNEWS_TAGPICKLIST_CREATED' , 'Created Date (Newest First)');
define('_JNEWS_TAGPICKLIST_TITLE' , 'Title');
define('_JNEWS_TAGPICKLIST_Order' , 'Order');

define('_JNEWS_SELECT_MAILING', 'Please select a mail to edit!');
define('_JNEWS_DELETE_MAILING', 'Please select a mail to delete!');
define('_JNEWS_COPY_MAILING', 'Please select a mail to copy!');
define('_JNEWS_TAG_CONFIRM_DESC', 'This will be replaced by the defined constant "_JNEWS_CONFIRM_SUBSCRIPTION" in the translation with the confirmation link.');
define('_JNEWS_TEMPLATE_SAVED', 'Template successfully saved.');
define('_JNEWS_SUBSCRIPTION_NOT_AVAIL_LIST', 'You are trying to subscribe to a listid that does not exist.');

//since 4.0.0
define('_JNEWS_MENU_TAG' , 'Tags');
define('_JNEWS_TAG_EMAIL_DESC', 'This will be replaced by the email of the subscriber.');
define('_JNEWS_TAG_FWDTOFRIEND', 'Forward to a friend.');
define('_JNEWS_TAGTITLE_SITE', 'Site Links');
define('_JNEWS_TAGTITLE_CONTENT', 'Joomla Contents');
define('_JNEWS_TAGTITLE_AUTOCONTENT', 'Automatic Joomla Contents');
define('_JNEWS_TAGTITLE_MOD', 'Joomla Modules');
define('_JNEWS_TAGCAPTION_ALL', 'ALL');
define('_JNEWS_SUCCESS_COPIED' , ' successfully copied.');
define('_JNEWS_TAGCAPTION_ALLSECCAT' , 'ALL SECTIONS AND CATEGORIES');
define('_JNEWS_FWD_MYDETAILS' , 'My Details');
define('_JNEWS_FWD_WANTTO' , 'I want to forward this email to');
define('_JNEWS_FWD_MESSAGE' , 'Enter a message');
define('_JNEWS_FWD_MESSAGEHID' , 'This email was forwarded to you by');
define('_JNEWS_FWD_SENDEMAIL' , 'Send Email');
define('_JNEWS_FWD_ADDFIELD' , 'Add another friend.');

define('_JNEWS_NEWSLETTER_ARCHIVE', 'Newsletter Archive');
define('_JNEWS_FWDTOFRIEND_ALRT_UNAME', 'Please enter your name.');
define('_JNEWS_FWDTOFRIEND_ALRT_UEMAIL', 'Please enter your valid e-mail address.');
define('_JNEWS_FWDTOFRIEND_ALRT_FNAME', 'Please enter your friend\'s name.');
define('_JNEWS_FWDTOFRIEND_ALRT_FEMAIL', 'Please enter a valid e-mail address of your friend.');
define('_JNEWS_FWDTOFRIEND_SUCCESS', 'Mailing successfully forwarded to ');
define('_JNEWS_FWDTOFRIEND_FAILED', 'Mailing not successfully forwarded to ');
define('_JNEWS_TAGSITE_TAGTIP', 'Click Insert to add the tag in the newsletter.');
define('_JNEWS_TAGSITE_CAPTION', 'Tag Caption');
define('_JNEWS_TAGSITE_CAPTIONTIP', 'Change the tag caption or text here.');
define('_JNEWS_TAGSMART_ALERT_SELECT', 'Please select your Automatic Content to be added in your newsletter!');
define('_JNEWS_ARLIST', 'Auto-responders');
define('_JNEWS_NEW_SUBSCRIBER', 'Subscriber Succesfully Saved.');
define('_JNEWS_EDIT_AR', 'Edit an Auto-responder');
define('_JNEWS_ARINFO_LIST_DELAY', 'Specify the delay(in days) of this autoresponder from the date of subscription.');
define('_JNEWS_SUBS_LIST', 'This Auto-responder will be attached to the following selected lists:');
define('_JNEWS_SUBS_LIST2', 'Attach lists');
define('_JNEWS_SUBS_LIST_TIPS', 'Attach this auto-responder to the following lists . If a user subscribes to these lists they will also be subscribed to the autoresponder. ');
define('_JNEWS_PRIORD_LISTTYPE','Prioritized list type');
define('_JNEWS_PRIORD_LISTTYPE_TIPS', 'If there is a conflict between lists in subscription of a user prioritize either the list or the auto-responder.');
define('_JNEWS_PRIORD_SUBS','Prioritized subscription');
define('_JNEWS_PRIORD_SUBS_TIPS', 'If there is a conflict between subscription or unsubscription to a list prioritize either the subscription, unsubscription or just do nothing to the existing subscriptions.<br/><b>Ignore Changes</b>: We do not change the subscription if there is a conflict.<br/><b>Subscription</b>: We force the subscription of the user to the auto-responders.<br/><b>Unsubscription</b>: We unsubscribe the user from the auto-responder.');
define('_JNEWS_REMAIN_SUBS','Ignore Changes');
define('_JNEWS_UNSUBS','Unsubscription');
define('_JNEWS_SUBSCRIPTION_AR','Subscription to Auto-responder');
define('_JNEWS_SUBSCRIPTION_LIST','Subscription to List');
define('_JNEWS_YOUR_CRON', 'Your Cron url');
define('_JNEWS_LAUNCH_CRON', 'Launch Cron');

define('_JNEWS_SAFEUNSUBSCRIBE', 'Safe Unsubscribe');
define('_JNEWS_INVIUNPUB', 'The lists you subscribed are either in invisible status or unpublished.<br> Only the admin of the site can unsubscribe you from those lists as of now.');
define('_JNEWS_UNSUBSTOLISTS_MESSAGE','Are you sure you want to unsubscribe from these lists?');
define('_JNEWS_SELECT_ALLLISTS','Click to select all List');
define('_JNEWS_SELECT_ALLLAUTOR','Click to select all Auto-responder');
define('_JNEWS_UNSUBSLINK_TIP','Select yes if you prefer to show unsubscribe link on mailings');
define('_JNEWS_CHANGESUBSLINK_TIP','Select yes if you prefer to show subscription link on mailings for subscriber to change his subscription');
define('JNEWS_AUTOMATIC_CRON', 'An automatic cron is created upon the installation of jNews.<br/>This cron was automatically set up in www.joobi.co. This cron has the frequency of 15 minutes.');
define('_JNEWS_IMPORTSUB_TIPS','Import subscribers. The information in the file need to be to the following format: <b>Name, email, receiveHTML(1/0), <span style="color: rgb(255, 0, 0);">confirmed(1/0)</span></b>');
define('_JNEWS_NOSMARTTAG', 'The smartnewsletter doesn\'t contain a [SMARTNEWSLETTER] tag yet. Please insert the tag in the content.');
define('_JNEWS_DELETEBTN','Delete Queue');
define('_JNEWS_MENU_STOPQ','Stop Queue');
define('_JNEWS_MENU_STARTQ','Start Queue');
define('_JNEWS_MAILING_QUEUE_DELETED', 'The queue entry have been successfully deleted for this mailing.');
define('_JNEWS_QUEUE_SETTING','Queue Setting');
define('_JNEWS_QUEUESTATS_ON','On');
define('_JNEWS_QUEUESTATS_OF','Off');
define('_JNEWS_QUEUESTATS_TIPS','Turn On if you want the Process Queue to start or Off if you want it to stop.');
define('_JNEWS_MENU_STARTQ_MSG','The processing of queue has been started.');
define('_JNEWS_MENU_STOPQ_MSG','The processing of queue has been stopped.');
define('_JNEWS_QUEUESTATS_NOTIFY','The queue has been stopped if you want to continue proccessing it, you need to ');

//since
define('_JNEWS_NEW_URL_PASS_TIPS','Enter the password to be able to add a subscriber via url. Append the catcher variable passwordA in the URL.');
define('_JNEWS_CRON_PASSWORD', 'Cron Password');
define('_JNEWS_USE_CRON_PASS', 'Use Password for Cron');

//since 4.2.0
define('_JNEWS_QUEUE_STATUS','Queue Status');
define('_JNEWS_SMTPPORT','SMTP Port');
define('_JNEWS_SMARTQUEUE','Smart Queue');
define('_JNEWS_SMARTQ_ON','On');
define('_JNEWS_SMARTQ_OF','Off');
define('_JNEWS_SMARTQ_TIPS','Turn On if you want to enable the Smart processing of queue which will overcome your server limitation.');
define('_JNEWS_SUB_INFO_FIELDS', 'Show More Subscriber Info');
define('_JNEWS_SUB_INFO_FIELDS_TIPS', 'Show IP ,Register Date, User id and Black List fields in the subscriber form in the frontend');
define('_JNEWS_JSUB', 'Frontend Management');
define('_JNEWS_JSUB_TIPS', 'Choose if only the owner of the list or the super admin can only edit and create/view newsletters in the frontend. A user can own a list if he is subscribed via jSubscription');
define('_JNEWS_BYOWNER', 'By Owner');
define('_JNEWS_LIST_ACESS', 'By List Access');
define('_JNEWS_CAPTCHA_WARN',   'Cannot create Captcha Image either you do not have php GD Library installed or php GD Library has not been loaded with TFF support <br>Check your phpinfo() or you can turn off the Enable Captcha option from ');
define('_JNEWS_CAPTCHA_LINK','jNews Configuration under Subscriber Tab');
define('_JNEWS_MORE_TEMPLATES','More Templates');

//Since 5.0.0
define('_JNEWS_TAGMENU_K2CONTENT', 'K2 Contents');
define('_JNEWS_TAGMENU_VMPRODUCTS', 'Virtuemart Products');
define('_JNEWS_TEMPLATE_AVLB','Availability');
define('_JNEWS_TEMPLATE_INS','Installed');
define('_JNEWS_TEMPLATE_DWN','Download');
define('_JNEWS_TEMPLATE_FDWN','Free Download');
define('_JNEWS_TEMPLATE_IMG','Image');
define('_JNEWS_SUBS_INFO','You do not have subscription record to any mailing lists so it is not possible to unsubscribe here.');
define ('_JNEWS_UNSUBS_STATUS','You are already unsubscribe to the list.');
define('_JNEWS_CAPTCHAW', 'Captcha Width');
define('_JNEWS_CAPTCHAW_TIPS', 'Define the width of the captcha in the subscriber module');
define('_JNEWS_CAPTCHAH', 'Captcha Height');
define('_JNEWS_CAPTCHAH_TIPS', 'Define the height of the captcha in the subscriber module');
define('_JNEWS_CAPTCHA_MSG', 'Kindly enter the correct captcha code.');
define('_JNEWS_MCRYPT_MESSAGE', 'The captcha has been turned on without the mcrypt library enabled.<br>Kindly enable the mcrypt extension in your php.ini.<br>You may also want to disable captcha in ');

//Since 5.1.0
define('_JNEWS_FORCED_HTML', 'Send HTML Mailing Only?');
define('_JNEWS_FORCED_HTML_TIP','Yes if you want to force only html mailing will be sent to your subscribers.');

//Since social edition
define('_JNEWS_LISTS_CONFIG','Lists');
define('_JNEWS_LISTS_SETTINGS','Lists Settings');
define('_JNEWS_USE_MASTERLISTS','Use Master Lists?');
define('_JNEWS_USE_MASTERLISTS_TIPS','Yes if you want to use master lists [All Potential Site Members, All Registered Subscribers, All Front-end Lists Subscribers] of your subscribers, No otherwise');
define('_JNEWS_LIST_CREATORFE','Front-end List Creator');
define('_JNEWS_LIST_CREATORFE_TIPS','Define the access level who you will allow to create lists on Front-end');
define('_JNEWS_LIST_CREATORFE_WARN','(You need to specify here the group level of user who can create list on the frontend.)');

define('_JNEWS_BLOG_RENDERING', 'Blog Rendering');
define('_JNEWS_BLOG_TIPS', 'Full Blog: this will load the full blog in the newsletter<br>Intro Only: this will load the x number of characters of the blog with a read more link to the complete blog in your site');
define('_JNEWS_TAGMENU_BLOGS', 'Lyften Bloggie');
define('_JNEWS_TAGMENU_DEALS', 'Deal');
define('_JNEWS_DEALS_INTRO', 'Intro Box');
define('_JNEWS_DEALS_FULL', 'Full Description');
define('_JNEWS_DEAL_NAME', 'Deal Name/<br> Short Description');
define('_JNEWS_DEAL_INDUSTRY', 'Industry/<br> Country');
define('_JNEWS_DEAL_TARGET', 'Target Amount/<br> Inv Range');
define('_JNEWS_DEAL_TYPE_TIPS', 'Full Description: will include the entire deal in the newsletter.<br />' .
		'Intro box: will include only the introduction of the deal in the newsletter.<br/>');
define('_JNEWS_CONTENT_TIP', 'ID of the content to be inserted in the newsletter');
define('_JNEWS_CONTENT_ID', 'Content ID');
define('_JNEWS_BLOG_TIP', 'ID of the blog to be inserted in the newsletter');
define('_JNEWS_BLOG_ID', 'Blog ID');
define('_JNEWS_TAGMENU_JOMSOCIAL','JomSocial');
define('_JNEWS_TAGCAPTION_ALLCAT','All Categories'); //_JNEWS_TAG_ARTICLECATEGORY
define('_JNEWS_PLUG_INSTALLED','Plugin %s installed successfully');
define('_JNEWS_MODULE_INSTALLED','Module %s installed successfully');
define('_JNEWS_EMAIL_LISTS', 'Lists');
define('_JNEWS_LEADS_REP', 'Leads Reports');
define('_JNEWS_SUBSCRIBERS', 'Subscribers');
define('_JNEWS_ALLOW_SN', 'Allow Smart-Newsletter');
define('_JNEWS_ALLOW_SN_TIP', 'Allow creation of smart-newsletter in the frontend.');
define('_JNEWS_UNSUBSCRIBE_SUBJECT_NOT', 'Unsubscription Notification');
define('_JNEWS_RED_SUBSCRIPTION', 'Redirect After Subscription');
define('_JNEWS_RED_SUBS_TIP', 'Redirect page after subscription from the module.');
define('_JNEWS_PLEASE_WAIT', 'Please wait...');
define('_JNEWS_MOD_MESSAGE', 'Pop-up Subscription Message');
define('_JNEWS_MOD_MESSAGE_TIP', 'Select Yes to pop-up the subscription message. Select No to put the message in the module');

//since 6.1.0
define('_JNEWS_CREATE_NEWSUBS_TIPS', 'Specify here the default number of rows of subscribers information to be created or added in the front-end.');
define('_JNEWS_CREATE_NEWSUBS','Add New Subsbcribers in');
define('_JNEWS_ROWS', 'rows');
define('_JNEWS_USE_BACKENDVIEW', 'Add Subscribers Using Default View');
define('_JNEWS_USE_BACKENDVIEW_TIPS', 'Specify here if you want to add subscribers in front-end using the default view used in the back-end');

define('_JNEWS_TERMS_CONDITIONS', 'Terms and Condition');
define('_JNEWS_TERMS_WARN', 'Please check the terms and conditions option. To read the terms and conditions kindly click on the Terms and Conditions link');
define('_JNEWS_TERMS_LINK','Terms and Condtion Link');
define('_JNEWS_TERMS_LINK_TIPS','Enter the complete link for the terms and conditions here.<br><strong>(ex. http://www.yoursite.com/index.php?option=com_content&view=article&id=[article_id]&Itemid=[Item_id]</strong>');
define('_JNEWS_SHOW_TERMS','Show Terms and Condition');
define('_JNEWS_SHOW_TERMS_TIPS','Add the Terms and Condition in the subscriber module');
define('_JNEWS_CHECK_TERMS','Check Terms and Condition');
define('_JNEWS_CHECK_TERMS_TIPS','Check or uncheck the terms and condition by default.');

//since 7.0.0
define('_JNEWS_CRON_SYSTEM', 'Cron System');
define('_JNEWS_CRON_SYSTEM_TIPS', 'Defines the cron used to launched the automatic scheduling of jNews.<br><br> [0] <strong> No Cron </strong> - if you do not want to use the automatic sending of mailing.' .
		'<br><br>[1] <strong>jNews Cron System Plugin</strong> - if you want your jNews Cron will be triggered within your site itself.<br><br>[2] <strong>Joobi Cron</strong> - if you want to avail the free Cron Task provided by <a href="http://www.joobi.co">Joobi</a>. ' .
		'<br><br>[3] <strong>External Cron</strong> - if you prefer to have your own cron task on your server.');
define('_JNEWS_NO_CRON', 'No Cron');
define('_JNEWS_CRON_PLUGIN', 'jNews Cron System Plugin');
define('_JNEWS_CRON_JOOBI','Joobi Cron');
define('_JNEWS_CRON_EXTERNAL','External Cron');
define('JNEWS_CAPTCHA_FTWARN','Cannot view the captcha image because FreeType Support of your GD Library is disabled. ' .
		'<br/>You may go to the backend of your site -> Help -> System Info -> PHP Information Tab -> gd section and check if FreeType Support is enable or not. ' .
		'<br/> If disabled you can enable it in the php.ini file of your server.');

//since 7.1.0
define('_JNEWS_SUBSCRIPTION_SETTINGS', 'Subscription Settings');
define('_JNEWS_SUBNOTIFY_MSG', 'Subscribe Notify Message');
define('_JNEWS_SUBNOTIFY_MSG_TIPS','This message will be send to List Owner or List creator when a subscriber subscribes to the list. Any message can be entered here.');
define('_JNEWS_SUBSDEFAULT_NOTIFYMSG', '<p>Dear [LISTOWNERNAME],<br /> <br /></p>
<p style="padding-left: 30px;">This is an automated message from [SITE] to notify you that a user subscribed to your newsletter list.</p>
<p style="padding-left: 60px;"><strong>Details</strong></p>
<p style="padding-left: 60px;">Date and Time of Subscription: <strong>{tag:date}</strong><br />Subscriber Name: <strong>[SUBSCRIBERNAME]</strong><br />Subscriber Email: <strong>[SUBSCRIBEREMAIL]</strong></p>
<p style="padding-left: 60px;">Subscribed List: <strong>[LISTID] - [LISTNAME]</strong></p>
<p style="padding-left: 30px;">Please do not response to this message as it is automatically generated and is for information purposes only.</p>
<p> </p>
<p>Thank You!</p>');
define('_JNEWS_SUBS_NOTIFYSUBJECT','jNews Subscription Notification');
define('_JNEWS_UNSUBS_NOTIFYSUBJECT','jNews Unsubscription Notification');
define('_JNEWS_SENDTEST_CONFIGSUCC','If you receive this email, it means that you will be able to send any other e-email from the website.');
define('_JNEWS_SENDTEST_CONFIGERROR','Kindly review your mail configuration there might be some settings that were not set properly.');
define('_JNEWS_LIST_UNPUBMSG','Your list is unpublished, inorder to use the list you created you need to publish it first.');
define('_JNEWS_LIST_INVIMSG','Your list is invisible on frontend, for your subscriber to see it you need to make your list visible first.');
define('_JNEWS_TEMPLATE_STYLE_TH5','Title h5');
define('_JNEWS_TEMPLATE_STYLE_TH6','Title h6');
define('_JNEWS_SENDTEST_TEMP','Send Test Template');
define('_JNEWS_NOCRON_USED','No cron task created or used for jNews.');

//since 7.2.0
define('_JNEWS_LISTS_UNSUBMSG','You are already unsubscribe from the Mailing Lists.');
define('_JNEWS_SEND_NEWSLETTER','Send Newsletter');
define('_JNEWS_MSG_SENT_SUCCESS', 'sent successfully to');
define('_JNEWS_MSG_SENT_FAIL', 'not sent successfully to');
define('_JNEWS_QUEUE_STATUSSEND', 'Queue Status');
define('_JNEWS_MENU_CONTINUE','Continue');
define('_JNEWS_QUEUE_EMPTYINFO','The queue is empty and there are no scheduled mailings to be processed.');
define('_JNEWS_QUEUE_READYTOSEND','Mailings Ready to be Sent');
define('_JNEWS_QUEUE_SCHEDULED','Scheduled Mailings');
define('_JNEWS_QUEUE_STILLONQUEUE','Mailings still on Queue at');
define('_JNEWS_SENDBTN','Send');

//since 7.3.0
define('_JNEWS_SMTPSECURE', 'SMTP Secure');
define('_JNEWS_SMTPSECURE_TIPS', 'If you use a SMTP Server, you can add a secure process before connecting to the SMTP Server.');
define('_JNEWS_NO_LISTS_AVAILABLE', 'No lists available for this type.');

//since 7.4.0
//define('_JNEWS_NO_LISTS_AVAILABLE', 'No lists available for this type.');
define('_JNEWS__LIST_HTML_EDITOR', 'List HTML editor is turned off. <br /> If you wish to add a description for the list kindly turn on the List Description editor in the Configuration>>Miscellaneoous tab.');
define('_JNEWS_TAGMODULE_REPLACE_MESSAGE', 'If your module tag was not replaced or has been replaced with an empty string, please check if the allow_url_fopen is set to on in your php.ini or if not please check if your server supports cURL.<br />It is a requirement to turn on the allow_url_fopen or curl to be able to replace the module tag in the preview and in sending from the backend. If you don\'t have either of the two the module tag will only be replaced if it is sent via the cron');
define('_JNEWS_QUEUE_PROCESS_ERROR', 'An error occured while retrieving queue entries to be processed; there is too much entries to be retrieved from the queue.<br /> Please reduce the maximum emails per task in the Scheduler tab in the jNews Configuration.');
define('_JNEWS_TOO_MUCH_CRON_MAX_EMAILS', 'You have too much max cron emails to be processed per task.<br /> Please reduce the number of emails to be processed per task to avoid a problem when loading the entries in the queue for processing. <br />Kindly lessen the maximum emails per task but increase the max cron frequency(frequency approved by your provider) to still send newsletters fast.');
define('_JNEWS_VIEW_BROWSER', 'View on the Browser');
define('_JNEWS_THE_MAILING', 'The mailing ');
define('_JNEWS_SENT_ALL', ' successfully sent to the subscribers.');
define('_JNEWS_NO_MAILINGS_YET', 'There are no mailings to be sent on this time.');
define('_JNEWS_CRON_TRIGGERRED', 'Last time cron triggered');
define('_JNEWS_CRON_TRIGGERRED_TIPS', 'Last time cron triggered');
define('_JNEWS_CRON_TRIGGERRED_ADD_INFO', 'Note: Even though the cron is triggerred it still can be that the queue and scheduled newsletters are not being processed.');
define('_JNEWS_UNSUBSCRIBE_ALL', 'Unsubscribe to All Lists');
define('_JNEWS_UNSUBSCRIBE_ALL_OR', 'or click here to Unsubscribe from All Lists');
define('_JNEWS_UNSUBSCRIBE_ALL_MESS', 'You have been unsubscribed from all lists!');
define('_JNEWS_UNSUBSCRIBE_ALL_CAPTION', 'Show Unsubscribe to All Lists');
define('_JNEWS_UNSUBSCRIBE_ALL_CAPTION_TIPS', 'Select Yes to show the Unsubscribe To All Lists button in the frontend.');
define('_JNEWS_ATTEMPTED', 'Attempted to send');
define('_JNEWS_RESCHEDULED', 'This newsletter has been rescheduled and will attempt to send again.');
define('_JNEWS_REACHED_MAX_ATTEMPT', 'Note: If the no. of attempts in trying to send the newsletter already exceeded the maximum no. of attempts, this entry will be deleted from the queue.');
define('_JNEWS_REGWARN_COLUMN','Please enter');
define('_JNEWS_COLUMN_SHOW','Show Column ');
define('_JNEWS_SHOW_COLUMN_TIPS','Show/hide this column in your subscribers list-BE');
define('_JNEWS_INPUT_COLUMN','Column ');
define('_JNEWS_INPUT_COLUMN_TIPS','Enter your column ');
define('_JNEWS_COLUMN_DESC', 'This will be replaced by your user defined column ');
define('_JNEWS_HELP', 'Help');
define('_JNEWS_SEND_LOG_TO_TIPS', 'Send mailing reports to this email. If none is specified the mailing report will be sent to the first admin of the site');
define('_JNEWS_SEND_LOG_TO', 'Send mailing reports to');
define('_JNEWS_ASSIGN_LIS_TEMPLATE', 'List Template');
define('_JNEWS_ASSIGN_LIS_TEMPLATE_TIPS', 'Select default template to be used for this list');
define('_JNEWS_AUTO_OPTION_NO_SYNC', 'Sync No Users');
define('_JNEWS_QUEUE_BLOCK', 'Block');
define('_JNEWS_QUEUE_UNBLOCK', 'Unblock');
define('_JNEWS_TAGMENU_MEDIA_SHARE', 'Social Share');
define('_JNEWS_JOOBI_CRON', 'Joobi Cron System');
define('_JNEWS_JOOBI_CRON_TIPS', 'Select Yes to publish Joobi Cron and be able to use this cron system. Select No if you don\'t want to use this cron. This cron will be triggered every 15 minutes.');
define('_JNEWS_JNEWS_CRON', 'jNews Cron System Plugin');
define('_JNEWS_JNEWS_CRON_TIPS', 'Select Yes to publish jNews Cron System Plugin and be able to use this cron system. Select No if you don\'t want to use this cron. This cron will be triggered ever 15 minutes.');
define('_JNEWS_JOOBICRON_YES', 'Yes');
define('_JNEWS_JOOBICRON_NO', 'No');
define('_JNEWS_TITLE', 'This will be replaced with the title of the newsletter.');

//since 7.5.x
define('_JNEWS_CREATE_DATE', 'Create Date');
define('_JNEWS_MENU_SEND_TEST_TEXT', 'Send Test Email(Text)');
define('_JNEWS_CRON_NEXTTRIGGER', 'Next Cron Task');
define('_JNEWS_CRON_NEXTTRIGGER_TIPS', 'This date indicate when the cron task will be able to be triggered. If the URL get triggered before that time it will NOT trigger the queue.');
define('_JNEWS_AUTONEWS_DATE', 'Start Date');
define('_JNEWS_AUTONEWS_DATE_TIPS', 'Created: will only include the article last created.<br />Modified: will include the article last created AND modifed.');
define('_JNEWS_AUTONEWS_DATE_CREATED', 'Created');
define('_JNEWS_AUTONEWS_DATE_MODIFIED', 'Modified');
define('_JNEWS_UNSUBCRIBERS_VIEW', 'Unsubscribed');
define('_JNEWS_UNSUBSCRIBER_CONFIG', 'Unsubscribers');
define('_JNEWS_SUB_LISTTYPE_ALL', 'All Subscribers');
define('_JNEWS_SUB_LISTTYPE_ONLY_SUBCRIBED', 'Subscribed');
define('_JNEWS_SUB_LISTTYPE_ONLY_UNSUBCRIBED', 'Unsubscribed');
define('_JNEWS_SUB_LISTTYPE_ONLY_WAITINGCONF', 'Waiting Confirmation' );
define('_JNEWS_SUB_LISTTYPE_ONLY_BLOCKED', 'Blocked Users');
define('_JNEWS_MENU_SEND_TESTSPAM', 'Test for Spam');
define('_JNEWS_SPAMTEXT_MESSAGE_SENT_SUCCESSFULLY', 'Spam Test Email successfully sent, please check your mail box!');
define('_JNEWS_AUTONEWS_NEXT_GEN', 'Next generated date' );
define('_JNEWS_AUTONEWS_NEXT_GEN_TIPS', 'The next time jNews will generate a Newsletter' );
define('_JNEWS_AUTONEWS_SMARTNEWS_PROCESS', 'The system processed the SmartNewsletter ( %s ) and found %s  new published articles between %s and %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_IDS', 'There is no SmartNewsletter to generate yet for the ID %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_DATE', 'A SmartNewsletter will be generated after this date: %s .' );
define('_JNEWS_AUTONEWS_NO_SMARTNEWS_GENERATE_TIME', 'The current time is: %s .' );
define('_JNEWS_NEWSLETTER_BE_SENT', ' will be sent to ' );
define('_JNEWS_NEWSLETTER_BE_SUBCRIBERS', 'subscribers.' );
define('_JNEWS_NEWSLETTER_BE_NEXT', 'The next mailing will be sent after %s .' );
define('_JNEWS_NEWSLETTER_BE_READY_SENT', ' ready to be sent to ' );
define('_JNEWS_DESC_SUPERPACK', 'jNews SuperPack the ultimate mailing system including lots of preloaded templates. jNews! Your Communication Partner!');
define('_JNEWS_DESC_SOCIAL', 'jNews Social the ultimate mailing system for your Social community. jNews! Your Communication Partner!');

//since 7.6.x
define('_JNEWS_SNTAG_NO_REQUIRED', 'Multi-Purpose Smart-Newsletter');
define('_JNEWS_SNTAG_NO_REQUIRED_TIP', 'If YES the Smart-Newsletter will NOT require a [SMARTNEWSLETTER] tag and therefore can be used to schedule anything else, eg: latest members in JomSocial or latest calendar events.');
define('_JNEWS_SEND_MAIL_EMAIL', 'From email');
define('_JNEWS_SEND_MAIL_EMAIL_TIPS', 'Choose what email will show as the sender.');
define('_JNEWS_SUB_REDIRECT_URL', 'Subscription redirect URL');
define('_JNEWS_SUB_REDIRECT_URL_TIPS', 'Specified a redirect URL for the front-end component subscirption form.');
define('_JNEWS_SUCCESS_ALREADY_SUB', 'Your email already exists in our mailing list.');
define('_JNEWS_SUBSCRIBE_NOTIFICATION', 'List Subscription Notification');
define('_JNEWS_SUBSCRIBE_NOTIFICATION_TIPS', 'Specified a list of emails seperated by comma (,) to which you want the subscription notification to be sent to.');
define('_JNEWS_UNSUBSCRIBE_NOTIFICATION', 'List Unsubscription Notification');
define('_JNEWS_UNSUBSCRIBE_NOTIFICATION_TIPS', 'Specified a list of emails seperated by comma (,) to which you want the unsubscription notification to be sent to.');
define('_JNEWS_COMPONENT_THEME', 'Component Theme');
define('_JNEWS_COMPONENT_THEME_TIPS', 'Choose the theme you want to use for back-end and front-end.');
define('_JNEWS_TAGSITE_THEME', 'Display newsletter');
define('_JNEWS_TAGSITE_THEME_TIPS', 'Define if you want to display only the newsletter or if you want to include also Joomla template.');
define('_JNEWS_TAG_INSERT_TAG', 'Insert Tag');
define('_JNEWS_ALLOW_FE_AUTORESPONDERS', 'Allow FE Auto-Responders');
define('_JNEWS_ALLOW_FE_AUTORESPONDERS_TIPS', 'Allow the creation of auto-responders in the frontend.');

//since 7.7.x
define('_JNEWS_ARCHIVELINK_STANDARD', 'Standard');
define('_JNEWS_ARCHIVELINK_POPUP', 'Pop-Up');
define('_JNEWS_ARCHIVELINK_PAGE', 'New Page');
define('_JNEWS_ARCHIVE_LINK', 'Link to Archive');
define('_JNEWS_ARCHIVE_LINK_TIPS', 'Chose the type of link / windows for the display of the archived newsletter.');
define('_JNEWS_AUTONEWS_DATE_PUBLISHUP', 'Start Publishing');
define('_JNEWS_AUTONEWS_NO_ARTICLE', 'There is no Article to add to the Smart Newsletter at this moment.');
define('_JNEWS_CAPTCHA_TIPS', 'Enter Security Code Here');
define('_JNEWS_EXPORT_TEXT_ALL','All subscribers will be exported!');


