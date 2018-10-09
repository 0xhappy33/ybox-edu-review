<template>
    <main class="container content-result-search">
        <div class="row search-content">
            <section class="col-md-7">
                <h1>Đây là kết quả từ tìm kiếm của bạn "John Anshan"</h1>
                <div class="row item-result-filter">
                    <button type="button" class="btn btn-outline-dark">THEO VỊ TRÍ</button>
                    <button type="button" class="btn btn-outline-dark">THEO TRUNG TÂM</button>
                </div>
                <div class="row results">
                    <ItemResult/>
                    <ItemResult/>
                    <ItemResult/>
                </div>
            </section>
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
    .content-result-search {
        margin-top: 100px;
        font-family: Roboto,serif;
    }

    .search-content section h1 {
        font-size: 24px;
    }
    .results {
        margin-top: 20px;
    }
</style>