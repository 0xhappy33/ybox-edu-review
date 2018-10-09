<template>
    <div class="autocomplete inner-addon left-addon">
        <i class="glyphicon glyphicon-search"></i>
        <input type="text"
               class="container search-input"
               placeholder="Tìm kiếm giáo viên"
               title=""
               name="search"
               v-model="search"
               @input="onChange"
               @keydown.down="onArrowDown"
               @keydown.up="onArrowUp"
               @keydown.enter="onEnter"
        >
        <button type="submit" class="btn button-search">TÌM KIẾM</button>
        <ul v-show="isOpen" class="autocomplete-results">
            <li
                class="loading"
                v-if="isLoading">
                Loading results...
            </li>
            <li v-for="(result, i) in results"
                :key="i"
                @click="setResult(result)"
                class="autocomplete-result"
                :class="{ 'is-active': i === arrowCounter }"
            >
                {{ result }}
            </li>
        </ul>
    </div>
</template>

<style scoped>
    .autocomplete {
        width: 100%;
        text-align: center;
    }
    .autocomplete-results {
        padding: 0;
        margin: 0;
        border: 1px solid #eeeeee;
        height: 120px;
        width: 100%;
        overflow: auto;
    }
    .autocomplete-result {
        list-style: none;
        text-align: left;
        padding: 4px 2px;
        cursor: pointer;
        width: 100%;
    }
    .autocomplete-result.is-active,
    .autocomplete-result:hover {
        background-color: #4AAE9B;
        color: white;
    }
    .inner-addon {
        position: relative;
    }
    .inner-addon i {
        position: absolute;
        padding: 27px 0 27px 24px;
        font-size: 15px;
        line-height: 15px;
        color: #eeeeee;
        pointer-events: none;
    }
    .search-input {
        font-weight: 700;
        color: #191919;
        width: 100%;
        border-radius: 3px;
        background: #fff;
        padding: 23px 72px 24px 48px;
        box-shadow: 1px 2px 5px -2px rgba(1,1,1,.1), 0 2px 7px 0 rgba(22,65,89,.03);
    }
    .button-search {
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 14px;
        font-size: 18px;
        background-color: #00b67a;
        color: #fff;
    }
</style>

<script>
    export default {
        name: "autocomplete",
        data () {
            return {
                isOpen: false,
                results: [],
                search: '',
                isLoading: false,
                arrowCounter: -1,
            };
        },
        props: {
            items: {
                type: Array,
                required: false,
                default: () => [],
            },
            isAsync: {
                type: Boolean,
                required: false,
                default: false,
            },
        },
        methods: {
            onChange() {
                // Let's warn the parent that a change was made
                this.$emit('input', this.search);
                // Is the data given by an outside ajax request?
                if (this.isAsync) {
                    this.isLoading = true;
                } else {
                    this.filterResults();
                    this.isOpen = true;
                }
            },
            filterResults() {
                this.results = this.items.filter(item => item.toLowerCase().indexOf(this.search.toLowerCase()) > -1);
            },
            setResult(result) {
                this.search = result;
                this.isOpen = false;
            },
            onArrowDown() {
                if (this.arrowCounter < this.results.length) {
                    this.arrowCounter = this.arrowCounter + 1;
                }
            },
            onArrowUp() {
                if (this.arrowCounter > 0) {
                    this.arrowCounter = this.arrowCounter - 1;
                }
            },
            onEnter() {
                this.search = this.results[this.arrowCounter];
                this.isOpen = false;
                this.arrowCounter = -1;
            },
            handleClickOutside(evt) {
                if (!this.$el.contains(evt.target)) {
                    this.isOpen = false;
                    this.arrowCounter = -1;
                }
            }
        },
        watch: {
            // Once the items content changes, it means the parent component
            // provided the needed data
            items: function(value, oldValue) {
                if (this.isAsync) {
                   this.results = value;
                   this.isOpen = true;
                   this.isLoading = false;
                }
            }
        },
        mounted() {
            document.addEventListener('click', this.handleClickOutside);
        },
        destroyed() {
            document.removeEventListener('click', this.handleClickOutside);
        }
    }
</script>