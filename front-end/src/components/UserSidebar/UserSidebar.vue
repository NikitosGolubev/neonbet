<template>
    <div>
        <div @click="adjustSidebar" v-if="isSidebarActive" class="responsive-sidebar_bg"></div>

        <transition name="slide-side">
            <section v-if="isSidebarActive" class="responsive-sidebar">
                <main-scroll>
                    <div class="responsive-sidebar__content">
                        <div>
                            <div class="responsive-sidebar__close">
                                <user-sidebar-burger />
                            </div>

                            <user-sidebar-profile />

                            <user-sidebar-nav />
                        </div>

                        <footer class="responsive-sidebar__footer">
                            <social-media />
                        </footer>
                    </div>
                </main-scroll>
            </section>
        </transition>
    </div>
</template>

<script>
    // Mixins
    import adjustSidebar from './mixins/adjust-sidebar';

    // Components
    import SocialMedia from "../SocialMedia/SocialMedia";
    import UserSidebarBurger from "./UserSidebarBurger";
    import UserProfile from "../UserProfile/UserProfile";
    import UserProfileContent from "../UserProfile/UserProfileContent";
    import UserProfileNav from "../UserProfile/UserProfileNav";
    import UserSidebarNav from "./UserSidebarNav";
    import UserSidebarProfile from "./UserSidebarProfile";


    export default {
        name: "UserSidebar",
        mixins: [adjustSidebar],
        components: {
            UserSidebarProfile,
            UserSidebarNav,
            UserSidebarBurger,
            SocialMedia,
            UserProfile,
            UserProfileContent,
            UserProfileNav
        }
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
