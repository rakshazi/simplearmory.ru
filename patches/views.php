<?php

declare(strict_types=1);

return [
    'app/styles/main.css' => [
        'width: 175px;' => 'width: 300px;', //Faction's label on reputation page. 175px is too small for russian names of factions, 300px - ok.
    ],
    'app/index.html' => [
        'Simple Armory' => 'Простая Оружейная',
        'Simplified armory site for World of Warcraft' => 'Упрощенный сайт Оружейной для World of Warcraft',
    ],
    'app/views/achievements.html' => [
        'Achievements ' => 'Достижения ',
        'Feats of Strength' => 'Великие подвиги',
        'Legacy' => 'Наследие',
    ],
    'app/views/battlePets.html' => [
        'Battle Pets ' => 'Боевые питомцы ',
        'Show levels and breeds' => 'Показать типы и уровни',
    ],
    'app/views/calendar.html' => [
        'Calendar ' => 'Календарь ',
    ],
    'app/views/companions.html' => [
        'Companions' => 'Спутники',
    ],
    'app/views/error.html' => [
        'Error' => 'Ошибка',
        "Could not fetch '{{ character }}' from server '{{ realm }}'. Click <a href=\"#/\">here</a> to try again." => "Не получается найти '{{ character }}' с сервера '{{ realm }}'. Кликни <a href=\"#/\">сюда</a> чтобы попробовать еще раз.",
    ],
    'app/views/header.html' => [
        'Overview' => 'Обзор',
        'Achievements ' => 'Достижения ',
        'Character' => 'Персонаж',
        'Quests' => 'Задания',
        'Exploration' => 'Исследования',
        'Dungeons & Raids' => 'Подземелья и Рейды',
        'Professions' => 'Профессии',
        'Reputation' => 'Репутация',
        'World Events' => 'Игровые события',
        'Pet Battles' => 'Битвы питомцев',
        'Collections' => 'Коллекции',
        'Expansion Features' => 'Особый контент',
        'Legacy' => 'Наследие',
        'Feats of Strength' => 'Великие подвиги',
        'Collectable ' => 'Коллекции ',
        'Mounts' => 'Средства передвижения',
        'Companions' => 'Спутники',
        'Battle Pets' => 'Боевые питомцы',
        'Toys' => 'Игрушки',
        'Calendar' => 'Календарь',
        'Reputation' => 'Репутация',
        'Signed in as' => 'Прогресс',
        'Armory profile' => 'Профиль в Оружейной',
        'Contact' => 'Обратная связь',
        'Donate' => 'Пожертвование',
    ],
    'app/views/login.html' => [
        'Enter realm and character' => 'Выбери сервер и персонажа',
        '>Realm<' => '>Сервер<',
        'Choose an realm' => 'Выбери сервер',
        'Character' => 'Персонаж',
        'Go' => 'Поехали',
    ],
    'app/views/mounts.html' => [
        'Mounts ' => 'Маунты ',
        'Show Planner' => 'Показать Планировщик',
        '>Step<' => '>Шаг<',
        '>Boss<' => '>Босс<',
        '>Mount<' => '>Маунт<',
        '>Notes<' => '>Заметки<',
    ],
    'app/views/overview.html' => [
        'Progress Overview' => 'Общий прогресс',
        'Total Complete' => 'Всего завершено',
        'Character' => 'Персонаж',
        'Quests' => 'Задания',
        'Exploration' => 'Исследования',
        'Dungeons & Raids' => 'Подземелья и Рейды',
        'Professions' => 'Профессии',
        'Reputation' => 'Репутация',
        'World Events' => 'Игровые события',
        'Pet Battles' => 'Битвы питомцев',
        'Collections' => 'Коллекции',
        'Expansion Features' => 'Особый контент',
        'Legacy' => 'Наследие',
        'Feats of Strength' => 'Великие подвиги',
    ],
    'app/views/reputation.html' => [
        'Reputation' => 'Репутация',
        '>Hated<' => '>Ненависть<',
        '>Hos<' => '>Вра<',
        '>Unf<' => '>Неп<',
        '>Neu<' => '>Нейт<',
        '>Friend<' => '>Друж<',
        '>Honored<' => '>Уважение<',
        '>Revered<' => '>Почтение<',
        '>Ex<' => '>Прев<',
    ],
];
