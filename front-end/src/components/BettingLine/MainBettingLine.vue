<template>
    <!-- Betting line -->
    <div class="betting-line card">
        <!-- Betting line header -->
        <header class="betting-line__header card__header">
            <div class="betting-line__header-controls">
                <span class="btn btn_fillable-gradient-active betting-line__header-controls_gap">Матчи</span>
                <span class="btn btn_fillable-gradient betting-line__header-controls_gap">Турниры</span>
            </div>
            <div class="betting-line__header-controls">
                <span class="btn btn_fillable-simple-active betting-line__header-controls_gap">Активные</span>
                <span class="btn btn_fillable-simple betting-line__header-controls_gap">Результаты</span>
            </div>
        </header>

        <!-- Betting line filter nav -->
        <nav class="card__nav">
            <ul class="card__nav-list">
                <li class="card__nav-item card__nav-item_active">Текущие матчи</li>
                <li class="card__nav-item">Ближайшие матчи</li>
                <li class="card__nav-item">Завершённые матчи</li>
            </ul>
        </nav>

        <!-- Betting line options -->
        <div class="betting-line__content row">

            <!-- Particular option -->
            <div class="col-xs-12 col-sm-6">
                <div class="betting-event betting-line__event card__content">
                <!-- FIRST ROW -->
                <div class="row">
                    <!-- Team 1 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="team-logo-bubble"
                                   style="background: url('assets/img/team3.png') center center no-repeat; background-size: auto 80%;"></div>
                    </div>

                    <!-- Info about match: game logo, life sensor, mb result -->
                    <div class="betting-event__general-data betting-event__grid-item col-xs-4">
                        <div class="game-logo"
                             style="background: url('assets/img/csgo.png') center center no-repeat; background-size: 60%;"></div>

                        <live-sensor
                            :is-live="true"
                            :broadcast-url="'https://player.twitch.tv/?channel=esl_csgo&muted=false&autoplay=false'"
                        />
                    </div>

                    <!-- Team 2 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="team-logo-bubble"
                             style="background: url('assets/img/team4.png') center center no-repeat; background-size: auto 80%;">
                        </div>
                    </div>
                </div>
                <!-- FIRST ROW END -->

                <!-- SECOND ROW -->
                <div class="row">
                    <!-- Team 1 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Navi</div>
                        <div class="coefficient betting-event__coefficient">53%</div>
                    </div>

                    <!-- Match time data -->
                    <div class="event-time-data betting-event__grid-item col-xs-4">
                        <div class="event-time-data__item">14:14</div>
                        <div class="event-time-data__item">14 мар</div>
                    </div>

                    <!-- Team 2 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Astralis</div>
                        <div class="coefficient betting-event__coefficient">47%</div>
                    </div>
                </div>
                <!-- SECOND ROW END -->

                <!-- THIRD ROW -->
                <div class="row">
                    <!-- Bet on team1 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_sm btn__outline-gradient-fillable">
                                <span class="btn__outline-gradient-fillable_text">Поставить</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </div>
                    </div>

                    <!-- Decoration -->
                    <div class="betting-event__versus betting-event__grid-item col-xs-4">vs</div>

                    <!-- Bet on team2 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_sm btn__outline-gradient-fillable">
                                <span class="btn__outline-gradient-fillable_text">Поставить</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </div>
                    </div>
                    <!-- THIRD ROW END -->
                </div>

            </div>
            </div>

            <!-- Particular option -->
            <div class="col-xs-12 col-sm-6">
                <div class="betting-event betting-line__event card__content">
                <!-- FIRST ROW -->
                <div class="row">
                    <!-- Team 1 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="team-logo-bubble"
                             style="background: url('assets/img/team3.png') center center no-repeat; background-size: auto 80%;">
                        </div>
                    </div>

                    <!-- Info about match: game logo, life sensor, mb result -->
                    <div class="betting-event__general-data betting-event__grid-item col-xs-4">
                        <div class="game-logo"
                             style="background: url('assets/img/csgo.png') center center no-repeat; background-size: 60%;"></div>

                        <live-sensor
                                :is-live="false"
                                :broadcast-url="'https://player.twitch.tv/?channel=esl_csgo&muted=false&autoplay=false'"
                        />
                    </div>

                    <!-- Team 2 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                    <div class="team-logo-bubble"
                         style="background: url('assets/img/team4.png') center center no-repeat; background-size: auto 80%;">
                    </div>
                </div>
                </div>
                <!-- FIRST ROW END -->

                <!-- SECOND ROW -->
                <div class="row">
                    <!-- Team 1 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Navi</div>
                        <div class="coefficient betting-event__coefficient">100%</div>
                    </div>

                    <!-- Match time data -->
                    <div class="event-time-data betting-event__grid-item col-xs-4">
                        <div class="event-time-data__item">14:14</div>
                        <div class="event-time-data__item">14 мар</div>
                    </div>

                    <!-- Team 2 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Astralis</div>
                        <div class="coefficient betting-event__coefficient">0%</div>
                    </div>
                </div>
                <!-- SECOND ROW END -->

                <!-- THIRD ROW -->
                <div class="row">
                    <!-- Bet on team1 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_sm btn__outline-gradient-fillable">
                                <span class="btn__outline-gradient-fillable_text">Поставить</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </div>
                    </div>

                    <!-- Decoration -->
                    <div class="betting-event__versus betting-event__grid-item col-xs-4">vs</div>

                    <!-- Bet on team2 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_sm btn__outline-gradient-fillable">
                                <span class="btn__outline-gradient-fillable_text">Поставить</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </div>
                    </div>
                </div>
                <!-- THIRD ROW END -->
            </div>
            </div>

            <!-- Particular option -->
            <div class="col-xs-12 col-sm-6">
                <div class="betting-event betting-line__event card__content">
                <!-- FIRST ROW -->
                <div class="row">
                    <!-- Team 1 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="team-logo-bubble"
                             style="background: url('assets/img/team3.png') center center no-repeat; background-size: auto 80%;">
                        </div>
                    </div>

                    <!-- Info about match: game logo, life sensor, mb result -->
                    <div class="betting-event__general-data betting-event__grid-item col-xs-4">
                        <div class="game-logo"
                             style="background: url('assets/img/csgo.png') center center no-repeat; background-size: 60%;"></div>

                        <live-sensor
                                :is-live="true"
                                :broadcast-url="'https://player.twitch.tv/?channel=esl_csgo&muted=false&autoplay=false'"
                        />
                    </div>

                    <!-- Team 2 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="team-logo-bubble"
                             style="background: url('assets/img/team4.png') center center no-repeat; background-size: auto 80%;">
                        </div>
                    </div>
                </div>
                <!-- FIRST ROW END -->

                <!-- SECOND ROW -->
                <div class="row">
                    <!-- Team 1 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Navi</div>
                        <div class="coefficient betting-event__coefficient">100%</div>
                    </div>

                    <!-- Match time data -->
                    <div class="event-time-data betting-event__grid-item col-xs-4">
                        <div class="clock event-time-data__item"></div>
                        <div class="event-time-data__item">00:47:52</div>
                    </div>

                    <!-- Team 2 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Astralis</div>
                        <div class="coefficient betting-event__coefficient">0%</div>
                    </div>
                </div>
                <!-- SECOND ROW END -->

                <!-- THIRD ROW -->
                <div class="row">
                    <!-- Bet on team1 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_sm btn__outline-gradient-fillable">
                                <span class="btn__outline-gradient-fillable_text">Поставить</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </div>
                    </div>

                    <!-- Decoration -->
                    <div class="betting-event__versus betting-event__grid-item col-xs-4">vs</div>

                    <!-- Bet on team2 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_sm btn__outline-gradient-fillable">
                                <span class="btn__outline-gradient-fillable_text">Поставить</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </div>
                    </div>
                </div>
                <!-- THIRD ROW END -->
            </div>
            </div>

            <!-- Particular option -->
            <div class="col-xs-12 col-sm-6">
                <div class="betting-event betting-line__event card__content">
                <!-- FIRST ROW -->
                <div class="row">
                    <!-- Team 1 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="team-logo-bubble"
                             style="background: url('assets/img/team3.png') center center no-repeat; background-size: auto 80%;">
                        </div>
                    </div>

                    <!-- Info about match: game logo, life sensor, mb result -->
                    <div class="betting-event__general-data betting-event__grid-item col-xs-4">
                        <div class="game-logo"
                             style="background: url('assets/img/csgo.png') center center no-repeat; background-size: 60%;"></div>
                        <div class="score">
                            <div class="score__concrete score_winner">5</div>
                            <div class="score__separator">:</div>
                            <div class="score__concrete">0</div>
                        </div>
                    </div>

                    <!-- Team 2 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="team-logo-bubble"
                             style="background: url('assets/img/team4.png') center center no-repeat; background-size: auto 80%;">
                        </div>
                    </div>
                </div>
                <!-- FIRST ROW END -->

                <!-- SECOND ROW -->
                <div class="row">
                    <!-- Team 1 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Navi</div>
                        <div class="trophy betting-event__winner"></div>
                    </div>

                    <!-- Match time data -->
                    <div class="event-time-data betting-event__grid-item col-xs-4">
                        <div class="event-time-data__item">14:14</div>
                        <div class="event-time-data__item">14 мар</div>
                    </div>

                    <!-- Team 2 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Astralis</div>
                        <div class="betting-event__loser"></div>
                    </div>
                </div>
                <!-- SECOND ROW END -->

                <!-- THIRD ROW -->
                <div class="row">
                    <!-- Bet on team1 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn btn_result-disabled">win</div>
                    </div>

                    <!-- Decoration -->
                    <div class="betting-event__versus betting-event__grid-item col-xs-4">vs</div>

                    <!-- Bet on team2 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn btn_result-disabled">loss</div>
                    </div>
                </div>
                <!-- THIRD ROW END -->
            </div>
            </div>

            <!-- Particular option -->
            <div class="col-xs-12 col-sm-6">
                <div class="betting-event betting-line__event card__content">
                <!-- FIRST ROW -->
                <div class="row">
                    <!-- Team 1 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="team-logo-bubble"
                             style="background: url('assets/img/team3.png') center center no-repeat; background-size: auto 80%;">
                        </div>
                    </div>

                    <!-- Info about match: game logo, life sensor, mb result -->
                    <div class="betting-event__general-data betting-event__grid-item col-xs-4">
                        <div class="game-logo"
                             style="background: url('assets/img/csgo.png') center center no-repeat; background-size: 60%;"></div>

                        <live-sensor
                                :is-live="true"
                                :broadcast-url="'https://player.twitch.tv/?channel=esl_csgo&muted=false&autoplay=false'"
                        />
                    </div>

                    <!-- Team 2 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="team-logo-bubble"
                             style="background: url('assets/img/team4.png') center center no-repeat; background-size: auto 80%;">
                        </div>
                    </div>
                </div>
                <!-- FIRST ROW END -->

                <!-- SECOND ROW -->
                <div class="row">
                    <!-- Team 1 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Navi</div>
                        <div class="coefficient betting-event__coefficient">53%</div>
                    </div>

                    <!-- Match time data -->
                    <div class="event-time-data betting-event__grid-item col-xs-4">
                        <div class="event-time-data__item">14:14</div>
                        <div class="event-time-data__item">14 мар</div>
                    </div>

                    <!-- Team 2 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Astralis</div>
                        <div class="coefficient betting-event__coefficient">47%</div>
                    </div>
                </div>
                <!-- SECOND ROW END -->

                <!-- THIRD ROW -->
                <div class="row">
                    <!-- Bet on team1 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_sm btn__outline-gradient-fillable">
                                <span class="btn__outline-gradient-fillable_text">Поставить</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </div>
                    </div>

                    <!-- Decoration -->
                    <div class="betting-event__versus betting-event__grid-item col-xs-4">vs</div>

                    <!-- Bet on team2 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_sm btn__outline-gradient-fillable">
                                <span class="btn__outline-gradient-fillable_text">Поставить</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </div>
                    </div>
                </div>
                <!-- THIRD ROW END -->
            </div>
            </div>

            <!-- Particular option -->
            <div class="col-xs-12 col-sm-6">
                <div class="betting-event betting-line__event card__content">
                <!-- FIRST ROW -->
                <div class="row">
                    <!-- Team 1 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="team-logo-bubble"
                             style="background: url('assets/img/team3.png') center center no-repeat; background-size: auto 80%;">
                        </div>
                    </div>

                    <!-- Info about match: game logo, life sensor, mb result -->
                    <div class="betting-event__general-data betting-event__grid-item col-xs-4">
                        <div class="game-logo"
                             style="background: url('assets/img/csgo.png') center center no-repeat; background-size: 60%;"></div>

                        <live-sensor
                                :is-live="false"
                                :broadcast-url="'https://player.twitch.tv/?channel=esl_csgo&muted=false&autoplay=false'"
                        />
                    </div>

                    <!-- Team 2 logo -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="team-logo-bubble"
                             style="background: url('assets/img/team4.png') center center no-repeat; background-size: auto 80%;">
                        </div>
                    </div>
                </div>
                <!-- FIRST ROW END -->

                <!-- SECOND ROW -->
                <div class="row">
                    <!-- Team 1 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Navi</div>
                        <div class="coefficient betting-event__coefficient">53%</div>
                    </div>

                    <!-- Match time data -->
                    <div class="event-time-data betting-event__grid-item col-xs-4">
                        <div class="event-time-data__item">14:14</div>
                        <div class="event-time-data__item">14 мар</div>
                    </div>

                    <!-- Team 2 name and coefficient, etc... -->
                    <div class="betting-event__team-data betting-event__grid-item col-xs-4">
                        <div class="betting-event__team-name">Astralis</div>
                        <div class="coefficient betting-event__coefficient">47%</div>
                    </div>
                </div>
                <!-- SECOND ROW END -->

                <!-- THIRD ROW -->
                <div class="row">
                    <!-- Bet on team1 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_sm btn__outline-gradient-fillable">
                                <span class="btn__outline-gradient-fillable_text">Поставить</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </div>
                    </div>

                    <!-- Decoration -->
                    <div class="betting-event__versus betting-event__grid-item col-xs-4">vs</div>

                    <!-- Bet on team2 btn -->
                    <div class="betting-event__grid-item col-xs-4">
                        <div class="btn__outline-gradient-fillable_wrap">
                            <div class="btn btn_sm btn__outline-gradient-fillable">
                                <span class="btn__outline-gradient-fillable_text">Поставить</span>
                            </div>
                            <div class="btn__outline-gradient-fillable_border"></div>
                        </div>
                    </div>
                </div>
                <!-- THIRD ROW END -->
            </div>
            </div>
        </div>

        <!-- Betting line footer -->
        <footer class="card__footer betting-line__footer">
            <div class="btn btn_muted-text-change btn_lg">Показать ещё</div>
        </footer>
    </div>
    <!-- END Betting line -->
</template>

<script>
    import LiveSensor from "../LiveSensor/LiveSensor";
    export default {
        name: "MainBettingLine",
        components: {LiveSensor}
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
