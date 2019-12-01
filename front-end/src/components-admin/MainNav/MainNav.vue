<template>
        <el-menu :unique-opened="true" default-active="3" class="side-menu" :collapse="isCollapse">
            <el-menu-item @click="adjustMenu" index="1">
                <i v-if="isCollapse" class="el-icon-right"></i>
                <i v-else class="el-icon-back"></i>

                <span>Закрыть</span>
            </el-menu-item>

            <el-menu-item index="2">
                <i class="el-icon-s-home"></i>
                <span>Главная</span>
            </el-menu-item>

            <el-submenu index="3">
                <template slot="title">
                    <i class="el-icon-s-custom"></i>
                    <span slot="title">Пользователи</span>
                </template>
                <el-menu-item index="3-1">Все пользователи</el-menu-item>
                <el-menu-item index="3-2">Уполномоченные</el-menu-item>
            </el-submenu>

            <el-submenu index="4">
                <template slot="title">
                    <i class="el-icon-soccer"></i>
                    <span slot="title">Киберспорт</span>
                </template>
                <el-menu-item index="4-1">Дисциплины</el-menu-item>
                <el-menu-item index="4-2">Турниры</el-menu-item>
                <el-menu-item index="4-3">Команды</el-menu-item>
                <el-menu-item index="4-4">Матчи</el-menu-item>
                <el-menu-item index="4-5">Типы матчей</el-menu-item>
            </el-submenu>


            <el-submenu index="5">
                <template slot="title">
                    <i class="el-icon-paperclip"></i>
                    <span slot="title">Ставки</span>
                </template>
                <el-menu-item index="5-1">Опции</el-menu-item>
                <el-menu-item index="5-2">Доп. опции</el-menu-item>
                <el-menu-item index="5-3">Линия событий</el-menu-item>
                <el-menu-item index="5-4">Линия доп. событий</el-menu-item>
            </el-submenu>

            <el-submenu index="6">
                <template slot="title">
                    <i class="el-icon-tickets"></i>
                    <span slot="title">Новости</span>
                </template>
                <el-menu-item index="6-1">Создать</el-menu-item>
                <el-menu-item index="6-2">Опубликованные</el-menu-item>
                <el-menu-item index="6-3">Черновики</el-menu-item>
            </el-submenu>

            <el-submenu index="7">
                <template slot="title">
                    <i class="el-icon-sugar"></i>
                    <span slot="title">Сервисные страницы</span>
                </template>
                <el-menu-item index="7-1">Создать</el-menu-item>
                <el-menu-item index="7-2">Опубликованные</el-menu-item>
                <el-menu-item index="7-3">Черновики</el-menu-item>
            </el-submenu>

            <el-submenu index="8">
                <template slot="title">
                    <i class="el-icon-chat-dot-square"></i>
                    <span slot="title">Тех. поддержка</span>
                </template>
                <el-menu-item index="8-1">Темы</el-menu-item>
                <el-menu-item index="8-2">Статусы ответа</el-menu-item>
                <el-menu-item index="8-3">Тикеты</el-menu-item>
            </el-submenu>

            <el-submenu index="9">
                <template slot="title">
                    <i class="el-icon-s-finance"></i>
                    <span slot="title">Финансы</span>
                </template>
                <el-menu-item index="9-1">Запросы на вывод</el-menu-item>
                <el-menu-item index="9-2">История выводов</el-menu-item>
                <el-menu-item index="9-3">История депозитов</el-menu-item>
            </el-submenu>
        </el-menu>
</template>

<script>
    export default {
        name: "MainNav",
        props: {
            isCollapse: {
                type: Boolean,
                default: true
            }
        },
        methods: {
            adjustMenu() {
                this.$emit('change');
            }
        }
    }
</script>

<style lang="sass">
    .side-menu
        min-height: 100vh
        border-right: none !important

        &:not(.el-menu--collapse)
            width: 250px
</style>
