## 1) Introducción:

Características principales de Vue:
- Framework orientado en el desarrollo de interfaces gráficas.
- Versátil: su núcleo minificado pesa poco más de 20kb.
- Escalable: pensado para serlo, aprovechando su versatilidad.
- Comunidad activa que aporta día tras día con más plugins, componentes y librerías.
- Ecosistema: Vue router + Vuex.
- Altamente testeable junto a herramientas como Jest, Mocha e incluso Vue Test Utils.

## 2) Uso básico:

```html
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ejemplo</title>
    </head>
    <body>
        <div id="app">
            {{ message }}
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script>
            var app = new Vue({
                el: '#app',
                data: {
                    message: 'Hello Vue!'
                }
            })
        </script>
    </body>
</html>
```

### 3) Configuración en Laravel

#### `resources/js/bootstrap.js`:

En este archivo se cargan las dependencias de la aplicación, veremos que se importan librerías como Lodash, jQuery, Bootstrap y Axios.

#### `resources/js/app.js`:

Esta es la instancia de la aplicación, primero se cargan las dependencias del archivo `resources/js/bootstrap.js`, además se define un componente Vue por defecto.

#### `webpack.mix.js`:

Laravel Mix es una librería que funciona como interfaz para trabajar con Webpack de una forma más cómoda.

Webpack es una librería Node que compila tu código, archivos, css y diferentes módulos para hacerlos más livianos al pasarlos a producción, todo esto se configura a través de un archivo `.js`. Si bien la configuración de `Webpack` es sencilla, requiere importar muchas librerías y módulos, lo que complica un poco el proceso. Para solucionar eso llega Laravel Mix.

#### Compilación:

- Instalación de NodeJS

```
# Debian
sudo apt install -y nodejs

# Centos
yum install nodejs
```

- Instalación de yarn (opcional)

```
npm i -g yarn
```

- Compilación:

```
npm install // yarn install

npm run dev
npm run watch
npm run prod
```

Esta configuración generará un archivo `public/js/app.js` y `public/css/app.css`, utilizará un compilador de **JavaScript** y uno de **SASS**.

#### Creando nuevos componentes:

Los componentes pueden ser creados en el directorio `resources/js` a modo de sugerencia. Lo importante es en cada componente definir esta estructura básica:

```js
require('./bootstrap');

window.Vue = require('vue');

// componentes
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
});
```

Con lo anterior, dentro del div `#app` podrás usar el componente `<example-component>`

#### Web component de ejemplo:

```js
<template>
    <div class="container">
        <p>Hello world</p>
    </div>
</template>

<script>
    export default {
        mounted () {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    .container {
        background-color: yellow;
    }
</style>
```

#### Configurando con vistas Blade:

Supongamos que tenemos la siguiente ruta:

```php
Route::get('/dashboard', function () {
    return view('dashboard');
});
```

Y el archivo `resources/views/dashboard.blade.php`:
```php
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <!-- importar app.css -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app"></div>

        <!-- importar app.js -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

```

Lo ideal es separar los web componentes en vistas distintas, por ejemplo si tenemos 3 url distintas con muchos componentes y NO queremos compartirlos entre si, podemos generar compilaciones separadas para cada una, en `webpack.mix.js`;

```js
const mix = require('laravel-mix');

// app.js contiene solamente dependencias de la aplicación.
mix.js('resources/js/app.js', 'public/js')
    // web components separados para vistas distintas
    .js('resources/js/dashboard.js', 'public/js')
    .js('resources/js/menu.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

```

Y así en la vista Blade se puede importar solo web components para esa vista:

```php
<body>
    <div id="app"></div>

    <!-- importar app.js -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- importar web components -->
    <script src="{{ asset('js/dashboard.js') }}"></script>   
</body>
```