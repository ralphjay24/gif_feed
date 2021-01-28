<template>
  <div class="justify-content-center">
    <div v-if="data == []">
      No results found.
    </div>
    <div class="card mb-3" v-else v-for="(val, i) in data" :key="i">
      <img class="card-img-top" :src="data.embed_url" alt="GIF">
      <div class="card-body">
        <h5 class="card-title">{{ data.title }}</h5>
        <p class="card-text"><small class="text-muted">Created: {{ data.created_datetime }}</small></p>
        <p class="card-text"><small class="text-muted">Updated: {{ data.updated_datetime }}</small></p>
        <p class="card-text"><small class="text-muted">Trending: {{ data.trending_datetime }}</small></p>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: {
      data: {
        type: Array,
        default: function() {
          return []
        }
      },
    },
  }
</script>
