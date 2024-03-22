<template>
    <nav aria-label="Pagination">
        <ul class="pagination flex justify-center mt-6 gap-4">
            <!-- Botão "Anterior" -->
            <li :class="{ 'pointer-events-none opacity-50': !data.prev_page_url }">
                <a @click.prevent="changePage(data.current_page - 1)" aria-label="Previous"
                   class="page-link inline-flex items-center px-3 py-1 border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 rounded-md">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <!-- Números das páginas -->
            <li v-for="pageNumber in getPagesArray()" :key="pageNumber"
                :class="{ 'bg-blue-500 text-white': pageNumber === data.current_page }">
                <a @click.prevent="changePage(pageNumber)"
                   class="page-link inline-flex items-center px-3 py-1 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 rounded-md">{{ pageNumber }}</a>
            </li>
            <!-- Botão "Próximo" -->
            <li :class="{ 'pointer-events-none opacity-50': !data.next_page_url }">
                <a @click.prevent="changePage(data.current_page + 1)" aria-label="Next"
                   class="page-link inline-flex items-center px-3 py-1 border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 rounded-md">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
    props: {
        data: Object // Objeto contendo informações sobre a paginação
    },
    methods: {
        changePage(page) {
            if (page >= 1 && page <= this.data.last_page) {
                this.$emit('page-change', page);
            }
        },
        getPagesArray() {
            if (!this.data) return [];
            const from = Math.max(1, this.data.current_page - 2);
            const to = Math.min(this.data.last_page, this.data.current_page + 2);
            const pagesArray = [];

            for (let i = from; i <= to; i++) {
                pagesArray.push(i);
            }

            return pagesArray;
        }
    }
}
</script>
