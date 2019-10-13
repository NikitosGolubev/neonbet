<template>
    <a :href="url" target="_blank">
        <div class="social-gradient-circle_wrap">
            <div class="social-gradient-circle">
                <slot></slot>
            </div>
            <div class="social-gradient-circle_border"></div>
        </div>
    </a>
</template>

<script>
    export default {
        name: "SocialMediaItem",
        props: {
            url: {
                type: String,
                required: true
            }
        }
    }
</script>

