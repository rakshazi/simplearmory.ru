<?php
return [
    'Gruntfile.js' => [
        "'localhost'," => "'0.0.0.0',", //only for dev with docker purposes
    ],
    'app/scripts/services/settings.service.js' => [
        "'wowhead.com'," => "'ru.wowhead.com',",
    ],
    'app/scripts/controllers/achievements.controller.js' => [
        "'Character';" => "'Персонаж';",
        "'Quests';" => "'Задания';",
        "'Exploration';" => "'Исследования';",
        "'Dungeons & Raids';" => "'Подземелья и Рейды';",
        "'Professions';" => "'Профессии';",
        "'Reputation';" => "'Репутация';",
        "'World Events';" => "'Игровые события';",
        "'Pet Battles';" => "'Битвы питомцев';",
        "'Collections';" => "'Коллекции';",
        "'Expansion Features';" => "'Особый контент';",
        "'Legacy';" => "'Наследие';",
        "'Feats of Strength';" => "'Великие подвиги';",
    ],
    'app/scripts/services/achievements.service.js' => [
        'Feats of Strength' => 'Великие подвиги',
        'Legacy' => 'Наследие',
    ],
    'app/scripts/controllers/calendar.controller.js' => [
        'January' => 'Январь',
        'February' => 'Февраль',
        'March' => 'Март',
        'April' => 'Апрель',
        'May' => 'Май',
        'June' => 'Июнь',
        'July' => 'Июль',
        'August' => 'Август',
        'September' => 'Сентябрь',
        'October' => 'Октябрь',
        'November' => 'Ноябрь',
        'December' => 'Декабрь',
    ],
    'app/scripts/controllers/login.controller.js' => [
        'Loading realm list...' => 'Загружаю список серверов...',
        'Enter an realm...' => 'Выбери сервер...',
    ],
];
