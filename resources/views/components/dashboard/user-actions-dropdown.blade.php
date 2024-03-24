@props([
    'align' => 'right',
    'user',
])

<div class="relative inline-flex" x-data="{ open: false }">
    <button class="inline-flex justify-center items-center group" aria-haspopup="true" @click.prevent="open = !open"
        :aria-expanded="open">
        {{-- <img class="w-8 h-8 rounded-full" src="{{ asset('images/auth-image.jpg') }}" width="32" height="32" alt="Badmous" /> --}}
        <div class="flex items-center truncate">
            <span
                class="truncate ml-2 text-sm font-medium dark:text-slate-300 group-hover:text-slate-800 dark:group-hover:text-slate-200">{{ 'Badmous' }}</span>
            <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-slate-400" viewBox="0 0 12 12">
                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
            </svg>
        </div>
    </button>
    <div class="origin-top-right z-10 absolute top-full min-w-44 bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 py-1.5 rounded shadow-lg overflow-hidden mt-1 {{ $align === 'right' ? 'right-0' : 'left-0' }}"
        @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
        x-transition:enter="transition ease-out duration-200 transform"
        x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" x-cloak>
        <div class="pt-0.5 pb-2 px-3 mb-1 border-b border-slate-200 dark:border-slate-700">
            <div class="font-medium text-slate-800 dark:text-slate-100">{{ 'Actions' }}</div>
            {{-- <div class="text-xs text-slate-500 dark:text-slate-400 italic">{{ Auth::user()->roles[0]->name }}</div> --}}
        </div>
        <ul>
            {{-- <li>
                <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400 flex items-center py-1 px-3"
                    href="{{ route('profile.show') }}" @click="open = false" @focus="open = true"
                    @focusout="open = false">Settings</a>
            </li> --}}
            @if (!$user->email_verified_at)
                <li>
                    <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 dark:hover:text-indigo-400 flex items-center py-1 px-3"
                        href="{{ route('user.verify', ['id' => $user->id]) }}" @click="open = false" @focus="open = true"
                        @focusout="open = false">activate</a>
                </li>
            @endif
        </ul>
    </div>
</div>