<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between gap-4">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('My Tasks') }}
                </h2>
                <p class="mt-1 text-sm text-gray-500">
                    Track and manage work across your team.
                </p>
            </div>
            <div class="hidden sm:flex items-center -space-x-2">
                @php
                    $people = [
                        ['name' => 'Dorye', 'initials' => 'D'],
                        ['name' => 'Alex', 'initials' => 'A'],
                        ['name' => 'Sam', 'initials' => 'S'],
                        ['name' => 'Mia', 'initials' => 'M'],
                    ];
                @endphp
                @foreach ($people as $person)
                    <span
                        title="{{ $person['name'] }}"
                        class="inline-flex h-9 w-9 items-center justify-center rounded-full ring-2 ring-white bg-gradient-to-br from-indigo-500 to-purple-500 text-white text-xs font-semibold"
                    >
                        {{ $person['initials'] }}
                    </span>
                @endforeach
                <span class="ml-3 text-sm text-gray-500">+9</span>
            </div>
        </div>
    </x-slot>

    @php
        $columns = [
            [
                'key' => 'backlog',
                'title' => 'Backlog',
                'count' => 4,
                'cards' => [
                    [
                        'title' => 'Improve cards readability',
                        'badges' => [
                            ['label' => 'Feedback', 'classes' => 'bg-green-100 text-green-700 ring-green-200'],
                            ['label' => 'Bug', 'classes' => 'bg-red-100 text-red-700 ring-red-200'],
                        ],
                        'desc' => 'As a team lead, I want to use multiple lines.',
                        'meta' => ['comments' => 12, 'files' => 2, 'due' => '21/03/26'],
                        'assignees' => ['D', 'A'],
                        'accent' => 'from-indigo-500 to-violet-500',
                    ],
                    [
                        'title' => 'Project kickoff checklist',
                        'badges' => [
                            ['label' => 'Process', 'classes' => 'bg-blue-100 text-blue-700 ring-blue-200'],
                        ],
                        'desc' => 'Finalize scope, stakeholders, and milestones.',
                        'meta' => ['comments' => 3, 'files' => 1, 'due' => '22/03/26'],
                        'assignees' => ['S'],
                        'accent' => 'from-sky-500 to-blue-500',
                    ],
                ],
            ],
            [
                'key' => 'todo',
                'title' => 'To do',
                'count' => 4,
                'cards' => [
                    [
                        'title' => 'Improve cards readability',
                        'badges' => [
                            ['label' => 'Feedback', 'classes' => 'bg-green-100 text-green-700 ring-green-200'],
                        ],
                        'desc' => 'As a team lead, I want to use multiple lines.',
                        'meta' => ['comments' => 12, 'files' => 0, 'due' => '21/03/26'],
                        'assignees' => ['M', 'D'],
                        'accent' => 'from-fuchsia-500 to-pink-500',
                    ],
                    [
                        'title' => 'Define user roles',
                        'badges' => [
                            ['label' => 'Design System', 'classes' => 'bg-purple-100 text-purple-700 ring-purple-200'],
                            ['label' => 'API', 'classes' => 'bg-amber-100 text-amber-800 ring-amber-200'],
                        ],
                        'desc' => 'Admin, Manager, Staff permissions mapping.',
                        'meta' => ['comments' => 5, 'files' => 1, 'due' => '23/03/26'],
                        'assignees' => ['A'],
                        'accent' => 'from-amber-500 to-orange-500',
                    ],
                ],
            ],
            [
                'key' => 'inprogress',
                'title' => 'In progress',
                'count' => 2,
                'cards' => [
                    [
                        'title' => 'Weekly management report',
                        'badges' => [
                            ['label' => 'Ops', 'classes' => 'bg-slate-100 text-slate-700 ring-slate-200'],
                        ],
                        'desc' => 'Draft KPI summary and blockers for leadership.',
                        'meta' => ['comments' => 7, 'files' => 4, 'due' => '20/03/26'],
                        'assignees' => ['D', 'S'],
                        'accent' => 'from-emerald-500 to-teal-500',
                    ],
                ],
            ],
            [
                'key' => 'done',
                'title' => 'Done',
                'count' => 1,
                'cards' => [
                    [
                        'title' => 'Set up project workspace',
                        'badges' => [
                            ['label' => 'Setup', 'classes' => 'bg-gray-100 text-gray-700 ring-gray-200'],
                        ],
                        'desc' => 'Repository, environments, and initial docs.',
                        'meta' => ['comments' => 1, 'files' => 6, 'due' => '18/03/26'],
                        'assignees' => ['M'],
                        'accent' => 'from-gray-500 to-slate-500',
                    ],
                ],
            ],
        ];
    @endphp

    <div class="py-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-12 gap-6">
                <aside class="col-span-12 lg:col-span-3">
                    <div class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">
                        <div class="p-4 sm:p-5">
                            <div class="flex items-center gap-3">
                                <div class="h-10 w-10 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-500" aria-hidden="true"></div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900">Brees</p>
                                    <p class="text-xs text-gray-500">collab@brees.com</p>
                                </div>
                            </div>

                            <nav class="mt-6 space-y-1">
                                <a href="{{ route('dashboard') }}" class="flex items-center justify-between rounded-xl px-3 py-2 text-sm font-medium text-indigo-700 bg-indigo-50 ring-1 ring-indigo-100">
                                    <span class="flex items-center gap-2">
                                        <span class="h-2 w-2 rounded-full bg-indigo-500" aria-hidden="true"></span>
                                        Dashboard
                                    </span>
                                </a>
                                <a href="#" class="flex items-center justify-between rounded-xl px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    <span class="flex items-center gap-2">
                                        <span class="h-2 w-2 rounded-full bg-gray-300" aria-hidden="true"></span>
                                        Projects
                                    </span>
                                    <span class="text-xs text-gray-500">3</span>
                                </a>
                                <a href="#" class="flex items-center justify-between rounded-xl px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    <span class="flex items-center gap-2">
                                        <span class="h-2 w-2 rounded-full bg-gray-300" aria-hidden="true"></span>
                                        Tasks
                                    </span>
                                    <span class="text-xs text-gray-500">10</span>
                                </a>
                                <a href="#" class="flex items-center justify-between rounded-xl px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    <span class="flex items-center gap-2">
                                        <span class="h-2 w-2 rounded-full bg-gray-300" aria-hidden="true"></span>
                                        Messages
                                    </span>
                                </a>
                                <a href="#" class="flex items-center justify-between rounded-xl px-3 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                                    <span class="flex items-center gap-2">
                                        <span class="h-2 w-2 rounded-full bg-gray-300" aria-hidden="true"></span>
                                        Users
                                    </span>
                                </a>
                            </nav>

                            <div class="mt-6 rounded-xl bg-gray-50 p-4 ring-1 ring-gray-100">
                                <p class="text-xs font-semibold text-gray-700">Quick actions</p>
                                <div class="mt-3 flex flex-wrap gap-2">
                                    <button type="button" class="inline-flex items-center rounded-lg bg-white px-3 py-2 text-xs font-semibold text-gray-700 ring-1 ring-gray-200 hover:bg-gray-50">
                                        New task
                                    </button>
                                    <button type="button" class="inline-flex items-center rounded-lg bg-white px-3 py-2 text-xs font-semibold text-gray-700 ring-1 ring-gray-200 hover:bg-gray-50">
                                        New project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

                <section class="col-span-12 lg:col-span-9">
                    <div class="rounded-2xl bg-white shadow-sm ring-1 ring-gray-200">
                        <div class="border-b border-gray-200 p-4 sm:p-5">
                            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                                <div class="relative w-full sm:max-w-md">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3" aria-hidden="true">
                                        <svg class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 3a6 6 0 104.472 10.03l2.249 2.25a.75.75 0 101.06-1.06l-2.25-2.249A6 6 0 009 3zm-4.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <input
                                        type="text"
                                        placeholder="Search tasks"
                                        class="w-full rounded-xl border-gray-200 pl-10 text-sm focus:border-indigo-500 focus:ring-indigo-500"
                                    />
                                </div>
                                <div class="flex items-center gap-2">
                                    <button type="button" class="inline-flex items-center gap-2 rounded-xl bg-gray-50 px-3 py-2 text-sm font-semibold text-gray-700 ring-1 ring-gray-200 hover:bg-gray-100">
                                        Subtasks
                                        <svg class="h-4 w-4 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <button type="button" class="inline-flex items-center gap-2 rounded-xl bg-gray-50 px-3 py-2 text-sm font-semibold text-gray-700 ring-1 ring-gray-200 hover:bg-gray-100">
                                        Me
                                        <svg class="h-4 w-4 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                    <button type="button" class="inline-flex items-center gap-2 rounded-xl bg-gray-50 px-3 py-2 text-sm font-semibold text-gray-700 ring-1 ring-gray-200 hover:bg-gray-100">
                                        Assignees
                                        <svg class="h-4 w-4 text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.24 4.5a.75.75 0 01-1.08 0l-4.24-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="p-4 sm:p-5">
                            <div class="-mx-4 overflow-x-auto px-4">
                                <div class="min-w-[980px]">
                                    <div class="grid grid-cols-4 gap-4">
                                        @foreach ($columns as $column)
                                            <div class="rounded-2xl bg-gray-50 ring-1 ring-gray-200">
                                                <div class="flex items-center justify-between p-3">
                                                    <div class="flex items-center gap-2">
                                                        <p class="text-sm font-semibold text-gray-900">{{ $column['title'] }}</p>
                                                        <span class="inline-flex items-center rounded-full bg-white px-2 py-0.5 text-xs font-semibold text-gray-600 ring-1 ring-gray-200">
                                                            {{ $column['count'] }}
                                                        </span>
                                                    </div>
                                                    <button type="button" class="rounded-lg p-1 text-gray-400 hover:bg-white hover:text-gray-600" aria-label="Column actions">
                                                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                            <path d="M10 6a1.5 1.5 0 110-3 1.5 1.5 0 010 3zM10 11.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3zM10 17a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" />
                                                        </svg>
                                                    </button>
                                                </div>

                                                <div class="space-y-3 p-3">
                                                    @foreach ($column['cards'] as $card)
                                                        <article class="group rounded-2xl bg-white p-3 shadow-sm ring-1 ring-gray-200 hover:shadow-md transition">
                                                            <div class="flex items-start justify-between gap-3">
                                                                <div class="min-w-0">
                                                                    <div class="flex flex-wrap items-center gap-1.5">
                                                                        @foreach ($card['badges'] as $badge)
                                                                            <span class="inline-flex items-center rounded-full px-2 py-0.5 text-[11px] font-semibold ring-1 {{ $badge['classes'] }}">
                                                                                {{ $badge['label'] }}
                                                                            </span>
                                                                        @endforeach
                                                                    </div>
                                                                    <h3 class="mt-2 truncate text-sm font-semibold text-gray-900">
                                                                        {{ $card['title'] }}
                                                                    </h3>
                                                                </div>
                                                                <button type="button" class="opacity-0 group-hover:opacity-100 rounded-lg p-1 text-gray-400 hover:bg-gray-50 hover:text-gray-600" aria-label="Card actions">
                                                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                                        <path d="M10 6a1.5 1.5 0 110-3 1.5 1.5 0 010 3zM10 11.5a1.5 1.5 0 110-3 1.5 1.5 0 010 3zM10 17a1.5 1.5 0 110-3 1.5 1.5 0 010 3z" />
                                                                    </svg>
                                                                </button>
                                                            </div>

                                                            <p class="mt-2 text-sm text-gray-600 overflow-hidden">
                                                                {{ $card['desc'] }}
                                                            </p>

                                                            <div class="mt-3 rounded-xl bg-gradient-to-br {{ $card['accent'] }} p-[1px]">
                                                                <div class="rounded-[11px] bg-white/90 p-2">
                                                                    <div class="flex items-center justify-between text-xs text-gray-600">
                                                                        <div class="flex items-center gap-3">
                                                                            <span class="inline-flex items-center gap-1">
                                                                                <svg class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                                    <path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v9a2 2 0 01-2 2H7l-4 3v-3H4a2 2 0 01-2-2V5z" />
                                                                                </svg>
                                                                                {{ $card['meta']['comments'] }}
                                                                            </span>
                                                                            <span class="inline-flex items-center gap-1">
                                                                                <svg class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V9.414a2 2 0 00-.586-1.414l-3.414-3.414A2 2 0 0012.586 4H4zm8 1.5V8a1 1 0 001 1h3.5L12 4.5z" clip-rule="evenodd" />
                                                                                </svg>
                                                                                {{ $card['meta']['files'] }}
                                                                            </span>
                                                                        </div>
                                                                        <span class="font-semibold text-gray-700">
                                                                            {{ $card['meta']['due'] }}
                                                                        </span>
                                                                    </div>
                                                                    <div class="mt-2 flex items-center justify-between">
                                                                        <div class="flex -space-x-2">
                                                                            @foreach ($card['assignees'] as $initials)
                                                                                <span class="inline-flex h-7 w-7 items-center justify-center rounded-full ring-2 ring-white bg-gray-900 text-white text-[11px] font-semibold">
                                                                                    {{ $initials }}
                                                                                </span>
                                                                            @endforeach
                                                                        </div>
                                                                        <span class="text-[11px] font-semibold text-gray-500">
                                                                            #{{ strtoupper($column['key']) }}
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    @endforeach

                                                    <button type="button" class="w-full rounded-2xl border-2 border-dashed border-gray-200 bg-white/60 px-3 py-3 text-sm font-semibold text-gray-600 hover:bg-white">
                                                        + Add card
                                                    </button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
