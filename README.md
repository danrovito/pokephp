# pokephp
A PHP Wrapper for the Pokemon API (pokeapi.co)

# Getting Started

To get started you must first install the package from composer.

```
composer require danrovito/pokephp
```

After composer installs the required package you can call the class by setting the following:

```php
$api = new PokeApi;
```

This will give you the instance of the class to call the API functions.  Below you will see examples for each endpoint.  I utilize the `$api` variable we created above to call each function.

# Usage

### Resource List

Calling any API endpoint without a resource ID or name will return a paginated list of available resources for that API.  You can read more about resource list usage [here](https://pokeapi.co/docsv2/#resource-lists).  The Limit and Offset parameters are optional. 

#### Sample Code

```PHP
$api->resourceList('ENDPOINT', 'LIMIT', 'OFFSET');
```

## License

pokephp is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Bug Reporting and Feature Requests

Please add as many details as possible regarding submission of issues and feature requests

### Disclaimer

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
