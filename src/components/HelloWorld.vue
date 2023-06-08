<script setup>
import { ref } from 'vue'

defineProps({
  msg: String,
})

</script>

<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
  </div>  
</template>


