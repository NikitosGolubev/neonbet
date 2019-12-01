<template>
    <div>
        <main-search-panel :query.sync="query" :type.sync="type" @search="search" :was-search-requested="wasSearchRequested" />

        <el-dialog fullscreen :visible.sync="isDetailsVisible">
            <main-search-panel :query.sync="query" :type.sync="type" @search="search" :was-search-requested="wasSearchRequested" />

            <div class="mt-4 ph-2">
                <component :data="responseResult" :is="responseComponent"></component>
            </div>
        </el-dialog>
    </div>
</template>

<script>
    import ResponseManagerMixin from './mixins/response-manager';
    import RequestsHistoryMixin from './mixins/requests-history';

    import MainSearchPanel from "./MainSearchPanel";
    import MockSearchResponse from '../../mock-data/search-response';

    export default {
        name: "MainSearch",
        mixins: [ResponseManagerMixin, RequestsHistoryMixin],
        components: {MainSearchPanel},
        data() {
            return {
                query: null,
                type: null,
                isDetailsVisible: false,
                wasSearchRequested: false,
                responseResult: null
            }
        },
        methods: {
            search({isValid}) {
                this.activateDetails();
                this.searchRequestHappened();

                if (isValid) {
                    setTimeout(() => {
                        const response = this.requestData();
                        this.newResponseDerived(response);
                    }, 0);
                }
            },

            searchRequestHappened() {this.wasSearchRequested = true;},
            activateDetails() {this.isDetailsVisible = true;},

            /** Requests data according to user input */
            requestData() {
                let searchResponse = this.getFromHistory(this.query, this.type);

                if (!searchResponse) {
                    searchResponse = MockSearchResponse();
                    this.writeHistory(this.query, this.type, searchResponse);
                }

                this.responseResult = searchResponse.response;

                return searchResponse;
            }
        }
    }
</script>
