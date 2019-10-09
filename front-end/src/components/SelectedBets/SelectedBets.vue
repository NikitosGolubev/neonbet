<template>
    <!-- User chosen bets section -->
    <div class="my-bets">

        <!-- Side open button for section -->
        <div @click="adjustSelectedBets" class="my-bets__btn my-bets__btn_open side-btn side-btn_gradient">
            <div class="banknote"></div>
            <div class="side-btn__text my-bets__btn_text-open">Ваши ставки</div>
            <div class="my-bets__btn-bets-counter">(2)</div>
        </div>

        <!-- Chosen bets section - hidden -->

        <div @click="adjustSelectedBets" v-if="isOpened" class="my-bets__content_bg"></div>
        <transition name="slide-side">
            <div class="my-bets__content_wrap" v-if="isOpened">
                <!-- Side close button for section -->
                <div @click="adjustSelectedBets" class="my-bets__btn side-btn side-btn_secondary">
                            <div class="white-cross"></div>
                            <div class="side-btn__text">Ваши ставки</div>
                            <div class="my-bets__btn-bets-counter">(2)</div>
                        </div>

                <!-- Particular section which contains all the data about chosen events by user -->
                <div class="my-bets__content card">
                    <!-- Section header -->
                    <div class="my-bets__header card__header">
                                    <!-- Logo -->
                                    <div class="logo"></div>

                                    <div class="btn__outline-gradient-fillable_wrap">
                                        <div class="btn btn_sm btn__outline-gradient-fillable">
                                            <span class="btn__outline-gradient-fillable_text">Очистить всё</span>
                                        </div>
                                        <div class="btn__outline-gradient-fillable_border"></div>
                                    </div>
                                </div>
                        <!-- Section content -->
                            <main-scroll classes="my-bets__data card__content">
                                <!-- All the data about particular picked event -->
                                <div class="selected-bet">
                                        <!-- Container with controls for implementing operations with selected event -->
                                        <div class="selected-bet__controls">
                                            <div class="item-btn red-cross"></div>
                                        </div>

                                        <!-- Particular data about selected event -->
                                        <div class="selected-bet__match-data row">
                                            <!-- Team 1 logo -->
                                            <div class="team-logo-bubble team-logo-bubble_muted-light col-xs-4"
                                                 style="background: url('assets/img/team3.png') center center no-repeat; background-size: auto 80%;">
                                            </div>

                                            <!-- Info about match: game logo, date -->
                                            <div class="col-xs-4 selected-bet__game-details">
                                                <div class="game-logo"
                                                     style="background: url('assets/img/csgo.png') center center no-repeat; background-size: 60%;"></div>
                                                <div class="event-time-data">
                                                    <div class="event-time-data__item">14:14</div>
                                                    <div class="event-time-data__item">14 мар</div>
                                                </div>
                                            </div>

                                            <!-- Team 2 logo -->
                                            <div class="team-logo-bubble team-logo-bubble_muted-light col-xs-4"
                                                 style="background: url('assets/img/team4.png') center center no-repeat; background-size: auto 80%;">
                                            </div>
                                        </div>


                                        <!-- Particular data about BET which user intends to place -->
                                        <div>
                                            <div class="my-bets__detail">
                                                <div>
                                                    <div><span class="subheader alternative">Выбор:</span></div>
                                                    <span>Победитель, пистолетный раунд: </span>
                                                </div>
                                                <div><span class="selected-bet__choice">Команда 1</span></div>
                                            </div>
                                            <div class="my-bets__detail">
                                                <div><span class="subheader alternative">Коэффициент:</span></div>
                                                <div><span class="coefficient coefficient_plain coefficient_big">58%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- END All the data about particular picked event -->

                                <!-- All the data about particular picked event -->
                                <div class="selected-bet">
                                        <!-- Container with controls for implementing operations with selected event -->
                                        <div class="selected-bet__controls">
                                            <div class="item-btn red-cross"></div>
                                        </div>

                                        <!-- Particular data about selected event -->
                                        <div class="selected-bet__match-data row">
                                            <!-- Team 1 logo -->
                                            <div class="team-logo-bubble team-logo-bubble_muted-light col-xs-4"
                                                 style="background: url('assets/img/team3.png') center center no-repeat; background-size: auto 80%;">
                                            </div>

                                            <!-- Info about match: game logo, date -->
                                            <div class="col-xs-4 selected-bet__game-details">
                                                <div class="game-logo"
                                                     style="background: url('assets/img/csgo.png') center center no-repeat; background-size: 60%;"></div>
                                                <div class="event-time-data">
                                                    <div class="event-time-data__item">14:14</div>
                                                    <div class="event-time-data__item">14 мар</div>
                                                </div>
                                            </div>

                                            <!-- Team 2 logo -->
                                            <div class="team-logo-bubble team-logo-bubble_muted-light col-xs-4"
                                                 style="background: url('assets/img/team4.png') center center no-repeat; background-size: auto 80%;">
                                            </div>
                                        </div>


                                        <!-- Particular data about BET which user intends to place -->
                                        <div>
                                            <div class="my-bets__detail">
                                                <div>
                                                    <div><span class="subheader alternative">Выбор:</span></div>
                                                    <span>Победитель, пистолетный раунд: </span>
                                                </div>
                                                <div><span class="selected-bet__choice">Команда 1</span></div>
                                            </div>
                                            <div class="my-bets__detail">
                                                <div><span class="subheader alternative">Коэффициент:</span></div>
                                                <div><span class="coefficient coefficient_plain coefficient_big">58%</span></div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- END All the data about particular picked event -->

                                <!-- General data about all selected bets -->
                                <div class="my-bets__overall">
                                        <div class="my-bets__detail">
                                            <div class="subheader">Тип ставки:</div>
                                            <div class="my-bets__type">Экспресс</div>
                                        </div>
                                        <div class="my-bets__detail">
                                            <div class="subheader">Итоговый коэф:</div>
                                            <div class="coefficient coefficient_plain coefficient_big">3.32</div>
                                        </div>
                                    </div>
                                <!-- END General data about all selected bets -->

                                <!-- Area, where user can confirm his choice and place a bet -->
                                <div class="place-bet">
                                        <!-- Form to place a bet -->
                                        <div class="place-bet__item">
                                            <div>
                                                <input class="field field_dark-rounded" type="text" placeholder="Введите сумму:" />
                                            </div>
                                            <div class="place-bet__btn">
                                                <div class="btn__outline-gradient-fillable_wrap">
                                                    <div class="btn btn_sm btn__outline-gradient-fillable">
                                                        <span class="btn__outline-gradient-fillable_text">Ставка!</span>
                                                    </div>
                                                    <div class="btn__outline-gradient-fillable_border"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Potential user income -->
                                        <div class="place-bet__item">
                                            <div class="place-bet__sign">Возможный выигрышь на данный момент:</div>
                                            <div class="place-bet__potential-income">10000Р</div>
                                        </div>
                                    </div>
                                <!-- END area where user can confirm his choice and place a bet -->
                            </main-scroll>
                        <!-- END section content -->
                    </div>
            </div>
        </transition>
        <!-- END chosen bets section - hiddden -->
    </div>
    <!-- END User chosen bets section -->
</template>

<script>
    export default {
        name: "SelectedBets",
        data() {
            return {
                isOpened: false
            }
        },
        methods: {
            adjustSelectedBets() {
                this.isOpened = !this.isOpened;
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
