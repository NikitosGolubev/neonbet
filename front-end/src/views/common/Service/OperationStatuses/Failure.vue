<template>
    <operation-status theme="danger">
        failure
        <template #message>
            Извините, но кажется что-то пошло не так :(
        </template>
    </operation-status>
</template>

<script>
    import OperationStatus from "../../../../layouts/ServiceLayout/OperationStatus/OperationStatus";
    export default {
        name: "Failure",
        components: {OperationStatus}
    }
</script>
