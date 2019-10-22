<template>
    <td class="default-table__cell">
        <div class="default-table__content">
            <span class="alternative">{{ coefficient }}</span>
        </div>
    </td>
</template>

<script>
    export default {
        name: "UserBetLayoutEventCoef",
        props: {
            coefficient: {
                required: true
            }
        }
    }
</script>
