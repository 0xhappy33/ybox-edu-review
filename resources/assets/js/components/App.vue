<template>
	<div id="root">
		<Header></Header>

		<router-view/>

		<Footer></Footer>
	</div>
</template>

<script>
    import Header from './layouts/headerLight.vue';
    import Footer from './layouts/footerLight.vue';
    export default {
        name: 'main-app',
		components: {
			Header,
			Footer,
		}
    }
</script>

