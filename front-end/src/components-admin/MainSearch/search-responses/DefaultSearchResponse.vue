<template>
    <el-table border :data="data">
        <el-table-column align="center" v-for="column in columns" :prop="column" :label="columnName(column)" />
    </el-table>
</template>

<script>
    import DataReceiverInterface from '../../../shared/mixins-props-interfaces/data-receiver-interface';

    export default {
        name: "DefaultSearchResponse",
        mixins: [DataReceiverInterface],
        computed: {
            columns() {
                return Object.keys(this.data[0]);
            }
        },
        methods: {
            columnName(column) {
                return column.charAt(0).toUpperCase() + column.slice(1);
            }
        }
    }
</script>

<style scoped>

</style>
