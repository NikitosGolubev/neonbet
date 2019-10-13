<template>
    <div class="socials">
        <social-media-item url="https://vk.com">
            <span class="vk"></span>
        </social-media-item>

        <social-media-item url="https://facebook.com">
            <span class="fb"></span>
        </social-media-item>

        <social-media-item url="https://instagram.com">
            <span class="inst"></span>
        </social-media-item>

        <social-media-item url="https://twitter.com">
            <span class="twitter"></span>
        </social-media-item>
    </div>
</template>

<script>
    import SocialMediaItem from "./SocialMediaItem";
    export default {
        name: "SocialMedia",
        components: {SocialMediaItem}
    }
</script>

<style lang="sass">
    @import "sass/main"
</style>
