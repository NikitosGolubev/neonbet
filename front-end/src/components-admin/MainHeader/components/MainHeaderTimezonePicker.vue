<template>
    <el-select v-model="currentTimezone">
        <el-option-group v-for="(timezones, groupName) in supportedTimezones" :key="groupName" :label="groupName">
            <el-option v-for="tz in timezones" :key="tz" :label="tz" :value="tz" />
        </el-option-group>
    </el-select>
</template>

<script>
    import MockTimezones from '../../../mock-data/timezones';

    export default {
        name: "MainHeaderTimezonePicker",
        data() {
            return {
                supportedTimezones: MockTimezones.supportedTimezones,
                currentTimezone: MockTimezones.currentTimezone
            }
        }
    }
</script>
