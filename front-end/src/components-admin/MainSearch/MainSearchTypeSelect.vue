<template>
        <el-cascader
                class="main-search-select"
                :value="value"
                @change="valueChanged"
                clearable
                placeholder="Тип поиска"
                :options="options"
        />
</template>

<script>
    import MockSearchOptions from '../../mock-data/admin-search-options';
    import CustomVModelMixin from '../../shared/mixins/custom-v-model';

    export default {
        name: "MainSearchTypeSelect",
        mixins: [CustomVModelMixin],
        data() {
            return {
                options: MockSearchOptions,
            }
        }
    }
</script>

<style lang="sass">
        .main-search-select
                width: 100%
</style>
