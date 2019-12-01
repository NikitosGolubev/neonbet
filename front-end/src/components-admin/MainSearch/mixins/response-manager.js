import NotRequestedSearchResponse from "../search-responses/NotRequestedSearchResponse";
import NotFoundSearchResponse from "../search-responses/NotFoundSearchResponse";
import UsersTable from "../../UsersTable/UsersTable";
import DefaultSearchResponse from "../search-responses/DefaultSearchResponse";

const DEFAULT_KEY = 'DEFAULT';
const NOT_FOUND_KEY = 'NOT FOUND';
const USERS_KEY = 'USERS';

const responses = new Map([
    [NOT_FOUND_KEY, NotFoundSearchResponse],
    [USERS_KEY, UsersTable],
    [DEFAULT_KEY, DefaultSearchResponse]
]);

export default {
    data() {
        return {
            responseComponent: NotRequestedSearchResponse
        };
    },
    methods: {
        setResponseComponent(componentKey) {
            this.responseComponent = responses.get(componentKey);
        },

        newResponseDerived(response) {
            if (response.type === NOT_FOUND_KEY || !response.type) {
                this.setResponseComponent(NOT_FOUND_KEY);
            } else if (response.type === USERS_KEY) {
                this.setResponseComponent(USERS_KEY);
            } else {
                this.setResponseComponent(DEFAULT_KEY);
            }
        }
    }
};
