<template>
    <el-row :gutter="10">
        <el-col class="mv-7" :xs="24" :sm="12" :md="14" :lg="16" :xl="17">
            <main-search-field @input="queryChanged" v-model.trim="queryVal" />

            <v-field-error-message v-if="err($v.query.$invalid)" :message="getQueryErrorMessage" />
        </el-col>
        <el-col class="mv-7" :xs="20" :sm="10" :md="8" :lg="6" :xl="6">
            <main-search-type-select @input="typeChanged" v-model="typeVal" />

            <v-field-error-message v-if="err($v.type.$invalid)" :message="getTypeErrorMessage"/>
        </el-col>
        <el-col class="mv-7" :xs="4" :sm="2" :md="2" :lg="2" :xl="1">
            <main-search-trigger @click.native="search" />
        </el-col>
    </el-row>
</template>

<script>
    import MainSearchField from "./MainSearchField";
    import VFieldErrorMessage from "../ui/messages/VFieldErrorMessage";
    import MainSearchTypeSelect from "./MainSearchTypeSelect";
    import MainSearchTrigger from "./MainSearchTrigger";
    import ValidationMixin from './mixins/validation';

    export default {
        name: "MainSearchPanel",
        mixins: [ValidationMixin],
        components: {MainSearchTrigger, MainSearchTypeSelect, VFieldErrorMessage, MainSearchField},
        props: {
            wasSearchRequested: {
                type: Boolean,
                default: false
            },
            query: {required: true},
            type: {required: true}
        },
        methods: {
            search() {
                this.validate();
                this.$emit('search', {
                    isValid: this.isValidationSucceeded
                });
            },

            /** Determines whether validation error may be displayed. */
            err(validationCondition) {
                return (this.wasSearchRequested && validationCondition);
            },

            queryChanged(value) {this.$emit('update:query', value);},
            typeChanged(value) {this.$emit('update:type', value);},

            /**
             * Makes local value of changeable parameters align with given props.
             */
            syncData() {
                this.queryVal = this.query;
                this.typeVal = this.type;
            }
        },
        data() {
            return {
                queryVal: null,
                typeVal: null
            }
        },
        created() {
            this.syncData();
        },
        watch: {
            query() {this.syncData();},
            type() {this.syncData();}
        }
    }
</script>
