@extends('docs.layouts.app')

@section('content')
    <div class="lazy-container-sm">

        <div class="flex flex-col gap-5">
            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Basic</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        @include('docs.display.button.default')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/button/default.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Secondary</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>
                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        @include('docs.display.button.secondary')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/button/secondary.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Destructive</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        @include('docs.display.button.destructive')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/button/destructive.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Outline</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        @include('docs.display.button.outline')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/button/outline.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Ghost</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        @include('docs.display.button.ghost')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/button/ghost.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Link</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        @include('docs.display.button.link')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/button/link.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="text-xs">add attribute href to button</div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Icon</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        @include('docs.display.button.icon')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/button/icon.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div class="p-6 flex flex-col gap-5">
                    <div class="text-xl font-semibold">Custom</div>
                    <div x-data="{ tab: 'preview' }">
                        <div class="flex items-center justify-start text-sm mb-5 text-cat-500">
                            <button type="button" x-on:click="tab = 'preview'" :class="{ 'active': tab === 'preview' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Preview</button>
                            <button type="button" x-on:click="tab = 'code'" :class="{ 'active': tab === 'code' }" class="px-3 py-1.5 border-b-2 border-transparent [&.active]:text-cat-800 [&.active]:dark:text-white [&.active]:border-cat-800 [&.active]:dark:border-white cursor-pointer">Code</button>
                        </div>

                        <div>
                            <div x-show="tab === 'preview'">
                                <div class="rounded-xl px-3 py-6 bg-cat-200 dark:bg-cat-750">
                                    <div class="flex flex-wrap gap-3 justify-center">
                                        @include('docs.display.button.custom')
                                    </div>
                                </div>
                            </div>

                            <div x-show="tab === 'code'" x-cloak>
                                @php
                                    $file = resource_path('views/docs/display/button/custom.blade.php');
                                    $content = file_exists($file) ? file_get_contents($file) : 'File not found';
                                @endphp
                                <pre class="text-[0.9rem]"><code class="language-html">{{ $content }}</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>

        </div>

    </div>
@endsection

@push('head')
    <link rel="stylesheet" href="{{ asset('lazy/highlight/lazy.css') }}">
@endpush

@push('body')
    <script src="{{ asset('lazy/highlight/highlight.min.js') }}"></script>
    <script src="{{ asset('lazy/highlight/lazy.plugin.js') }}"></script>
    <script>
        hljs.addPlugin(new HljsLazyPlugin());
        hljs.highlightAll();
    </script>
@endpush
