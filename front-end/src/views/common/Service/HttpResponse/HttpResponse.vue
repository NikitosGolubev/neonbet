<template>
    <service-layout>
        <div class="http-response">
            <div class="http-response__code_wrap">
                <span class="http-response__code">404</span>
            </div>
            <div class="http-response__desk_wrap">
                <span class="http-response__desk">То что вы ищите, не найдено :(</span>
            </div>
            <div class="http-response__return-btn">
                <v-button-outline-gradient-fillable>
                    На главную
                </v-button-outline-gradient-fillable>
            </div>
        </div>
    </service-layout>
</template>

<script>
    import ServiceLayout from "../../../../layouts/ServiceLayout/ServiceLayout";
    import VButtonOutlineGradientFillable from "../../../../components/ui/buttons/VButtonOutlineGradientFillable";

    export default {
        name: "HttpResponse",
        components: {VButtonOutlineGradientFillable, ServiceLayout}
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
