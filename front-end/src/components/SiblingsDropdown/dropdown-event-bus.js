import Vue from 'vue';

/**
 * Event bus to ensure the communication between dropdown trigger and dropdown self.
 */
const DropdownEventBus = new Vue();

export default DropdownEventBus;