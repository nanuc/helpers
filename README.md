## Installation
`composer require nanuc/helpers`

## Usage
### Quick log
Just an abbreviation for `Log::info`:
`l('Log something');`

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

Add the following to your styles (e.g. `resources/css/app.css`):
```
<style>
    [x-cloak] { display: none; }
</style>
```

Use it like:
```
<x-helpers-tabs.tabs activeElement="tab1">
    <x-slot name="links" >
        <x-helpers-tabs.tab-link color-scheme="blue" id="tab1" title="Tab 1" type="underline"/>
        <x-helpers-tabs.tab-link color-scheme="blue" id="tab2" title="Tab 2" type="underline"/>
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