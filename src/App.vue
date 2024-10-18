<template>
 <div>
    <HelloWorld />
    <Dashboard /> //copy
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import Dashboard from  './components/Dashboard.vue' //copy


  export default {
  components: {
    HelloWorld, 
    Dashboard //copy
  },
};
</script>

