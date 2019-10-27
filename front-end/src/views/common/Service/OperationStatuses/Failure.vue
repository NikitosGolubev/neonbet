<template>
    <operation-status-layout theme="danger">
        failure
        <template #message>
            Извините, но кажется что-то пошло не так :(
        </template>
    </operation-status-layout>
</template>

<script>
    import OperationStatusLayout from "../../../../layouts/ServiceLayout/OperationStatusLayout/OperationStatusLayout";
    export default {
        name: "Failure",
        components: {OperationStatusLayout}
    }
</script>
