<?php

// override core en language system validation or define your own en language validation message
return [
    'kb' => [
        'title' => 'База Знаний',
        'menu' => 'База знаний',
        'howCanWeHelpYou' => 'Как мы можем вам помочь?',
        'search' => 'Искать в базе знаний',
        'moreTopics' => 'Больше материалов',
        'mostPopular' => 'Самые популярные статьи',
        'newest' => 'Новые статьи',
        'postedOn' => 'Опубликовано %date%',
        'searchResults' => 'Результаты поиска',
        'searchResultsFor' => 'Результаты поиска для %keyword%',
    ],
    'login' => [
        'menu' => 'Войти',
        'title' => 'Войти на %site_name%',
        'button' => 'Войти',
        'forgotPassword' => 'Забыли пароль?',
        'forgotDescription' => 'Введите email адрес указанный при регистрации и нажмите Отправить. Вы получите на email ссылку на смену пароля.',
        'passwordSent' => 'Мы отправили новый пароль на указанный email',
    ],
    'submitTicket' => [
        'title' => 'Отправить запрос в поддержку',
        'menu' => 'Создать обращение',
        'selectDepartment' => 'Если вы не можете найти решение вашей проблемы, то вы можете отправить запрос в службу поддержки. Выберите нужный отдел ниже.',
        'generalInformation' => 'Общая информация',
        'requestReceived' => 'Ваш запрос был получен',
        'requestReceivedDescription' => 'Мы получили ваш запрос и наша команда ответит вам в ближайшее время. Вы можете войти в личный кабинет, чтобы отслеживать статус запроса. Или проверить почту, там будут письма с обновлением статуса запроса.',
    ],
    'viewTickets' => [
        'title' => 'Мои обращения',
        'menu' => 'Список обращений',
        'description' => 'Ниже показаны запросы, который вы отправляли ранее. Нажмите на тему запроса, чтобы посмотреть запрос и его историю.',
        'search' => 'Найти ID запроса',
        'notFound' => 'Запрос не найден.',
        'ticketID' => 'Просмотреть запрос #%id%',
        'ticketClosed' => 'Запрос закрыт.',
        'replySent' => 'Ваш ответ на этот запрос был успешно отправлен',
    ],
    'account' => [
        'menu' => 'Аккаунт',
        'editProfile' => 'Редактировать профиль',
        'logout' => 'Выход',
        'general' => 'Общие',
        'changePassword' => 'Изменить пароль',
        'profileUpdated' => 'Ваш профиль успешно обновлен.',
        'passwordUpdated' => 'Пароль успешно обновлен.'
    ],
    'form' => [
        'email' => 'E-mail адрес',
        'password' => 'Пароль',
        'submit' => 'Отправить',
        'captchaVerification' => 'Подтвердить CAPTCHA',
        'search' => 'Поиск',
        'ticketID' => 'ID запроса',
        'fullName' => 'Полное имя',
        'department' => 'Департамент',
        'priority' => 'Приоритет',
        'subject' => 'Тема',
        'yourMessage' => 'Ваше сообщение',
        'attachments' => 'Прикрепленные файлы',
        'allowedFiles' => 'Разрешены файлы',
        'browse' => 'Открыть',
        'chooseFile' => 'Выбрать файл',
        'lastUpdate' => 'Последнее обновление',
        'status' => 'Статус',
        'addReply' => 'Добавить ответ',
        'goBack' => 'Назад',
        'staff' => 'Менеджер',
        'timezone' => 'Часовой пояс',
        'defaultTimezone' => 'Часовой пояс по умолчанию',
        'newPassword' => 'Новый пароль',
        'existingPassword' => 'Текущий пароль',
        'confirm' => 'Подтвердить',
        'save' => 'Сохранить',
        'open' => 'Открыть',
        'answered' => 'Рассмотрен',
        'awaiting_reply' => 'Ожидает ответа',
        'in_progress' => 'В процессе',
        'closed' => 'Закрыт',
        'user' => 'Пользователь',
        'departments' => 'Департаменты',
        'next' => 'Следующие'
    ],
    'error' => [
        'uploadFile' => 'Ошибка при загрузке файла',
        'fileNotAllowed' => 'Недопустимый формат файла.',
        'fileBig' => 'Слишком большой файл. Максимальный размер - %size%',
        'search' => 'Мы не нашли ничего подходящего по вашему запросу.',
        'fileNotFound' => 'Файл не найден.',
        'fileNotFoundMsg' => 'Файл, который вы пытаетесь загрузить, больше недоступен.',
        'enterFullName' => 'Введите ваше полное имя',
        'enterValidEmail' => 'Введите действующий e-mail адрес.',
        'emailUsed' => 'Этот email адрес уже используется в другом аккаунте.',
        'enterSubject' => 'Введите тему.',
        'enterYourMessage' => 'Введите сообщение',
        'selectValidDepartment' => 'Выберите действующий департамент.',
        'invalidCaptcha' => 'ОШИБКА: Не пройдена верификация captcha.',
        'emailNotFound' => 'Email не найден.',
        'invalidEmailPassword' => 'Неверный email адрес или пароль.',
        'recordsNotFound' => 'Записи не найдены.',
        'enterExistingPassword' => 'Введите ваш существующий пароль.',
        'enterNewPassword' => 'Введите новый пароль.',
        'passwordsNotMatches' => 'Новый пароль не совпадает.',
        'wrongExistingPassword' => 'Неверный текущий пароль.'
    ],
    '404' => [
        'title' => 'Страница не найдена- 404',
        'body' => 'Ой, страница удалена или временно недоступна.',
    ]
];