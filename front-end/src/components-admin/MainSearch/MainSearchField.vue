<template>
    <el-input
            @input.native="valueChanged($event.target.value)"
            @clear="valueChanged('')"
            :value="value"
            placeholder="Поиск..."
            clearable
    />
</template>

<script>
    import CustomVModelMixin from '../../shared/mixins/custom-v-model';

    export default {
        name: "MainSearchField",
        mixins: [CustomVModelMixin]
    }
</script>
