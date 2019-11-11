<template>
    <el-table border :data="importantData">
        <el-table-column prop="header" label="Сводка">
            <template slot-scope="scope">
                <span class="text_medium-sz text_bold">
                    {{ scope.row.header }}
                </span>
            </template>
        </el-table-column>
        <el-table-column prop="content" width="200" align="center" label="Содержание">
            <template slot-scope="scope">
                <el-tag effect="dark" type="danger">
                    <span class="alternative">{{ scope.row.content }}</span>
                </el-tag>
            </template>
        </el-table-column>
    </el-table>
</template>

<script>
    export default {
        name: "HomeImportantDataTable",
        computed: {
            importantData() {
                return [
                    {
                        header: "Нерассчитанные начатые события",
                        content: 5
                    },
                    {
                        header: "Нерассчитанные дополнительные события",
                        content: 23
                    },
                    {
                        header: "Событий в линии",
                        content: 233
                    },
                    {
                        header: "Нерассмотренных тикетов",
                        content: 12
                    },
                    {
                        header: "Нерассмотренных запросов на вывод",
                        content: 3
                    }
                ];
            }
        }
    }
</script>

<style scoped>

</style>
