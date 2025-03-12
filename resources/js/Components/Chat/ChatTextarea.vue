<script setup>
import { ref } from 'vue'
const emit = defineEmits()
const model = ref('')
const shift = ref(false)
const handleEnter = () => {
    if (shift.value && model.value.length) {
        model.value += '\n'
        return
    }
    if (model.value.length) {
        emit('valid', model.value)
        model.value = ''

        handleTypingStopped()
    }
}

let typingTimeout = null;
const handleTyping = () => {
    emit('typing', true)
    clearTimeout(typingTimeout)
    typingTimeout = setTimeout(handleTypingStopped, 3000)
}

const handleTypingStopped = () => {
    emit('typing', false)
}
</script>
<template>
    <textarea 
        id="body" 
        rows="4" 
        v-model="model"
        class="rounded-md border-gray-200 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" 
        v-on:keydown.enter.prevent="handleEnter"
        v-on:keydown.shift="shift = true"
        v-on:keyup="shift = false"
        v-on:keydown="handleTyping" 
    />
</template>