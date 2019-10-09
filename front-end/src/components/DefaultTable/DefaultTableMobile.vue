<template>
    <div v-observe-visibility="visibilityChanged">
        <div v-if="isVisible">

            <!-- Single representations of 1 row -->
            <table v-for="singleTable in singles" class="table_stretch"
                   :class="[TABLE.className, tableClass(null, 'horizontal')]">

                <!-- Primary header cell of table -->
                <tr :class="[TABLE.rowClassName]">
                    <th :class="[TABLE.headerCellClassName, tableClass('dropdown-container')]">
                        <div :class="[tableClass('dropdown-container', 'content')]" v-html="primaryHeaderHTML">
                        </div>

                        <!-- DROPDOWN CONTROL -->
                        <div :class="[tableClass('dropdown')]" @click="adjustSingleTableDataState(singleTable)">
                            <div v-show="!singleTable.isMobileDataActive" class="dropdown-arrow dropdown-arrow_open"></div>
                            <div v-show="singleTable.isMobileDataActive" class="dropdown-arrow dropdown-arrow_close"></div>
                        </div>
                    </th>
                </tr>

                <!-- All other hidden headers of table (activate by dropdown) -->
                <tr v-show="singleTable.isMobileDataWrapActive">
                    <td>
                        <slide-up-down
                                @open-start="showDataWrapper(singleTable)"
                                @close-end="hideDataWrapper(singleTable)"
                                :active="singleTable.isMobileDataActive">
                            <table :class="[TABLE.className]" class="table_stretch">
                                <tr :class="[TABLE.rowClassName]" :key="uniqueKey()" v-for="header in tableHeaders">
                                    <th :class="[TABLE.headerCellClassName]" v-html="header.innerHTML"></th>
                                </tr>
                            </table>
                        </slide-up-down>
                    </td>
                </tr>

                <!-- Primary content cell which matches with primary header -->
                <tr :class="[TABLE.rowClassName]">
                    <td :class="[TABLE.cellClassName]" v-html="getPrimaryCellHTML(singleTable)">
                    </td>
                </tr>

                <!-- Other content cells which are hidden (activate by dropdown) -->
                <tr v-show="singleTable.isMobileDataWrapActive">
                    <td>
                        <slide-up-down
                                @open-start="showDataWrapper(singleTable)"
                                @close-end="hideDataWrapper(singleTable)"
                                :active="singleTable.isMobileDataActive">
                            <table :class="[TABLE.className]" class="table_stretch">
                                <tr :key="uniqueKey()" v-for="cell in singleTable.otherCells" :class="[TABLE.rowClassName]">
                                    <td :class="[TABLE.cellClassName]" v-html="cell.innerHTML">
                                    </td>
                                </tr>
                            </table>
                        </slide-up-down>
                    </td>
                </tr>

                <!-- Additional content for the single table if provided -->
                <tr :key="uniqueKey()" v-for="additionalContent in singleTable.additionalContent">
                    <td v-html="additionalContent.outerHTML">
                    </td>
                </tr>

            </table>

        </div>
    </div>
</template>

<script>
    // Packages
    import SlideUpDown from 'vue-slide-up-down';

    // Mixins
    import mobileMixin from './mixins/mobile';
    import randomKeyGenerator from '../../mixins/random-key-generator';


    export default {
        name: "DefaultTableMobile",
        mixins: [mobileMixin, randomKeyGenerator],
        components: {
            SlideUpDown
        },
        methods: {
            tableClass(element = null, addition = null) {
                const mainClass = this.TABLE.className;

                if (element && !addition) return mainClass+'__'+element;
                if (!element && addition) return mainClass+'_'+addition;
                if (element && addition) return mainClass+'__'+element+'_'+addition;

                return mainClass;
            }
        }
    }
</script>

<style scoped>

</style>