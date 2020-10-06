# Yii2 Datatables mark.js

AssetBundle for Search Datatables highlighting with mark.js

## Installation

#### Composer

```
composer require --prefer-dist "ayrozjlc/yii2-datatables-mark:*"
```

or add

```
"ayrozjlc/yii2-datatables-mark": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## Usage

in view (for example: ```@app/views/layouts/main.php```)

```php
// ...
use ayrozjlc\datatablesmark\DataTablesMarkAsset;
// ...
DataTablesMarkAsset::register($this);
```

or add to your ```assets/AppAsset.php```

```php
public $depends = [
    // ...
    'ayrozjlc\datatablesmark\DataTablesMarkAsset',
];
```

add option in datatables
```javascript
$(".myTable").DataTable({
    mark: true
});
```

