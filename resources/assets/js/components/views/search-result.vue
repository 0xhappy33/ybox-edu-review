<template>
    <main class="container content-result-search">
        <div class="row search-content">
            <section class="col-md-8">
                <h1>Kết quả từ tìm kiếm của bạn</h1>
                <div class="results">
                    <div class="row">
                        <ItemResult/>
                    </div>
                </div>
            </section>
            <div class="col-md-4 top-teacher-item-result">
            </div>
        </div>
    </main>
</template>

<script>
    import ItemResult from './item-result'
    export default {
        name: "search-result",
        components: { ItemResult },
        data () {

        },
    }
</script>

<style scoped>

</style>