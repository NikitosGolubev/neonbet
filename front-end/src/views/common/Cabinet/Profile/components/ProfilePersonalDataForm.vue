<template>
    <div class="user-profile__personal-data">
        <div class="row">
            <div class="user-profile__personal-data_left col-xs-12 col-md-6">
                <div class="user-profile__field-data">
                    <label class="field_label">ФИО:</label>
                    <editable-field>
                        <v-field-secondary name="email" v-model="user.fullname" />
                    </editable-field>
                </div>
                <div class="user-profile__field-data">
                    <label class="field_label">Ник:</label>
                    <editable-field>
                        <v-field-secondary name="nickname" v-model="user.nickname" />
                    </editable-field>
                </div>
            </div>
            <div class="user-profile__personal-data_right col-xs-12 col-md-6">
                <div class="user-profile__field-data">
                    <label class="field_label">E-mail:</label>
                    <v-field-secondary name="email" :is-disabled="true" :value="user.email" />
                </div>
                <div class="row">
                    <div class="user-profile__field-data user-profile__double-field col-xs-12 col-sm-6">
                        <label class="field_label">Дата рождения:</label>
                        <v-field-secondary name="birthdate" :is-disabled="true" :value="user.birthdate" />
                    </div>
                    <div class="user-profile__field-data user-profile__double-field col-xs-12 col-sm-6">
                        <label class="field_label">Дата регистрации:</label>
                        <v-field-secondary name="regdate" :is-disabled="true" :value="user.regdate" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import EditableField from "../../../../../components/EditableField/EditableField";
    import VField from "../../../../../components/ui/fields/VField";
    import VFieldSecondary from "../../../../../components/ui/fields/VFieldSecondary";
    export default {
        name: "ProfilePersonalDataForm",
        components: {VFieldSecondary, VField, EditableField},
        props: {
            user: {
                type: Object,
                required: true
            }
        }
    }
</script>
