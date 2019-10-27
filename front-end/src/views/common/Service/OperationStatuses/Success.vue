<template>
    <operation-status-layout theme="success">
        success
        <template #message>
            Ваш запрос на восстановление пароля обработан.
            Сообщение на вашу электронную почту должно поступить в течении 5 - 10 минут.
            Если сообщение не пришло, повторите отправку.
        </template>
    </operation-status-layout>
</template>

<script>
    import OperationStatusLayout from "../../../../layouts/ServiceLayout/OperationStatusLayout/OperationStatusLayout";
    export default {
        name: "Success",
        components: {OperationStatusLayout}
    }
</script>
