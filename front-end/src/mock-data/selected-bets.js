export default [
    {
        id: 1,
        status: "upcoming",
        startDate: '2019-10-16 23:00:00',
        type: "Best of 1",
        betting: {
            coef1: 21,
            coef2: 79,
            money1: 2042,
            money2: 7958,
            choiceName: ['Команда 1', 'Команда 2'],
            userChoice: 1
        },
        game: {
            id: 23,
            name: 'Dota 2',
            logo: require('@/assets/common/img/dota2.png')
        },
        team1: {
            id: 1,
            logo: require('@/assets/common/img/team3.png'),
            name: 'NaVi'
        },
        team2: {
            id: 2,
            logo: require('@/assets/common/img/team4.png'),
            name: 'Astralis'
        }
    },
    {
        id: 2,
        status: "upcoming",
        startDate: '2019-10-17 23:00:00',
        type: "Тотал раундов > 25",
        betting: {
            coef1: 60,
            coef2: 40,
            money1: 2042,
            money2: 7958,
            choiceName: ['Да', 'Нет'],
            userChoice: 2
        },
        game: {
            id: 23,
            name: 'Dota 2',
            logo: require('@/assets/common/img/callofduty.png')
        },
        team1: {
            id: 1,
            logo: require('@/assets/common/img/team3.png'),
            name: 'NaVi'
        },
        team2: {
            id: 2,
            logo: require('@/assets/common/img/team4.png'),
            name: 'Astralis'
        }
    },
    {
        id: 3,
        status: "upcoming",
        startDate: '2019-10-16 23:00:00',
        type: "Победитель пистолетного раунда",
        betting: {
            coef1: 90,
            coef2: 10,
            money1: 2042,
            money2: 7958,
            choiceName: ['Команда 1', 'Команда 2'],
            userChoice: 1
        },
        game: {
            id: 23,
            name: 'Dota 2',
            logo: require('@/assets/common/img/csgo.png')
        },
        team1: {
            id: 1,
            logo: require('@/assets/common/img/team3.png'),
            name: 'NaVi'
        },
        team2: {
            id: 2,
            logo: require('@/assets/common/img/team4.png'),
            name: 'Astralis'
        }
    }
]

