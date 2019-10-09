import randomId from 'uuid/v4';

/**
 * Generates random IDs and collects common IDs for specific data groups.
 * Based on top of UUID.
 */
export default {
    data() {
        return {
            // Contains keys for data groups.
            keysStorage: {}
        }
    },
    methods: {
        /**
         * Generates or returns a key for specific piece of data.
         */
        uniqueKey(subject = null, index = null) {
            if (subject === null) return randomId();

            let subjectData = this._getSubjectData(subject, index);

            if (!subjectData) {
                return this._setSubjectData(subject, index)
            }

            return subjectData;
        },

        /**
         * Gets the random key of specific data group.
         */
        _getSubjectData(subject, index = null) {
            if (index === null) return this.keysStorage[subject];
            return this.keysStorage[subject][index];
        },

        /**
         * Assigns a random key for specific data group and stores it.
         */
        _setSubjectData(subject, index = null) {
            const randomKey = randomId();

            if (index === null) {
                this.$set(this.keysStorage, subject, randomKey);
            } else {
                this.$set(this.keysStorage, subject, []);
                this.keysStorage[subject].push(randomKey);
            }

            return randomKey;
        }
    }
};