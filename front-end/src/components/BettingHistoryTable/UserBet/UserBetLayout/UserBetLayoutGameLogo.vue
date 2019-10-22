<template>
    <td class="default-table__cell">
        <div class="default-table__content">
            <div class="betting-history__game-logo" :style="`background-image: url(${logo});`"></div>
        </div>
    </td>
</template>

<script>
    export default {
        name: "UserBetLayoutGameLogo",
        props: {
            logo: {
                type: String,
                required: true
            }
        }
    }
</script>
