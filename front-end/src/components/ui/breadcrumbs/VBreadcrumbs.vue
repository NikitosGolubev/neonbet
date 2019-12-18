<template>
    <ul class="breadcrumbs">
        <template v-for="(page, index) in data">
            <li class="breadcrumbs__item">
                <router-link :to="getPageNavLink(page)" v-if="isNotCurrent(index)">
                    <span class="breadcrumbs__link link_default" :class="rootClasses(index)">
                        {{page.name}}
                    </span>
                </router-link>
                <span v-else class="breadcrumbs_current">{{ page.name }}</span>
            </li>

            <li v-if="isNotCurrent(index)" class="breadcrumbs__item">
                <span class="breadcrumbs__separator">&rsaquo;</span>
            </li>
        </template>
    </ul>
</template>

<script>
    export default {
        name: "VBreadcrumbs",
        props: {
            data: {
                type: Array,
                required: true
            }
        },
        methods: {
            isNotCurrent(index) {
                const lastElemIndex = this.data.length - 1;

                return index !== lastElemIndex;
            },

            rootClasses(index) {
                if (index === 0) {
                    return ['breadcrumbs_root'];
                }

                return [];
            },

            getPageNavLink(page) {
                if (page.routeName) return {name: page.routeName};
                if (page.href) return page.href;
                return '#';
            }
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
