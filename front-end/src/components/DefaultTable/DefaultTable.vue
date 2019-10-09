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
    // Packages
    import uuid from 'uuid/v4';

    // Components
    import DefaultTableMobile from "./DefaultTableMobile";
    import DefaultTableTablet from "./DefaultTableTablet";
    import DefaultTableDesktop from "./DefaultTableDesktop";

    export default {
        name: "DefaultTable",
        components: {DefaultTableDesktop, DefaultTableTablet, DefaultTableMobile},
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
                tablesContainerId: uuid()
            }
        }
    }
</script>