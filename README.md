## Installation
`composer require nanuc/helpers`

## Usage
### DateTime helper
`<x-helpers-date-time format="date.short" :date="$user->updated_at"/>`

Available formats (example for German):
```
'medium' => '%a, %d. %b %Y %H:%M',
'long' => '%A, %d. %B %Y %H:%M',
'short' => '%d.%m.%Y, %H:%M',
'with-seconds' => '%d.%m.%Y, %H:%M:%I',
'date' => [
    'short' => '%d.%m.%Y',
    'medium' => '%A, %d. %B %Y',
],
'time' => [
    'short' => '%H:%M',
    'short-appendix' => '%H:%M Uhr',
],
```

### Tabs
```
<x-helpers-tabs.tabs activeElement="tab1">

    <x-slot name="links" >
        <x-helpers-tabs.tab-link id="tab1" :title="__('Tab 1')" type="underline"/>
        <x-helpers-tabs.tab-link id="tab2" :title="__('Tab 2')" type="underline"/>
    </x-slot>


    <x-helpers-tabs.tab-content id="tab1">
        Content Tab 1
    </x-helpers-tabs.tab-content>
    <x-helpers-tabs.tab-content id="tab2">
        Content Tab 2
    </x-helpers-tabs.tab-content>
</x-helpers-tabs.tabs>
```

### Helpscout
#### Embed Beacon
Include your beacon key in your .env:
`HELPSCOUT_BEACON_KEY=12345678-abcd-efgh-1234-abcdefghijkl`