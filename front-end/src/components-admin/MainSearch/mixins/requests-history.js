export default {
    data() {
        return {
            requestsHistory: []
        }
    },
    methods: {
        getFromHistory(query, type) {
            const result = this.requestsHistory.filter((request) => {
                return (request.query === query && request.type === this.requestType(type));
            });

            if (!result.length) return null; // if nothing found
            return result[0].content; // returning collected response
        },

        writeHistory(query, type, response) {
            this.requestsHistory.push(
                {
                    query,
                    type: this.requestType(type),
                    content: response
                }
            );
        },

        requestType(type) {
            return type.toString();
        }
    }
};
