<template>
    <div class="autocomplete">
        <input type="text"
               class="search-input"
               title=""
               name="search"
               v-model="search"
               @input="onChange"
               @keydown.down="onArrowDown"
               @keydown.up="onArrowUp"
               @keydown.enter="onEnter"
        >
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
    .search-input {
        font-weight: 700;
        color: #191919;
        width: 100%;
        outline: none;
        border-radius: 3px;
        background: #FFF;
        box-shadow: 1px 2px 5px -2px rgba(1,1,1,.1), 0 2px 7px 0 rgba(22,65,89,.03);
        font-size: 1rem;
        line-height: 1.5rem;
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