<template>
    <el-date-picker
            v-model="value"
            type="daterange"
            align="right"
            unlink-panels
            range-separator="До"
            start-placeholder="Начало"
            end-placeholder="Конец"
            :picker-options="pickerOptions"
            value-format="timestamp"
            format="dd.MM.yyyy"
    >
    </el-date-picker>
</template>

<script>
    export default {
        name: "HomeOverviewDatepicker",
        data() {
            return {
                pickerOptions: {
                    disabledDate: (selectedDate) => {
                        const now = new Date();
                        return selectedDate > now;
                    },
                    shortcuts: [{
                        text: 'Сегодня',
                        onClick(picker) {
                            const end = new Date();
                            const start = new Date();
                            start.setTime(start.getTime());
                            picker.$emit('pick', [start, end]);
                        }
                    }, {
                        text: 'Вчера',
                        onClick(picker) {
                            const end = new Date();
                            const start = new Date();
                            start.setTime(start.getTime() - 3600 * 1000 * 24 * 2);
                            picker.$emit('pick', [start, end]);
                        }
                    }, {
                        text: 'За неделю',
                        onClick(picker) {
                            const end = new Date();
                            const start = new Date();
                            start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
                            picker.$emit('pick', [start, end]);
                        }
                    }, {
                        text: 'За месяц',
                        onClick(picker) {
                            const end = new Date();
                            const start = new Date();
                            start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
                            picker.$emit('pick', [start, end]);
                        }
                    }, {
                        text: 'За 3 месяца',
                        onClick(picker) {
                            const end = new Date();
                            const start = new Date();
                            start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
                            picker.$emit('pick', [start, end]);
                        }
                    }]
                },
                value: ''
            }
        }
    }
</script>
