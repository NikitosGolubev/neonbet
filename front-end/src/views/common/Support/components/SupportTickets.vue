<template>
    <div class="tickets-history">
        <header class="tickets-history__header row">
            <div class="tickets-history__header-item tickets-history__item col-xs-2">
                <span>Дата</span>
            </div>
            <div class="tickets-history__header-item tickets-history__item col-xs-8">
                <span>Содержание</span>
            </div>
            <div class="tickets-history__header-item tickets-history__item col-xs-2">
                <span>Статус</span>
            </div>
        </header>
        <div class="tickets-history__header_responsive">
            <span class="h3 alternative">История запросов:</span>
        </div>

        <support-tickets-item :key="ticket.id" v-for="ticket in tickets" :ticket="ticket" />
    </div>
</template>

<script>
    import SiblingsDropdownGradientTrigger from "../../../../components/SiblingsDropdown/trigger-variations/SiblingsDropdownGradientTrigger";
    import SiblingsDropdown from "../../../../components/SiblingsDropdown/SiblingsDropdown";
    import SupportTicketsItem from "./SupportTicketsItem";
    export default {
        name: "SupportTickets",
        components: {SupportTicketsItem, SiblingsDropdown, SiblingsDropdownGradientTrigger},
        props: {
            tickets: {
                type: Array,
                required: true
            }
        }
    }
</script>

<style scoped>

</style>
