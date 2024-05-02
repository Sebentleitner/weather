# Weather

```php
namespace Sebentleitner\Weather;
require 'vendor/autoload.php';
```

## Day

Es ist möglich ein Objekt Names Day zu erstellen. Jeder Day kann immer nur mit einem Wetter als (Property) angelegt werden. 


## History

Die Klasse History beinhaltet alle Einträge der Daten Day inlusive einem Datum im Format 'yyyy-mm-tt'. Mit der Funktion `addDay` können zur Klasse **History** einzelne *Days* mit einem Datum hinzugefügt werden. 
Die Funktion **getWeather** gibt das Wetter an den gewünschten Tag zurück.
Sollte der Tag nicht eingetragen bzw. kein Wetter vorhanden sein, so wird der Satz 'Es ist noch kein Wetter vorhanden' zurückgegeben. 
