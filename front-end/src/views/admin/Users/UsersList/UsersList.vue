<template>
    <admin-layout>
        <h2>Пользователи</h2>

        <div class="mt-2">
            <users-table :data="users" />
        </div>
    </admin-layout>
</template>

<script>
    import AdminLayout from "../../../../layouts/AdminLayout/AdminLayout";
    import UsersTable from "../../../../components-admin/UsersTable/UsersTable";
    import MockUsers from '../../../../mock-data/users';

    export default {
        name: "UsersList",
        components: {UsersTable, AdminLayout},
        data() {
            return {
                users: MockUsers
            }
        }
    }
</script>

<style scoped>

</style>
