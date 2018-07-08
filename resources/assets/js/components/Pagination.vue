<template>
<div>
    <div class="pagination">
        <button class="btn btn-default" @click="fetchPaginateUsersFn(pagination.prev_page_url)" :disabled="!pagination.prev_page_url">Previos</button>
    </div>
    <span>Page {{pagination.current_page}} of {{pagination.last_page}}</span>
    <div class="pagination">
        <button class="btn btn-default" @click="fetchPaginateUsersFn(pagination.next_page_url)" :disabled="!pagination.next_page_url">Next</button>
    </div>
</div>
</template>

<script>
export default {
     props: ['pagination', 'fetchPaginateUsersFn']
}
</script>

<style>

</style>
