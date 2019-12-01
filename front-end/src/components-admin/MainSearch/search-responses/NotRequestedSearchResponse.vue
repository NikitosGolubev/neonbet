<template>
    <el-row class="search-response">
        <div class="search-response__picture">
            <img class="search-response__picture_img" alt="Поисковый запрос не сделан" :src="require('@/assets/img/characters.svg')" />
        </div>
        <div class="search-response__sign h1">
            Поисковый запрос не сделан
        </div>
    </el-row>
</template>

<script>
    import DataReceiverInterface from '../../../shared/mixins-props-interfaces/data-receiver-interface';

    export default {
        name: "NotRequestedSearchResponse",
        mixins: [DataReceiverInterface]
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
