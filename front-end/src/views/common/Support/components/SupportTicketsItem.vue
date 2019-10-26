<template>
    <div class="tickets-history__data-row row">
        <div class="tickets-history__ticket-header tickets-history__item col-xs-12 col-md-2">
            <div>{{ ticketAppliedAt }}</div>

            <div class="tickets-history__ticket-status_responsive">
                <support-tickets-item-status :ticket="ticket" />
            </div>
        </div>
        <div class="tickets-history__item col-xs-12 col-md-8">
            <div class="tickets-history__preview">
                <div class="tickets-history__preview-text">
                    <span class="alternative">{{ ticketPreview }}</span>
                </div>
                <div class="tickets-history__preview-dropdown">
                    <siblings-dropdown-gradient-trigger :key-id="dropdownKey" />
                </div>
            </div>
        </div>
        <div class="tickets-history__item tickets-history__ticket-status col-xs-12 col-md-2">
            <support-tickets-item-status :ticket="ticket" />
        </div>
        <siblings-dropdown class="tickets-history__content" :key-id="dropdownKey">
            <div class="tickets-history__content-block">
                <span class="h4 alternative">Содержание тикета</span>
                <p>{{ ticketContent }}</p>
            </div>

            <div v-if="isTicketReplyDerived" class="tickets-history__content-block">
                <span class="h4 alternative">Ответ:</span>
                <p>{{ ticketReply }}</p>
            </div>
        </siblings-dropdown>
    </div>
</template>

<script>
    import SiblingsDropdownGradientTrigger from "../../../../components/SiblingsDropdown/trigger-variations/SiblingsDropdownGradientTrigger";
    import SiblingsDropdown from "../../../../components/SiblingsDropdown/SiblingsDropdown";
    import TicketMixin from './mixins/ticket-item';
    import RandomKeyMixin from '../../../../shared/mixins/random-key-generator';
    import SupportTicketsItemStatus from "./SupportTicketsItemStatus";

    export default {
        name: "SupportTicketsItem",
        components: {SupportTicketsItemStatus, SiblingsDropdown, SiblingsDropdownGradientTrigger},
        mixins: [TicketMixin, RandomKeyMixin],
        data() {
            return {
                dropdownKey: this.uniqueKey()
            }
        }
    }
</script>
