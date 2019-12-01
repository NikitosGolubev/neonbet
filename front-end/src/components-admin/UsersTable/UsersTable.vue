<template>
    <el-table :data="data" max-height="600px">
        <el-table-column prop="email" label="E-mail" />
        <el-table-column prop="nickname" label="Ник" />
        <el-table-column prop="role" label="Статус" />
        <el-table-column prop="regdate" label="Дата регистрации" />
        <el-table-column align="center" width="100" label="Досье">
            <template slot-scope="scope">
                <el-button class="link_default" type="info" icon="el-icon-view" circle></el-button>
            </template>
        </el-table-column>
        <el-table-column align="center" label="Операции">
            <template slot-scope="scope">
                <el-row>
                    <el-button size="mini" type="warning">Изменить роль</el-button>
                    <el-button class="mt-6" size="mini" type="danger">Забанить</el-button>
                </el-row>
            </template>
        </el-table-column>
    </el-table>
</template>

<script>
    import DataReceiverInterface from '../../shared/mixins-props-interfaces/data-receiver-interface';

    export default {
        name: "UsersListTable",
        mixins: [DataReceiverInterface]
    }
</script>

<style scoped>

</style>
