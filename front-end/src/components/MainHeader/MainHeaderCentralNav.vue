<template>
    <nav>
        <ul class="header__list">
            <li class="header__list-item">
                <router-link :to="{name: 'support'}">
                    <span  class="link_alternative">Тех. поддержка</span>
                </router-link>
            </li>
            <li class="header__list-item">
                <router-link to="#">
                    <span  class="link_alternative">Общие вопросы</span>
                </router-link>
            </li>
            <li class="header__list-item">
                <router-link :to="{name: 'article'}">
                    <span  class="link_alternative">Новости</span>
                </router-link>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: "HeaderCentralNavigation"
    }
</script>

<style scoped>

</style>
