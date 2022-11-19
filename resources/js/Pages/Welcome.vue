<script setup>
import NavSection from '@/Sections/NavSection.vue';
import FooterSection from '@/Sections/FooterSection.vue';
import BlockSection from '@/Sections/BlockSection.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import HeroSection from '@/Sections/HeroSection.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>

    <Head title="Welcome" />
    <NavSection />
    <HeroSection />
    <BlockSection />
    <FooterSection />
</template>
