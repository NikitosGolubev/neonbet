<template>
    <td data-primary-content class="default-table__cell">
        <div class="default-table__content">
            <inline-event-presentation>
                <inline-event-presentation-team-name :is-dull-select="isTeamLost(1)" class="betting-history__team-name">
                    {{ getEventTeam1Name }}
                </inline-event-presentation-team-name>

                <inline-event-presentation-team-logo
                        :logo="getEventTeam1Logo"
                        :is-bright-select="isTeamWon(1)"
                        :is-dull-select="isTeamLost(1)"
                />

                <inline-event-presentation-separator class="alternative">:</inline-event-presentation-separator>

                <inline-event-presentation-team-logo
                        :logo="getEventTeam2Logo"
                        :is-bright-select="isTeamWon(2)"
                        :is-dull-select="isTeamLost(2)"
                />

                <inline-event-presentation-team-name :is-dull-select="isTeamLost(2)" class="betting-history__team-name">
                    {{ getEventTeam2Name }}
                </inline-event-presentation-team-name>
            </inline-event-presentation>
        </div>
    </td>
</template>

<script>
    import EventMixin from '../../../../shared/mixins/event/index';

    import InlineEventPresentation from "../../../InlineEventPresentation/InlineEventPresentation";
    import InlineEventPresentationTeamName from "../../../InlineEventPresentation/InlineEventPresentationTeamName";
    import InlineEventPresentationTeamLogo from "../../../InlineEventPresentation/InlineEventPresentationTeamLogo";
    import InlineEventPresentationSeparator from "../../../InlineEventPresentation/InlineEventPresentationSeparator";

    export default {
        name: "UserBetLayoutEventPresentation",
        mixins: [EventMixin],
        components: {
            InlineEventPresentationSeparator,
            InlineEventPresentationTeamLogo,
            InlineEventPresentationTeamName,
            InlineEventPresentation
        }
    }
</script>

<style scoped>

</style>
