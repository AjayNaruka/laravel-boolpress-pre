<template>
  <div class="container">
    <h1>BLOG</h1>
    <div class="card-container">
      <div 
      v-for="(post,key) in posts"
      :key="key"
      class="card">Title: {{post.title}}</div>
    </div>
  </div>
</template>

<script>
export default {
  name:'Blog',
  data(){
    return{
      posts:[],
    }
  },
  created(){
    this.getPosts();
  },
  methods:{
    getPosts(){
      console.log('AXIOS');
      axios.get('http://127.0.0.1:8000/api/posts')
      .then(res => {
        this.posts=res.data;
        console.log(this.posts)
      })
      .catch(err => {
        console.error(err); 
      })
    }
  }
}
</script>

<style lang='scss'>
  @import '~bootstrap/scss/bootstrap';
</style>