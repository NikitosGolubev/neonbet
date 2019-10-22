<template>
    <tr>
        <td :colspan="totalNumTableCells">
            <dropdown-element ancestor-table-tag="tr" :key-id="dropdownKey">
                <div :data-row-key="rowKey" class="betting-history__bet-detail">
                    <div class="betting-history__bet-detail_item">
                        <span class="betting-history__bet-type">{{ getEventType }}</span>
                    </div>

                    <inline-event-presentation class="betting-history__bet-detail_item">
                        <inline-event-presentation-team-name :is-dull-select="!isUserChosenTeam(1)">
                            {{ getEventTeam1Name }}
                        </inline-event-presentation-team-name>

                        <inline-event-presentation-coef :is-bright-select="isUserChosenTeam(1)" :is-dull-select="!isUserChosenTeam(1)">
                            {{ getEventTeam1Coef }}
                        </inline-event-presentation-coef>

                        <inline-event-presentation-separator class="secondary">-</inline-event-presentation-separator>

                        <inline-event-presentation-coef :is-bright-select="isUserChosenTeam(2)" :is-dull-select="!isUserChosenTeam(2)">
                            {{ getEventTeam2Coef }}
                        </inline-event-presentation-coef>

                        <inline-event-presentation-team-name :is-dull-select="!isUserChosenTeam(2)">
                            {{ getEventTeam2Name }}
                        </inline-event-presentation-team-name>
                    </inline-event-presentation>

                    <div class="betting-history__detail-info info-pick"></div>
                </div>
            </dropdown-element>
        </td>
    </tr>
</template>

<script>
    import TableConfigMixin from '../../../shared/mixins/table-config';
    import DropdownConfigMixin from '../../../shared/mixins/dropdown-config';
    import EventMixin from '../../../shared/mixins/event/index';

    import DropdownElement from "../../SiblingsDropdown/SiblingsDropdown";
    import InlineEventPresentation from "../../InlineEventPresentation/InlineEventPresentation";
    import InlineEventPresentationTeamName from "../../InlineEventPresentation/InlineEventPresentationTeamName";
    import InlineEventPresentationSeparator from "../../InlineEventPresentation/InlineEventPresentationSeparator";
    import InlineEventPresentationCoef from "../../InlineEventPresentation/InlineEventPresentationCoef";

    export default {
        name: "UserBetDetails",
        mixins: [TableConfigMixin, DropdownConfigMixin, EventMixin],
        components: {
            InlineEventPresentationCoef,
            InlineEventPresentationSeparator,
            InlineEventPresentationTeamName,
            InlineEventPresentation,
            DropdownElement
        },
        props: {
            totalNumTableCells: {
                type: Number,
                default: 10
            }
        }
    }
</script>
