<template>
    <el-select class="admin-locale-picker" v-model="currentLocale">
        <el-option :key="val" v-for="val in supportedLocales" :label="locale(val)" :value="locale(val)" />
    </el-select>
</template>

<script>
    import MockLocales from '../../../mock-data/locales';

    export default {
        name: "MainHeaderLocalePicker",
        data() {
            return {
                currentLocale: this.locale(MockLocales.currentLocale),
                supportedLocales: MockLocales.supportedLocales
            }
        },
        methods: {
            locale(val) {
                return val.toUpperCase();
            }
        }
    }
</script>

<style lang="sass" scoped>
    .admin-locale-picker
        width: 80px
</style>
