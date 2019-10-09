<template>
    <nav class="dashboard-navigation">
        <dropdown-element :apply-dropdown-at="993">
            <div class="dashboard-navigation__dropdown-presentation">
                <div class="h4-m0">Меню</div>
                <dropdown-gradient-trigger></dropdown-gradient-trigger>
            </div>
            <template #dropdown>
                <div class="row dashboard-navigation__dropdown">
                    <div class="dashboard-navigation__item col-xs-12 col-sm-6 col-md-3">
                        <a class="dashboard-navigation__link-btn btn btn_lg btn_default">
                            Профиль
                        </a>
                    </div>
                    <div class="dashboard-navigation__item col-xs-12 col-sm-6 col-md-3">
                        <a class="dashboard-navigation__link-btn btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_lg btn__outline-gradient-fillable btn__outline-gradient-fillable_muted">
                                <span class="btn__outline-gradient-fillable_text">Cделать депозит</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </a>
                    </div>
                    <div class="dashboard-navigation__item col-xs-12 col-sm-6 col-md-3">
                        <a class="dashboard-navigation__link-btn btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_lg btn__outline-gradient-fillable btn__outline-gradient-fillable_muted">
                                <span class="btn__outline-gradient-fillable_text">Вывод средств</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </a>
                    </div>
                    <div class="dashboard-navigation__item col-xs-12 col-sm-6 col-md-3">
                        <a class="dashboard-navigation__link-btn btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_lg btn__outline-gradient-fillable btn__outline-gradient-fillable_muted">
                                <span class="btn__outline-gradient-fillable_text">История ставок</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </a>
                    </div>
                </div>
            </template>
        </dropdown-element>
    </nav>
</template>

<script>
    import DropdownElement from "../Dropdown/DropdownElement";
    import DropdownGradientTrigger from "../Dropdown/trigger-variations/DropdownGradientTrigger";
    export default {
        name: "UserDashboardNav",
        components: {DropdownGradientTrigger, DropdownElement}
    }
</script>

<style scoped>

</style>