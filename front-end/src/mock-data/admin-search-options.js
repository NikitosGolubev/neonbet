export default [
    {
        value: 'users',
        label: 'Пользователи',
        children: [
            {
                value: 'nickname',
                label: 'По никнейму'
            },
            {
                value: 'email',
                label: 'По email'
            },
            {
                value: 'fullname',
                label: 'По ФИО'
            }
        ]
    },
    {
        value: 'e-sports',
        label: 'Киберспорт',
        children: [
            {
                value: 'tournaments',
                label: 'Турниры',
                children: [
                    {
                        value: "cs:go",
                        label: "CS:GO"
                    },
                    {
                        value: "dota2",
                        label: "Dota 2"
                    }
                ]
            },
            {
                value: 'teams',
                label: 'Команды',
                children: [
                    {
                        value: "cs:go",
                        label: "CS:GO"
                    },
                    {
                        value: "dota2",
                        label: "Dota 2"
                    }
                ]
            },
            {
                value: 'matches',
                label: 'Матчи',
                children: [
                    {
                        value: "cs:go",
                        label: "CS:GO"
                    },
                    {
                        value: "dota2",
                        label: "Dota 2"
                    }
                ]
            }
        ]
    },
    {
        value: 'betting-line',
        label: 'Линия событий',
        children: [
            {
                value: "cs:go",
                label: "CS:GO"
            },
            {
                value: "dota2",
                label: "Dota 2"
            }
        ]
    },
    {
        value: 'additional-betting-line',
        label: 'Линия доп. событий',
        children: [
            {
                value: "cs:go",
                label: "CS:GO",
                children: [
                    {
                        value: "team",
                        label: "По команде"
                    },
                    {
                        value: "type",
                        label: "По типу"
                    }
                ]
            },
            {
                value: "dota2",
                label: "Dota 2",
                children: [
                    {
                        value: "team",
                        label: "По команде"
                    },
                    {
                        value: "type",
                        label: "По типу"
                    }
                ]
            }
        ]
    },
    {
        value: "articles",
        label: "Статьи",
        children: [
            {
                value: "all",
                label: "Все"
            },
            {
                value: "published",
                label: "Опубликованные"
            },
            {
                value: "draft",
                label: "Черновики"
            }
        ]
    },
    {
        value: "service-pages",
        label: "Сервисные страницы",
        children: [
            {
                value: "all",
                label: "Все"
            },
            {
                value: "published",
                label: "Опубликованные"
            },
            {
                value: "draft",
                label: "Черновики"
            }
        ]
    },
    {
        value: "tickets",
        label: "Тикеты",
        children: [
            {
                value: "all",
                label: "Все"
            },
            {
                value: "responded",
                label: "Отвеченные"
            },
            {
                value: "unresponded",
                label: "Неотвеченные"
            }
        ]
    }
];
