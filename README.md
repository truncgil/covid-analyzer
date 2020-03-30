# Trunçgil Covid Analyzer

You can track the progress of Covid-19 virus of spread on Trunçgil Covid Analyzer. 

## Usage:

You can simply use the auto-updated json file: https://covid.truncgil.com/today.json

### PHP
```php
$covid = json_decode(file_get_contents("https://covid.truncgil.com/today.json"),true);
print_r($covid);
```

### JavaScript / jQuery
```javascript
$.getJSON( "https://covid.truncgil.com/today.json", function( data ) {
  let items = [];
  $.each( data, function( key, val ) {
    items.push( "<li id='" + key + "'>" + val + "</li>" );
  });
 
  $( "<ul/>", {
    "class": "my-new-list",
    html: items.join( "" )
  }).appendTo( "body" );
});
```

## Output
```javascript
{
    "id":"unitedstates",
    "Ülke":"ABD",
    "Bulaşmış":142537,
    "Kurtulan":4767,
    "Ölüm":2510,
    "Aktif":135260,
    "Enlem":39.495914459229,
    "Boylam":-98.98998260498
}
```
## JSON Tree
```
id: id
Ülke: Country
Bulaşmış: Infected
Kurtulan: Saved
Ölüm: Dead
Aktif: Active
Enlem: Latitute
Boylam: Longitude
```

## Sample
[![Trunçgil Covid Analyzer](https://truncgil.com/covid-analizer.png)](https://covid.truncgil.com/)
Trunçgil Covid Analyzer Page: [covid.truncgil.com](https://covid.truncgil.com/)


# Türkçe

Trunçgil Covid Analyzer ile Covid-19 virüsünün yayılmasını takip edebilirsiniz.

## Kullanım:

Otomatik olarak güncellenen json dosyasını basit bir şekilde kullanabilirsiniz: https://covid.truncgil.com/today.json

### PHP
```php
$covid = json_decode(file_get_contents("https://covid.truncgil.com/today.json"),true);
print_r($covid);
```

### JavaScript / jQuery
```javascript
$.getJSON( "https://covid.truncgil.com/today.json", function( data ) {
  let items = [];
  $.each( data, function( key, val ) {
    items.push( "<li id='" + key + "'>" + val + "</li>" );
  });
 
  $( "<ul/>", {
    "class": "my-new-list",
    html: items.join( "" )
  }).appendTo( "body" );
});
```

## Örnek
[![Trunçgil Covid Analyzer](https://truncgil.com/covid-analizer.png)](https://covid.truncgil.com/)
Trunçgil Covid Analyzer Page: [covid.truncgil.com](https://covid.truncgil.com/)

## Çıktı
```javascript
{
    "id":"unitedstates",
    "Ülke":"ABD",
    "Bulaşmış":142537,
    "Kurtulan":4767,
    "Ölüm":2510,
    "Aktif":135260,
    "Enlem":39.495914459229,
    "Boylam":-98.98998260498
}
```
## JSON Ağacı
```
id: id
Ülke: Country
Bulaşmış: Infected
Kurtulan: Saved
Ölüm: Dead
Aktif: Active
Enlem: Latitute
Boylam: Longitude
```
