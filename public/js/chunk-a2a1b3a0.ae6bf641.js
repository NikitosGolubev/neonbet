(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-a2a1b3a0"],{8997:function(e,t,a){"use strict";var r=a("c49f"),i=a.n(r);i.a},c49f:function(e,t,a){},e096:function(e,t,a){"use strict";function r(){return r=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var a=arguments[t];for(var r in a)Object.prototype.hasOwnProperty.call(a,r)&&(e[r]=a[r])}return e},r.apply(this,arguments)}var i=function(){var e=!1,t=[],a=function(a){if(!e){e=!0;for(var r=0,i=t.length;r<i;r++)t[r](a)}},r=function(a){e?a():t.push(a)},i={resolved:function(){return e},resolve:a,promise:{then:r}};return i};function s(){var e=i();return{notify:function(){e.resolve()},wait:function(){return e.promise},render:function(e,t,a){this.wait().then((function(){a(window.grecaptcha.render(e,t))}))},reset:function(e){"undefined"!==typeof e&&(this.assertLoaded(),this.wait().then((function(){return window.grecaptcha.reset(e)})))},execute:function(e){"undefined"!==typeof e&&(this.assertLoaded(),this.wait().then((function(){return window.grecaptcha.execute(e)})))},checkRecaptchaLoad:function(){window.hasOwnProperty("grecaptcha")&&window.grecaptcha.hasOwnProperty("render")&&this.notify()},assertLoaded:function(){if(!e.resolved())throw new Error("ReCAPTCHA has not been loaded")}}}var n=s();"undefined"!==typeof window&&(window.vueRecaptchaApiLoaded=n.notify);var c={name:"VueRecaptcha",props:{sitekey:{type:String,required:!0},theme:{type:String},badge:{type:String},type:{type:String},size:{type:String},tabindex:{type:String},loadRecaptchaScript:{type:Boolean,default:!1},recaptchaScriptId:{type:String,default:"__RECAPTCHA_SCRIPT"},recaptchaHost:{type:String,default:"www.google.com"}},beforeMount:function(){if(this.loadRecaptchaScript&&!document.getElementById(this.recaptchaScriptId)){var e=document.createElement("script");e.id=this.recaptchaScriptId,e.src="https://"+this.recaptchaHost+"/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit",e.async=!0,e.defer=!0,document.head.appendChild(e)}},mounted:function(){var e=this;n.checkRecaptchaLoad();var t=r({},this.$props,{callback:this.emitVerify,"expired-callback":this.emitExpired}),a=this.$slots["default"]?this.$el.children[0]:this.$el;n.render(a,t,(function(t){e.$widgetId=t,e.$emit("render",t)}))},methods:{reset:function(){n.reset(this.$widgetId)},execute:function(){n.execute(this.$widgetId)},emitVerify:function(e){this.$emit("verify",e)},emitExpired:function(){this.$emit("expired")}},render:function(e){return e("div",{},this.$slots["default"])}};t["a"]=c},f9e5:function(e,t,a){"use strict";a.r(t);var r=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("panel-layout",{attrs:{"include-upper-carousel":!1,breadcrumbs:e.breadcrumbs}},[a("panel-text-header",[a("h2",[e._v("Регистрация:")])]),a("section",{staticClass:"user-registration"},[a("panel-section",[a("register-form")],1)],1)],1)},i=[],s=a("2702"),n=a("eba4"),c=a("fa8b"),l=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("form",[a("div",{staticClass:"row user-registration__form-fields"},[a("div",{staticClass:"col-xs-12 col-md-6 user-registration__form-fields_left"},[a("div",{staticClass:"field-group"},[e._m(0),a("v-field-secondary",{attrs:{id:"nickname",name:"nickname",placeholder:"Ваш ник..."}})],1),a("div",{staticClass:"field-group"},[e._m(1),a("v-field-secondary",{attrs:{id:"email",name:"email",placeholder:"email@email.email"}})],1),a("div",{staticClass:"field-group"},[e._m(2),a("v-field-secondary",{attrs:{"error-message":"Это поле с ошибкой!",id:"fullname",name:"fullname",placeholder:"Иванов Иван Иванович"}})],1)]),a("div",{staticClass:"col-xs-12 col-md-6 user-registration__form-fields_right"},[a("div",{staticClass:"field-group"},[e._m(3),a("v-field-secondary",{attrs:{id:"birthdate",name:"birthdate",placeholder:"dd.mm.yyyy"}})],1),a("div",{staticClass:"field-group"},[e._m(4),a("v-field-secondary",{attrs:{id:"password",type:"password",name:"password",placeholder:"> 8 символов, буквы и цифры"}})],1),a("div",{staticClass:"field-group"},[e._m(5),a("v-field-secondary",{attrs:{id:"password_repeat",type:"password",name:"password_repeat"}})],1)])]),a("div",{staticClass:"centered-captcha-container"},[a("vue-recaptcha",{staticClass:"recaptcha",attrs:{loadRecaptchaScript:!0,sitekey:"6LcmqrQUAAAAAJQE9hj7sjZa0baRxkOjxAzsQIqG"}})],1),a("div",{staticClass:"user-registration__form-utils"},[a("div",{staticClass:"user-registration__util"},[a("v-button-outline-gradient-fillable",[e._v("\n                Зарегистрироваться\n            ")])],1),e._m(6)])])},o=[function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("label",{staticClass:"field-group__label",attrs:{for:"nickname"}},[e._v("\n                    Nickname:"),a("span",{staticClass:"primary-light"},[e._v("*")])])},function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("label",{staticClass:"field-group__label",attrs:{for:"email"}},[e._v("\n                    E-mail:"),a("span",{staticClass:"primary-light"},[e._v("*")])])},function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("label",{staticClass:"field-group__label",attrs:{for:"fullname"}},[e._v("\n                    ФИО:"),a("span",{staticClass:"primary-light"},[e._v("*")])])},function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("label",{staticClass:"field-group__label",attrs:{for:"birthdate"}},[e._v("\n                    Дата рождения:"),a("span",{staticClass:"primary-light"},[e._v("*")])])},function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("label",{staticClass:"field-group__label",attrs:{for:"password"}},[e._v("\n                    Пароль:"),a("span",{staticClass:"primary-light"},[e._v("*")])])},function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("label",{staticClass:"field-group__label",attrs:{for:"password_repeat"}},[e._v("\n                    Повторите пароль:"),a("span",{staticClass:"primary-light"},[e._v("*")])])},function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"user-registration__util"},[a("a",{staticClass:"link link_primary-gradient",attrs:{href:"#"}},[e._v("Забыли пароль?")])])}],d=a("e096"),u=a("f3ae"),p=a("e395"),f={name:"RegisterForm",components:{VButtonOutlineGradientFillable:p["a"],VFieldSecondary:u["a"],VueRecaptcha:d["a"]}},h=f,m=a("2877"),_=Object(m["a"])(h,l,o,!1,null,null,null),v=_.exports,g={name:"Register",components:{RegisterForm:v,PanelSection:c["a"],PanelTextHeader:n["a"],PanelLayout:s["a"]},data:function(){return{breadcrumbs:[{name:"Главная"},{name:"Регистрация"}]}}},y=g,w=(a("8997"),Object(m["a"])(y,r,i,!1,null,null,null));t["default"]=w.exports}}]);
//# sourceMappingURL=chunk-a2a1b3a0.ae6bf641.js.map