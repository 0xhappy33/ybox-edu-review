<template>
	<div id="root">
		<Header/>

		<router-view/>

		<Footer/>
	</div>
</template>

<script>
    import Header from './layouts/HeaderLight.vue';
	 import Footer from './layouts/FooterLight.vue';
    export default {
        name: 'main-app',
		components: {
			Header,
			Footer,
		}
    }
</script>

