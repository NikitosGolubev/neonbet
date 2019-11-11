<template>
    <el-table border :data="overviewData">
        <el-table-column prop="header" label="Показатель">
            <template slot-scope="scope">
                <span class="text_medium-sz text_bold">
                    {{ scope.row.header }}
                </span>
            </template>
        </el-table-column>
        <el-table-column prop="content" width="200" align="center" label="Данные">
            <template slot-scope="scope">
                <el-tag effect="dark" type="primary">
                    <span class="alternative">{{ scope.row.content }}</span>
                </el-tag>
            </template>
        </el-table-column>
    </el-table>
</template>

<script>
    export default {
        name: "HomeOverviewTable",
        computed: {
            overviewData() {
                return [
                    {
                        header: "Пользователей забанено",
                        content: 5
                    },
                    {
                        header: "Подтверждённых регистраций",
                        content: 23
                    },
                    {
                        header: "Новостей опубликовано",
                        content: 233
                    },
                    {
                        header: "Тикетов поступило",
                        content: 12
                    },
                    {
                        header: "Совершено депозитов на сумму",
                        content: 3
                    },
                    {
                        header: "Совершено выводов на сумму",
                        content: 3
                    },
                    {
                        header: "Заработанно денег на сумму",
                        content: 3
                    }
                ];
            }
        }
    }
</script>

<style scoped>

</style>
