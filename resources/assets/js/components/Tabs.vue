<template>
	<div class="panel">
		<ul class="nav nav-tabs">
		  <li class="active"><a href="#" @click.prevent="onSelectTab(url.student)">Students</a></li>
		  <li><a href="#" @click.prevent="onSelectTab(url.teacher)">Teachers</a></li>
		  <li><a href="#" @click.prevent="onSelectTab(url.guardian)">Guardians</a></li>
		</ul>
	</div>
</template>
<script>
	// import Tab from './partials/Tab.vue'
	import TabItem from './partials/TabItem.vue'

	export default {
		components: {
			TabItem
		},

		data() {
			return {
				url: {
					student: '/student',
					teacher: '/teacher',
					guardian: '/guardian'
				}
			}
		},

		methods: {
			onSelectTab(url) {
				alert(url);
			}
		}
	}
</script>
<style></style>