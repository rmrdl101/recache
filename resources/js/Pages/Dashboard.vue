<template>
  <div class="p-6 grid grid-cols-3 gap-6">
    <div v-for="item in items" :key="item.id" class="bg-white shadow rounded p-4">
      <img :src="item.thumbnail" alt="" class="mb-2 w-full h-32 object-cover rounded">
      <h3 class="text-lg font-bold">{{ item.title }}</h3>
      <p class="text-gray-600 text-sm">{{ item.description }}</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      items: [
        { id: 1, thumbnail: '/recache/images/thumb1.jpg', title: 'Module 1', description: 'Short description 1' },
        { id: 2, thumbnail: '/recache/images/thumb2.jpg', title: 'Module 2', description: 'Short description 2' },
        { id: 3, thumbnail: '/recache/images/thumb3.jpg', title: 'Module 3', description: 'Short description 3' },
      ],
    };
  },
};
</script>