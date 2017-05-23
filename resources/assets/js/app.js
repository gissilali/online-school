
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('student-registration-form', {
	data() {
		return {
			admissionNumber: '',
			admissionValid: false,
			error: false,
		}
	},
	methods: {
		checkAdmission() {
			console.log(this.admissionNumber);
			var regex = /^[a-zA-Z]{3}\/(\d+)(\/)([0-9]{2})/;
			if (regex.test(this.admissionNumber)) {
				this.admissionValid = true;
			} else {
				this.admissionValid = false;
			}
		},

		clearErrors() {
			this.error = false
		}
	}
});
Vue.component('teacher-registration-form', {
	data() {
		return {
			employeeNumber: ''
		}
	},
});
Vue.component('tabs', require('./components/Tabs.vue'));
Vue.component('tab', require('./components/partials/Tab.vue'));
Vue.component('tabitem', require('./components/partials/TabItem.vue'));

const app = new Vue({
    el: '#app'
});
