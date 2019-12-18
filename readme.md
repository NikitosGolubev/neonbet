Задумывался сайт полноценной киберспортивной букмекерской конторы.
Есть даже некоторое написаное на PHP API - заложенность мультиязычности, смены пояса и полная система авторизации/аутентификации, так же смена пароля, рассылка e-mail подчистка БД с помощью CRON задач, естественно разбиение на роли, выдача банов, коллекция IP адресов.

# В папочке front-end
На front-end сделано куда больше. Front-end на Vue.js. Свёрстана большая часть сайта и посажена, разбита на компоненты на фреймворк Vue. Всё это дело готово с Vue Router, т.к задумывалось SPA (single page application).

**Роутинг работает, можно его использовать, однако я специально прекрепляю конкретные ссылки для демонстрации**

Вот страницы, которые можно посмотреть, всё кроссбраузерно и адаптивно:
1. https://nikitosgolubev.github.io/neonbet/#/ - Главная
2. https://nikitosgolubev.github.io/neonbet/#/support - Поддержка
3. https://nikitosgolubev.github.io/neonbet/#/cabinet - Кабинет пользователя
4. https://nikitosgolubev.github.io/neonbet/#/cabinet/deposit - Депозит
5. https://nikitosgolubev.github.io/neonbet/#/cabinet/withdrawal - Вывод
6. https://nikitosgolubev.github.io/neonbet/#/cabinet/betting-history - История ставок
7. https://nikitosgolubev.github.io/neonbet/#/article - Статья
8. https://nikitosgolubev.github.io/neonbet/#/register - Регистрация
9. https://nikitosgolubev.github.io/neonbet/#/login - Вход
10. https://nikitosgolubev.github.io/neonbet/#/anything - 404 страница
11. https://nikitosgolubev.github.io/neonbet/#/success - Страница успеха
12. https://nikitosgolubev.github.io/neonbet/#/failure - Страница Провала
13. https://nikitosgolubev.github.io/neonbet/#/forget-password - Забыли пароль?
14. https://nikitosgolubev.github.io/neonbet/#/password-recovery - Восстановление пароля

Стек технологий: HTML5, SASS, JS, VUE, VUEX, VUE-ROUTER. Использовал vue-cli для сборки, до этого была самоделка на GULP4 + laravel mix (сборщик фронта от laravel-я). Из известных либ: momentJS, lodash, так же собирался применить Vuelidate и для мультиязычности интерфейса Vue I18n.

### Очевидные недостатки в этой работе, от которых необходимо избавиться в будущем.
- Стоит встроить в систему Linter кода, ибо это популярно и часто так делают.
- **Обязательно необходимо обучиться тестированию, уже на заметке Mocha, Jest**
- MirageJS - грамотный mock API, чтобы делать production-ready со старта, а неждать back-а.
- **Научиться сокращать размер бандлов (хоть я и пользовался BundleAnalyzer, я уверен, я чего-то ещё не знаю)**
