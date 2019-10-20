<!--
    I AM SORRY DEAR DEVELOPER. BUT IT SEEMS LIKE I'VE AWFULLY DESIGNED THIS COMPONENT,
    SO YOU CAN TREAT IT AS LEGACY. EVEN I CAN'T UNDERSTAND HOW IT WORKS, BUT THANKFULLY IT SOMEHOW FUNCTIONS.
    I STRONGLY ENCOURAGE YOU TO AVOID CHANGING IT, CUZ IT MAY BE VERY UNSTABLE.
    CONTACT ME IF YOU NEED CONSULTATION:
    @email: ask.please@mail.ru
    @warning @danger @dontTouch
-->

<template>
    <div class="table-manager" :id="tablesContainerId">
        <!-- DESKTOP, (initial table) -->
        <div id="initial-table-container" class="table-manager__desktop">
            <default-table-desktop
                    :tables-container-id="tablesContainerId"
                    :table-selector="tableSelector"
                    :table-class-name="tableClassName"
            >
                <slot></slot>
            </default-table-desktop>
        </div>

        <!-- TABLET -->
        <div>
            <default-table-tablet
                    :tables-container-id="tablesContainerId"
                    :table-selector="tableSelector"
                    :table-class-name="tableClassName"
            />
        </div>

        <!-- MOBILE -->
        <div class="table-manager__mobile">
            <default-table-mobile
                    :tables-container-id="tablesContainerId"
                    :table-selector="tableSelector"
                    :table-class-name="tableClassName"
            />
        </div>
    </div>
</template>

<script>
    // Components
    import DefaultTableMobile from "./DefaultTableMobile";
    import DefaultTableTablet from "./DefaultTableTablet";
    import DefaultTableDesktop from "./DefaultTableDesktop";
    import RandomKeyMixin from '../../shared/mixins/random-key-generator';

    export default {
        name: "DefaultTable",
        components: {DefaultTableDesktop, DefaultTableTablet, DefaultTableMobile},
        mixins: [RandomKeyMixin],
        computed: {
            tableSelector() {
                return `#initial-table-container .${this.tableClassName}`;
            }
        },
        props: {
            tableClassName: {
                type: String,
                default: 'default-table'
            }
        },
        data() {
            return {
                tablesContainerId: this.uniqueKey()
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
