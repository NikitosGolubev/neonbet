<template>
    <service-layout>
        <div class="operation-status">
            <div class="operation-status__type_wrap" :class="themeClass">
                <span class="operation-status__type">
                    <slot></slot>
                </span>
            </div>
            <div class="operation-status__desk_wrap">
                <span class="operation-status__desk">
                    <slot name="message"></slot>
                </span>
            </div>
            <div class="operation-status__return-btn">
                <v-button-outline-gradient-fillable>
                    На главную
                </v-button-outline-gradient-fillable>
            </div>
        </div>
    </service-layout>
</template>

<script>

    import VButtonOutlineGradientFillable from "../../../components/ui/buttons/VButtonOutlineGradientFillable";
    import ServiceLayout from "../ServiceLayout";

    export default {
        name: "OperationStatusLayout",
        components: {ServiceLayout, VButtonOutlineGradientFillable},
        props: {
            theme: {
                type: String,
                default: 'default'
            }
        },
        computed: {
            themeClass() {
                return this.theme+"_bg";
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
