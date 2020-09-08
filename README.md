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

## Examples

Examples code can be found in **templates/main** directory

1 . Markers: 
[http://127.0.0.1:18080/markers](http://127.0.0.1:18080/markers)

![markers](/public/assets/img/examples/markers.png)

2 . Markers cluster
[http://127.0.0.1:18080/clustering](http://127.0.0.1:18080/clustering)

![clustering](/public/assets/img/examples/clustering.png)

3 . Geocode
[http://127.0.0.1:18080/geocode](http://127.0.0.1:18080/geocode)

![geocode](/public/assets/img/examples/geocode.png)

4 . Autocomplete
[http://127.0.0.1:18080/autocomplete](http://127.0.0.1:18080/autocomplete)

![autocomplete](/public/assets/img/examples/autocomplete.png)

5 . Directions
[http://127.0.0.1:18080/directions](http://127.0.0.1:18080/directions)

![directions](/public/assets/img/examples/directions.png)

6 . Elevation
[http://127.0.0.1:18080/elevation](http://127.0.0.1:18080/elevation)

![elevation](/public/assets/img/examples/elevation.png)

7 . Layers
[http://127.0.0.1:18080/layers](http://127.0.0.1:18080/layers)

![layers](/public/assets/img/examples/layers.png)

8 . Panorama
[http://127.0.0.1:18080/panorama](http://127.0.0.1:18080/panorama)

![panorama](/public/assets/img/examples/panorama.png)

9 . Polygon
[http://127.0.0.1:18080/polygon](http://127.0.0.1:18080/polygon)

![polygon](/public/assets/img/examples/polygon.png)

10 . Polyline
[http://127.0.0.1:18080/polyline](http://127.0.0.1:18080/polyline)

![polyline](/public/assets/img/examples/polyline.png)

11 . GPX track
[http://127.0.0.1:18080/gpx](http://127.0.0.1:18080/gpx)

![gpx](/public/assets/img/examples/gpx.png)