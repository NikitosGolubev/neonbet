<template>
    <admin-layout>
        <h2>Поиск: </h2>

        <div class="mt-6">
            <main-search />
        </div>

        <h2 class="mt-3">Статистическая сводка</h2>

        <div class="mt-3">
            <h4 class="danger text_uppercase">Важно:</h4>
            <home-important-data-table />
        </div>

        <div class="mt-2">
            <h4 class="text_uppercase">Общий обзор:</h4>

            <home-overview class="mt-3" />
        </div>
    </admin-layout>
</template>

<script>
    import AdminLayout from "../../../layouts/AdminLayout/AdminLayout";
    import HomeImportantDataTable from "./components/HomeImportantDataTable";
    import HomeOverview from "./components/HomeOverview";
    import MainSearch from "../../../components-admin/MainSearch/MainSearch";

    export default {
        name: "Home",
        components: {MainSearch, HomeOverview, HomeImportantDataTable, AdminLayout}
    }
</script>
