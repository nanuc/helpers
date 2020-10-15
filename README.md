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

### Helpscout
#### Embed Beacon
Include your beacon key in your .env:
`HELPSCOUT_BEACON_KEY=12345678-abcd-efgh-1234-abcdefghijkl`