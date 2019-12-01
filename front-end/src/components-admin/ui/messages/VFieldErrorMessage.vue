<template>
    <div class="danger text_small-sz pt-7 pl-6">
        {{ message }}
    </div>
</template>

<script>
    export default {
        name: "VFieldErrorMessage",
        props: {
            message: {
                required: true
            }
        }
    }
</script>
