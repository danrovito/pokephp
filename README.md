# PokePHP

A PHP Wrapper for the [Pokemon API](https://pokeapi.co/)

[![Build Status](https://travis-ci.org/danrovito/pokephp.svg?branch=master)](https://travis-ci.org/danrovito/pokephp) [![StyleCI](https://styleci.io/repos/59025645/shield?branch=master)](https://styleci.io/repos/59025645) [![License](https://poser.pugx.org/danrovito/pokephp/license?format=flat-square)](https://packagist.org/packages/danrovito/pokephp) [![Total Downloads](https://poser.pugx.org/danrovito/pokephp/downloads?format=flat-square)](https://packagist.org/packages/danrovito/pokephp) [![Latest Stable Version](https://poser.pugx.org/danrovito/pokephp/v/stable?format=flat-square)](https://packagist.org/packages/danrovito/pokephp)

## Getting Started

To get started you must first install the package from composer.

```bash
composer require danrovito/pokephp
```

After composer installs the required package you can call the class by setting the following:

```php
$api = new PokePHP\PokeApi;
```

This will give you the instance of the class to call the API functions.  Below you will see examples for each endpoint.  I utilize the `$api` variable we created above to call each function.

## Usage

You can search the data in the `$api` instance by calling the `search` method and passing a `filter` with an optional value, just as you can still limit the results with the `limit` method. To retrieve the data you must call the request method, which will return a json.

```php
$response = $api->search(Filter::POKEMON_COLOR, 'red')->limit(5)->request();

```

## License

pokephp is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Bug Reporting and Feature Requests

Please add as much detail as possible regarding the submission of issues and feature requests

## Disclaimer

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
