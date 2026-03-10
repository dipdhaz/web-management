@php
    $columns = [
        [
            'title' => 'Backlog',
            'count' => 2,
            'cards' => [
                [
                    'title' => 'Improve cards readability',
                    'description' => 'As a team lead, I want to use multiple lines.',
                    'tag' => 'Feedback',
                    'tag_color' => 'bg-green-100 text-green-700 ring-green-200',
                    'due' => '21/03/26',
                ],
                [
                    'title' => 'Project kickoff checklist',
                    'description' => 'Finalize scope, stakeholders, and milestones.',
                    'tag' => 'Planning',
                    'tag_color' => 'bg-blue-100 text-blue-700 ring-blue-200',
                    'due' => '22/03/26',
                ],
            ],
        ],
        [
            'title' => 'To do',
            'count' => 2,
            'cards' => [
                [
                    'title' => 'Define user roles',
                    'description' => 'Admin, Manager, Staff permission mapping.',
                    'tag' => 'Design System',
                    'tag_color' => 'bg-purple-100 text-purple-700 ring-purple-200',
                    'due' => '23/03/26',
                ],
                [
                    'title' => 'Set up notifications',
                    'description' => 'Decide which events send email or in-app alerts.',
                    'tag' => 'Product',
                    'tag_color' => 'bg-amber-100 text-amber-800 ring-amber-200',
                    'due' => '24/03/26',
                ],
            ],
        ],
        [
            'title' => 'In progress',
            'count' => 1,
            'cards' => [
                [
                    'title' => 'Weekly management report',
                    'description' => 'Prepare KPI summary for leadership sync.',
                    'tag' => 'Ops',
                    'tag_color' => 'bg-slate-100 text-slate-700 ring-slate-200',
                    'due' => '20/03/26',
                ],
            ],
        ],
        [
            'title' => 'Done',
            'count' => 1,
            'cards' => [
                [
                    'title' => 'Create workspace',
                    'description' => 'Repository, environments, and initial docs ready.',
                    'tag' => 'Setup',
                    'tag_color' => 'bg-gray-100 text-gray-700 ring-gray-200',
                    'due' => '18/03/26',
                ],
            ],
        ],
    ];
@endphp

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
            </div>
        </div>

        <div class="p-4 sm:p-5">
            <div class="-mx-4 overflow-x-auto px-4">
                <div class="min-w-[880px]">
                    <div class="grid grid-cols-4 gap-4">
                        @foreach ($columns as $column)
                            <div class="rounded-2xl bg-gray-50 ring-1 ring-gray-200">
                                <div class="flex items-center justify-between p-3">
                                    <div class="flex items-center gap-2">
                                        <p class="text-sm font-semibold text-gray-900">
                                            {{ $column['title'] }}
                                        </p>
                                        <span class="inline-flex items-center rounded-full bg-white px-2 py-0.5 text-xs font-semibold text-gray-600 ring-1 ring-gray-200">
                                            {{ $column['count'] }}
                                        </span>
                                    </div>
                                </div>

                                <div class="space-y-3 p-3">
                                    @foreach ($column['cards'] as $card)
                                        <article class="rounded-2xl bg-white p-3 shadow-sm ring-1 ring-gray-200 hover:shadow-md transition">
                                            <span class="inline-flex items-center rounded-full px-2 py-0.5 text-[11px] font-semibold ring-1 {{ $card['tag_color'] }}">
                                                {{ $card['tag'] }}
                                            </span>
                                            <h3 class="mt-2 text-sm font-semibold text-gray-900">
                                                {{ $card['title'] }}
                                            </h3>
                                            <p class="mt-1 text-sm text-gray-600">
                                                {{ $card['description'] }}
                                            </p>
                                            <div class="mt-3 flex items-center justify-between text-xs text-gray-500">
                                                <span>Due {{ $card['due'] }}</span>
                                                <span class="font-semibold text-gray-700">
                                                    #{{ strtoupper(str_replace(' ', '_', $column['title'])) }}
                                                </span>
                                            </div>
                                        </article>
                                    @endforeach

                                    <button
                                        type="button"
                                        class="w-full rounded-2xl border-2 border-dashed border-gray-200 bg-white/60 px-3 py-3 text-sm font-semibold text-gray-600 hover:bg-white"
                                    >
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

