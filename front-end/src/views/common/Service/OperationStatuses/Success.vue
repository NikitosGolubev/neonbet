<template>
    <operation-status theme="success">
        success
        <template #message>
            Ваш запрос на восстановление пароля обработан.
            Сообщение на вашу электронную почту должно поступить в течении 5 - 10 минут.
            Если сообщение не пришло, повторите отправку.
        </template>
    </operation-status>
</template>

<script>
    import OperationStatus from "../../../../layouts/ServiceLayout/OperationStatus/OperationStatus";
    export default {
        name: "Success",
        components: {OperationStatus}
    }
</script>
