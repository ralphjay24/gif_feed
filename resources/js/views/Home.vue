<template>
  <div class="container">
    <gif :data="gifs" />
  </div>
</template>

<script>
  import Gif from '../components/GifComponent';
  export default {
    components: {
      Gif,
    },
    data: () => ({
      gifs: []
    }),
    created() {
      this.$http.get("/api/gif").then((response) => {
        console.log(response);
        this.gifs = response.data.data;
      });
    }
  }
</script>
