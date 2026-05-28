

<div
    x-data="{ show: true }"
    x-init="setTimeout(() => show = false, 3000)"
    x-show="show"
    x-transition
    class="fixed top-6 left-1/2 -translate-x-1/2 z-50 flex items-center justify-between p-4 text-sm text-green-800 rounded-lg bg-green-50 shadow-lg min-w-[300px]"
    role="alert"
>
    {{ $message ?? "Message Success" }}

    <button
        @click="show = false"
        class="ml-4 text-lg leading-none"
    >
        &times;
    </button>
</div>