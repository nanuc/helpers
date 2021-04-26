## Installation
`composer require nanuc/helpers`

Publish config: 
`php artisan vendor:publish --provider="Nanuc\Helpers\HelpersServiceProvider" --tag=config`


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
'with-seconds' => '%d.%m.%Y, %H:%M:%S',
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
Use it like:
```
<x-helpers::tabs active="First">
    <x-helpers::tab name="First">
        First content goes here.
    </x-helpers::tab>
    
    <x-helpers::tab name="Second">
        Second content goes here.
    </x-helpers::tab>
    
    <x-helpers::tab name="Third">
        Third content goes here.
    </x-helpers::tab>
</x-helpers::tabs>
```


#### Legacy tabs
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


### Socialite login
**Jetstream needs to be installed for this to work.**

Set credentials
(https://laravel.com/docs/8.x/socialite#configuration)
```dotenv
GOOGLE_CLIENT_ID=...
GOOGLE_CLIENT_SECRET=...
GOOGLE_REDIRECT=https://yoururl.com/auth/google/callback
```

Enable Socialite in config
```php
// config/helpers.php
return [
    // ...
    'socialite' => [
        'enabled' => true,
    ]
];
```

Install Socialite:
`composer require laravel/socialite`

#### Login Buttons
`<x-helpers::buttons.social-login provider="google"/>`

### Helpscout
#### Embed Beacon
Include your beacon key in your .env:
`HELPSCOUT_BEACON_KEY=12345678-abcd-efgh-1234-abcdefghijkl`