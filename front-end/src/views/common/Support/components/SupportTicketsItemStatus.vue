<template>
    <span>
        <v-operation-status v-if="isTicketInProcess">В процессе</v-operation-status>
        <v-operation-status mode="warning" v-else-if="isTicketPending">Ожидает ответа</v-operation-status>
        <v-operation-status mode="success" v-else-if="isTicketResolved">Ответ дан</v-operation-status>
        <v-operation-status mode="danger" v-else-if="isTicketClosed">Тикет закрыт</v-operation-status>
    </span>
</template>

<script>
    import TicketMixin from './mixins/ticket-item';
    import VOperationStatus from "../../../../components/ui/operation-statuses/VOperationStatus";

    export default {
        name: "SupportTicketsItemStatus",
        components: {VOperationStatus},
        mixins: [TicketMixin]
    }
</script>
