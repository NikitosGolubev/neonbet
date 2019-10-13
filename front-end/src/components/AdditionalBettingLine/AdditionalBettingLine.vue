<template>
    <div class="additional-betting-line card">
        <header class="additional-betting-line__header card__header">
            <span class="h3-m0">Дополнительные события</span>
        </header>

        <div class="additional-betting-line__nav row card__nav card__nav_disabled">
            <div class="col-xs-2 card__nav-item">Дата</div>
            <div class="col-xs-2 card__nav-item">Игра</div>
            <div class="col-xs-8 card__nav-item">Выбор</div>
        </div>

        <div class="additional-event">
            <dropdown-element>
                <!-- Dropdown preview & dropdown trigger -->
                <!-- Main event which provides additional events -->
                <div class="row additional-event__body">

                    <!-- Main event date -->
                    <div class="additional-event__match-option additional-betting-line__item col-xs-2">
                        <div class="event-time-data">
                            <div class="event-time-data__item">14:14</div>
                            <div class="event-time-data__item">14 мар</div>
                        </div>
                    </div>

                    <!-- Game logo and event name -->
                    <div class="additional-event__match-option additional-betting-line__item col-xs-2">
                        <div>
                            <div class="game-logo"
                                 style="background: url('assets/img/callofduty.png') center center no-repeat; background-size: 80%;"></div>
                            <div class="additional-event__option-name">Map 3 winner</div>
                        </div>
                    </div>

                    <!-- Game logo and event name -->
                    <div class="additional-event__match-option_responsive additional-betting-line__item col-xs-11">
                        <div>
                            <div class="game-logo"
                                 style="background: url('assets/img/callofduty.png') center center no-repeat; background-size: 80%;"></div>
                        </div>
                        <div class="event-time-data">
                            <div>14 мар - 14:14</div>
                        </div>
                    </div>

                    <!-- Particular event data -->
                    <div class="additional-betting-line__item col-xs-11 col-sm-7">
                        <div class="additional-event__data">
                            <!-- Team 1 name -->
                            <div class="additional-event__team-name additional-event__data-item">
                                Navi
                            </div>

                            <!-- Team 1 logo -->
                            <div class="additional-event__team-logo additional-event__data-item"
                                 style="background: url('assets/img/team3.png') center center no-repeat; background-size: auto 80%;">
                            </div>

                            <!-- Team 1 coefficient -->
                            <div class="coefficient additional-event__coefficient additional-event__data-item">
                                100%
                            </div>

                            <!-- Score -->
                            <div class="simple-score simple-score_muted additional-event__data-item">
                                <span>
                                    <span class="simple-score__separator">-</span>
                                </span>
                            </div>

                            <!-- Team 2 coefficient -->
                            <div class="coefficient additional-event__coefficient additional-event__data-item">
                                0%
                            </div>

                            <!-- Team 2 logo -->
                            <div class="additional-event__team-logo additional-event__data-item"
                                 style="background: url('assets/img/team4.png') center center no-repeat; background-size: auto 80%;">
                            </div>

                            <!-- Team 2 name -->
                            <div class="additional-event__team-name additional-event__data-item">
                                Astralis
                            </div>
                        </div>
                    </div>

                    <!-- DROPDOWN TRIGGER -->
                    <div class="additional-betting-line__item col-xs-1">
                        <div>
                            <dropdown-gradient-trigger/>
                        </div>
                    </div>
                    <!-- END particular event data -->

                </div>

                <!-- Dropdown content -->
                <!-- Additional events provided by main event above -->
                <div slot="dropdown" class="additional-event__addition_wrap">
                    <!-- Additional event -->
                    <div class="row additional-event__addition">
                        <!-- Event name -->
                        <div class="additional-betting-line__item col-xs-11 col-xs-offset-0  col-sm-offset-2 col-sm-2">
                            <div class="additional-event__option-name">Map 3 winner</div>
                        </div>

                        <!-- Additional event data -->
                        <div class="additional-betting-line__item col-xs-11 col-sm-7">
                            <div class="additional-event__data">
                                <!-- Team 1 name -->
                                <div class="additional-event__team-name additional-event__data-item">
                                    Navi
                                </div>

                                <!-- Team 1 coefficient -->
                                <div class="coefficient additional-event__coefficient additional-event__data-item">
                                    66%
                                </div>

                                <!-- Score -->
                                <div class="simple-score simple-score_default additional-event__data-item">
                                                <span>
                                                    <span class="simple-score__separator">-</span>
                                                </span>
                                </div>

                                <!-- Team 2 coefficient -->
                                <div class="coefficient additional-event__coefficient additional-event__data-item">
                                    34%
                                </div>

                                <!-- Team 2 name -->
                                <div class="additional-event__team-name additional-event__data-item">
                                    Astralis
                                </div>
                            </div>
                        </div>

                        <!-- More info about event -->
                        <div class="additional-betting-line__item col-xs-1 col-sm-1">
                            <div class="info-pick"></div>
                        </div>
                    </div>
                </div>
            </dropdown-element>
        </div>
    </div>
</template>

<script>
    // Components
    import DropdownElement from '../Dropdown/DropdownElement';
    import DropdownGradientTrigger from "../Dropdown/trigger-variations/DropdownGradientTrigger";

    export default {
        name: "AdditionalBettingLine",
        components: {
            DropdownGradientTrigger,
            DropdownElement
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
