<template>
    <el-header>
        <el-row align="middle" type="flex">
            <el-col>
                <a href="#">
                    <v-admin-logo />
                </a>
            </el-col>

            <el-col>
                <el-row type="flex" justify="end" align="middle" :gutter="20">
                    <div class="m-6">
                        <main-header-locale-picker />
                    </div>

                    <div class="m-6">
                        <main-header-timezone-picker />
                    </div>

                    <div class="m-6">
                        <el-link class="link_default el-icon-switch-button text_super-big-sz" :underline="false" type="primary" />
                    </div>
                </el-row>
            </el-col>
        </el-row>
    </el-header>
</template>

<script>
    import VAdminLogo from "../ui/logos/VAdminLogo";
    import MainHeaderLocalePicker from "./components/MainHeaderLocalePicker";
    import MainHeaderTimezonePicker from "./components/MainHeaderTimezonePicker";
    export default {
        name: "MainHeader",
        components: {MainHeaderTimezonePicker, MainHeaderLocalePicker, VAdminLogo},
        data() {
            return {
                locale: 'RU',
                timezone: 'UTC'
            }
        }
    }
</script>
