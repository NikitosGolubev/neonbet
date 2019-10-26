import moment from 'moment';

const MAX_PREVIEW_LENGTH = 150;
const PREVIEW_SHORTING_PERCENT = 0.75;

export default {
    props: {
        ticket: {
            type: Object,
            required: true
        }
    },
    computed: {
        ticketAppliedAt() {
            return moment(this.ticket.applyDate).format("DD.MM.YYYY | HH:mm");
        },

        ticketContent() {
            return this.ticket.content;
        },

        ticketReply() {
            return this.ticket.reply;
        },

        ticketPreview() {
            if (this.ticketContent.length > MAX_PREVIEW_LENGTH) {
                const numSymbolsPreview = Math.floor(MAX_PREVIEW_LENGTH * PREVIEW_SHORTING_PERCENT);
                return this.ticketContent.substr(0, numSymbolsPreview)+'...';
            }

            return this.ticketContent;
        },

        ticketStatus() {
            return this.ticket.status;
        },

        isTicketReplyDerived() {
            return !!this.ticketReply;
        },

        isTicketInProcess() {
            return this.ticketStatus === "process";
        },

        isTicketPending() {
            return this.ticketStatus === "pending";
        },

        isTicketResolved() {
            return this.ticketStatus === "replied";
        },

        isTicketClosed() {
            return this.ticketStatus === "closed";
        }
    }
};
