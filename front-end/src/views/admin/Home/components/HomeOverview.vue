<template>
    <div>
        <home-overview-datepicker />
        <home-overview-table class="mt-3" />
    </div>
</template>

<script>
    import HomeOverviewDatepicker from "./HomeOverviewDatepicker";
    import HomeOverviewTable from "./HomeOverviewTable";
    export default {
        name: "HomeOverview",
        components: {HomeOverviewTable, HomeOverviewDatepicker}
    }
</script>
