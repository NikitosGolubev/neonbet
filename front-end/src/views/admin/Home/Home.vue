<template>
    <admin-layout>
        <h2>Статистическая сводка</h2>

        <div class="mt-2">
            <h4 class="danger text_uppercase">Важно:</h4>
            <home-important-data-table />
        </div>

        <div class="mt-1">
            <h4 class="text_uppercase">Общий обзор:</h4>

            <home-overview class="mt-4" />
        </div>
    </admin-layout>
</template>

<script>
    import AdminLayout from "../../../layouts/AdminLayout/AdminLayout";
    import HomeImportantDataTable from "./components/HomeImportantDataTable";
    import HomeOverview from "./components/HomeOverview";

    export default {
        name: "Home",
        components: {HomeOverview, HomeImportantDataTable, AdminLayout}
    }
</script>
