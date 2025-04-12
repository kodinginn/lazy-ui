<div class="relative bg-cat-100 dark:bg-cat-700/5 w-full rounded-t-xl">
    <div class="flex gap-x-1 items-center justify-end px-2 py-1 text-cat-500">
        <x-button size="icon" variant="ghost" class="size-7 rounded-full" x-on:click="toggleFullscreen()">
            <svg class="size-4 [.lazy-dialog-wrapper.fullscreen_&]:hidden block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M448 64c0-17.7-14.3-32-32-32H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h64v64c0 17.7 14.3 32 32 32s32-14.3 32-32V64zM32 320c-17.7 0-32 14.3-32 32v96c0 17.7 14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H64V352c0-17.7-14.3-32-32-32z"/><path fill="currentColor" class="fa-primary" d="M0 64C0 46.3 14.3 32 32 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H64v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V64zM416 320c17.7 0 32 14.3 32 32v96c0 17.7-14.3 32-32 32H320c-17.7 0-32-14.3-32-32s14.3-32 32-32h64V352c0-17.7 14.3-32 32-32z"/></svg>
            <svg class="size-4 [.lazy-dialog-wrapper.fullscreen_&]:block hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><defs><style>.fa-secondary{opacity:.4}</style></defs><path fill="currentColor" class="fa-secondary" d="M160 448c0 17.7-14.3 32-32 32s-32-14.3-32-32V384H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h96c17.7 0 32 14.3 32 32v96zM320 192c-17.7 0-32-14.3-32-32V64c0-17.7 14.3-32 32-32s32 14.3 32 32v64h64c17.7 0 32 14.3 32 32s-14.3 32-32 32H320z"/><path fill="currentColor" class="fa-primary" d="M160 64c0-17.7-14.3-32-32-32s-32 14.3-32 32v64H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32V64zM320 320c-17.7 0-32 14.3-32 32v96c0 17.7 14.3 32 32 32s32-14.3 32-32V384h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H320z"/></svg>
        </x-button>
        <x-button size="icon" variant="ghost" class="size-7 rounded-full" x-dialog:close >
            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M345 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-119 119L73 103c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l119 119L39 375c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l119-119L311 409c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-119-119L345 137z"/></svg>
        </x-button>
    </div>
</div>
