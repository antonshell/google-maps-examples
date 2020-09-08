# Google maps examples

There are few examples of work with google maps

## Install (locally)

1 . Clone repository:

```
git clone https://github.com/antonshell/google-maps-examples.git
```

2 . Install dependencies

```
composer install
```

3 . Set API KEY:

Create env file
```
nano .env.local
```

Set variable
```
GOOGLE_MAPS_API_KEY=YOUR_API_KEY
```

4 . Run built in web-server:

```
cd public
php -S 127.0.0.1:8000
```

5 . Open in browser:

[http://127.0.0.1:8000/](http://127.0.0.1:8000/)

# Install (docker)

1 . Clone repository:

```
git clone https://github.com/antonshell/google-maps-examples.git
```

2 . Run docker compose:

```
cd google-maps-examples
docker-compose up -d
```

3 . Set API KEY:

Create env file
```
nano .env.local
```

Set variable
```
GOOGLE_MAPS_API_KEY=YOUR_API_KEY
```

3 . Open in browser:

[http://127.0.0.1:18080/](http://127.0.0.1:18080/)

## Get API KEY

Create api key as described in the documentation:
[https://developers.google.com/maps/documentation/javascript/get-api-key](https://developers.google.com/maps/documentation/javascript/get-api-key)

Here is more detailed unofficial tutorial:
[https://www.wpmapspro.com/docs/how-to-create-an-api-key/](https://www.wpmapspro.com/docs/how-to-create-an-api-key/)

## Examples

Examples code can be found in **templates/main** directory

### 1 . Markers: 

[http://127.0.0.1:18080/markers](http://127.0.0.1:18080/markers)

![markers](/public/assets/img/examples/markers.png)

References:

- [Markers documentation](https://developers.google.com/maps/documentation/javascript/markers)

### 2 . Markers cluster

[http://127.0.0.1:18080/clustering](http://127.0.0.1:18080/clustering)

![clustering](/public/assets/img/examples/clustering.png)

References:

- [Documentation](https://developers.google.com/maps/documentation/javascript/marker-clustering)
- [Example](https://googlemaps.github.io/v3-utility-library/packages/markerclustererplus/examples/advanced_example.html)

### 3 . Geocode

[http://127.0.0.1:18080/geocode](http://127.0.0.1:18080/geocode)

![geocode](/public/assets/img/examples/geocode.png)

References:

- [Geocoding](https://developers.google.com/maps/documentation/javascript/examples/geocoding-simple)
- [Reverse Geocoding](https://developers.google.com/maps/documentation/javascript/examples/geocoding-reverse)

### 4 . Autocomplete

[http://127.0.0.1:18080/autocomplete](http://127.0.0.1:18080/autocomplete)

![autocomplete](/public/assets/img/examples/autocomplete.png)

References:

- [Places autocomplete](https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete)

### 5 . Directions

[http://127.0.0.1:18080/directions](http://127.0.0.1:18080/directions)

![directions](/public/assets/img/examples/directions.png)

References:

- [Directions simple](https://developers.google.com/maps/documentation/javascript/examples/directions-simple)
- [Directions with text panel](https://developers.google.com/maps/documentation/javascript/examples/directions-panel)
- [Directions dragable](https://developers.google.com/maps/documentation/javascript/examples/directions-draggable)

### 6 . Elevation

[http://127.0.0.1:18080/elevation](http://127.0.0.1:18080/elevation)

![elevation](/public/assets/img/examples/elevation.png)

References:

- [Elevation simple](https://developers.google.com/maps/documentation/javascript/examples/elevation-simple)
- [Elevation with path](https://developers.google.com/maps/documentation/javascript/examples/elevation-paths)

### 7 . Layers

[http://127.0.0.1:18080/layers](http://127.0.0.1:18080/layers)

![layers](/public/assets/img/examples/layers.png)

References:

- [Layers](https://developers.google.com/maps/documentation/javascript/layers)
- [Traffic layer](https://developers.google.com/maps/documentation/javascript/examples/layer-traffic)
- [Transit layer](https://developers.google.com/maps/documentation/javascript/examples/layer-transit)
- [Bicycling layer](https://developers.google.com/maps/documentation/javascript/examples/layer-bicycling)

### 8 . Panorama

[http://127.0.0.1:18080/panorama](http://127.0.0.1:18080/panorama)

![panorama](/public/assets/img/examples/panorama.png)

References:

- [Layers](https://developers.google.com/maps/documentation/javascript/layers)
- [Traffic layer](https://developers.google.com/maps/documentation/javascript/examples/layer-traffic)
- [Transit layer](https://developers.google.com/maps/documentation/javascript/examples/layer-transit)
- [Bicycling layer](https://developers.google.com/maps/documentation/javascript/examples/layer-bicycling)

### 9 . Polygon

[http://127.0.0.1:18080/polygon](http://127.0.0.1:18080/polygon)

![polygon](/public/assets/img/examples/polygon.png)

References:

- [Polygon simple](https://developers.google.com/maps/documentation/javascript/examples/polygon-simple)
- [Polygon with hole](https://developers.google.com/maps/documentation/javascript/examples/polygon-hole)
- [Circle](https://developers.google.com/maps/documentation/javascript/examples/circle-simple)
- [Rectangle](https://developers.google.com/maps/documentation/javascript/examples/rectangle-simple)
- [Editable rectangle](https://developers.google.com/maps/documentation/javascript/examples/user-editable-shapes)
- [Dragable polygon](https://developers.google.com/maps/documentation/javascript/examples/polygon-draggable)

### 10 . Polyline

[http://127.0.0.1:18080/polyline](http://127.0.0.1:18080/polyline)

![polyline](/public/assets/img/examples/polyline.png)

References:

- [Polyline](https://developers.google.com/maps/documentation/javascript/examples/polyline-simple)
- [Editable polyline](https://developers.google.com/maps/documentation/javascript/examples/delete-vertex-menu)
- [Drawing polyline](https://developers.google.com/maps/documentation/javascript/examples/polyline-complex)
- [Drawing polyline](https://developers.google.com/maps/documentation/javascript/examples/polyline-complex)
- [Arrow polyline](https://developers.google.com/maps/documentation/javascript/examples/overlay-symbol-arrow)
- [Dashed polyline](https://developers.google.com/maps/documentation/javascript/examples/overlay-symbol-dashed)

### 11 . GPX track

[http://127.0.0.1:18080/gpx](http://127.0.0.1:18080/gpx)

![gpx](/public/assets/img/examples/gpx.png)

References:

- [Tutorial](http://christopherpeplin.com/2011/05/gpxviewer/)
- [Library](https://github.com/peplin/gpxviewer)