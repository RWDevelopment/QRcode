# QRcode Plugin for [Flextype](http://flextype.org/)

QRcode is a lightweight plugin which allows user to generate QRcode on page using Google chart.

## Installation
1. Unzip plugin to the folder `/site/plugins/`
2. Go to `/site/config/site.yaml` and add plugin name to plugins section.
3. Save your changes.

Example:
```
...
plugins:
  - qrcode
```

## Usage in page content

```
[qrcode]your text[/qrcode]

[qrcode size="40" border="border"]your text[/qrcode]

[qrcode size="100" border="border border-primary"]your text[/qrcode]

[qrcode size="80" border="border border-info"]your text[/qrcode]
```

default size 60x60 pixels

default no border

to change border color use Bootstrap 4 class 'border'

## Settings

```yaml
enabled: true # or `false` to disable the plugin
```

## License

The MIT License (MIT)

Copyright (c) 2018 Flextype

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
