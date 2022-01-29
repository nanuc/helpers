@props(['active' => '', 'color' => 'blue', 'style' => 'underline'])

<div
        @register-tab.stop="headings.push($event.detail.name); activeTab = activeTab == '' ? $event.detail.name : activeTab;"
        x-data="{ activeTab: '{{ $active }}' , headings: [] }"
        x-cloak
>

    <div class="mb-3" role="tablist">
        <div class="sm:hidden">
            <label for="tabs" class="sr-only">{{ __('Select a tab') }}</label>
            <select @change="activeTab = $event.target.value;" id="tabs" name="tabs" class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <template x-for="(tab, index) in headings" :key="index">
                    <option x-text="tab" :id="`tab-${index + 1}`" role="tab"></option>
                </template>
            </select>
        </div>

        <div class="hidden sm:block">
            @if($style == 'underline')
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex" aria-label="Tabs">
                        <template x-for="(tab, index) in headings" :key="index">
                            <div x-text="tab"
                                 @click="activeTab = tab;"
                                 class="cursor-pointer whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm mr-8"
                                 :class="tab === activeTab ? 'border-{{ $color }}-500 text-{{ $color }}-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                 :id="`tab-${index + 1}`"
                                 role="tab"
                                 :aria-selected="(tab === activeTab).toString()"
                                 :aria-controls="`tab-panel-${index + 1}`"
                            ></div>
                        </template>
                    </nav>
                </div>
            @elseif($style == 'pills')
                <nav class="-mb-px flex" aria-label="Tabs">
                    <template x-for="(tab, index) in headings" :key="index">
                        <div x-text="tab"
                             @click="activeTab = tab;"
                             class="cursor-pointer px-3 py-2 font-medium text-sm rounded-md"
                             :class="tab === activeTab ? 'text-{{ $color }}-700 bg-{{ $color }}-100' : 'text-{{ $color }}-500 hover:text-{{ $color }}-700'"
                             :id="`tab-${index + 1}`"
                             role="tab"
                             :aria-selected="(tab === activeTab).toString()"
                             :aria-controls="`tab-panel-${index + 1}`"
                        ></div>
                    </template>
                </nav>
            @else
                <template x-for="(tab, index) in headings" :key="index">
                    <button x-text="tab"
                            @click="activeTab = tab;"
                            class="cursor-pointer px-4 py-1 text-sm rounded hover:bg-blue-500 hover:text-white"
                            :class="tab === activeTab ? 'bg-blue-500 text-white' : 'text-gray-800'"
                            :id="`tab-${index + 1}`"
                            role="tab"
                            :aria-selected="(tab === activeTab).toString()"
                            :aria-controls="`tab-panel-${index + 1}`"
                    ></button>
                </template>
            @endif
        </div>
    </div>

    <div x-ref="tabs">
        {{$slot}}
    </div>
</div>
