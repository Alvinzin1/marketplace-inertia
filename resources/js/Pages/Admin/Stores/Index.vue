<template>
    <div>
        <Head title="Marketplace - Stores"></Head>
        <section class="body-font container mx-auto px-4">
            <table class="min-w-full bg-white shadow-lg rounded-xl text-center">
                <!-- Cabeçalho da tabela -->
                <thead>
                    <tr class="bg-blue-gray-100 text-gray-700">
                        <th class="py-3 px-4">Id</th>
                        <th class="py-3 px-4">Nome</th>
                        <th class="py-3 px-4">Telefone</th>
                    </tr>
                </thead>
                <!-- Corpo da tabela -->
                <tbody class="text-blue-gray-900">
                    <!-- Loop através dos stores -->
                    <tr v-for="store in stores.data" :key="store.id" class="border-b border-blue-gray-200">
                        <td class="py-3 px-4">{{ store.id }}</td>
                        <td class="py-3 px-4">{{ store.name }}</td>
                        <td class="py-3 px-4">{{ store.phone }}</td>
                    </tr>
                </tbody>
            </table>
        </section>
        <!-- Controles de paginação -->
        <Pagination :data="stores" @page-change="fetchData"></Pagination>
    </div>
</template>

<script>
import { Head } from '@inertiajs/vue3';
import Pagination from '@/components/Pagination.vue'; // Supondo que você tenha um componente de paginação

export default {
    props: {
        stores: Object // Ajuste o tipo da prop para um objeto, pois é o que o método paginate do Laravel retorna
    },
    components: {
        Head,
        Pagination
    },
    methods: {
        fetchData(page) {
            // Use o método `visit` do Inertia para carregar os dados da página específica
            this.$inertia.visit(this.$page.url, { data: { page: page } });
        }
    }
}
</script>
