<template>
    <div>
        <Head :title="title" />
        <slot />
    </div>
</template>

<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
const { title } = defineProps({
    title: { type: String, default: "My History" },
});
</script>
