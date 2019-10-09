<template>
    <nav class="responsive-sidebar__nav">
        <ul>
            <li class="responsive-sidebar__nav-item">
                <a class="link_alternative" href="#">Тех. поддержка</a>
            </li>
            <li class="responsive-sidebar__nav-item">
                <a class="link_alternative" href="#">Общие вопросы</a>
            </li>
            <li class="responsive-sidebar__nav-item">
                <a class="link_alternative" href="#">Новости</a>
            </li>
            <li class="responsive-sidebar__nav-item">
                <a class="responsive-sidebar__auth-btn" href="#">
                    <div class="btn__outline-gradient-fillable_wrap">
                        <div class="btn btn__outline-gradient-fillable">
                            <span class="btn__outline-gradient-fillable_text">Вход</span>
                        </div>
                        <div class="btn__outline-gradient-fillable_border"></div>
                    </div>
                </a>

                <a class="responsive-sidebar__auth-btn" href="#">
                    <div class="btn__outline-gradient-fillable_wrap">
                        <div class="btn btn__outline-gradient-fillable">
                            <span class="btn__outline-gradient-fillable_text">Регистрация</span>
                        </div>
                        <div class="btn__outline-gradient-fillable_border"></div>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: "UserSidebarNav"
    }
</script>

<style scoped>

</style>
