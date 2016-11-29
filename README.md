# PokePHP
A PHP Wrapper for the [Pokemon API](https://pokeapi.co/)

[![Build Status](https://travis-ci.org/danrovito/pokephp.svg?branch=master)](https://travis-ci.org/danrovito/pokephp) [![StyleCI](https://styleci.io/repos/59025645/shield?branch=master)](https://styleci.io/repos/59025645) [![License](https://poser.pugx.org/danrovito/pokephp/license?format=flat-square)](https://packagist.org/packages/danrovito/pokephp) [![Total Downloads](https://poser.pugx.org/danrovito/pokephp/downloads?format=flat-square)](https://packagist.org/packages/danrovito/pokephp) [![Latest Stable Version](https://poser.pugx.org/danrovito/pokephp/v/stable?format=flat-square)](https://packagist.org/packages/danrovito/pokephp)

# Getting Started

To get started you must first install the package from composer.

```
composer require danrovito/pokephp
```

After composer installs the required package you can call the class by setting the following:

```php
use PokePHP\PokeApi;
$api = new PokeApi;
```

This will give you the instance of the class to call the API functions.  Below you will see examples for each endpoint.  I utilize the `$api` variable we created above to call each function.

# Usage

#### Resource List

Calling any API endpoint without a resource ID or name will return a paginated list of available resources for that API call.  You can read more about resource list usage [here](https://pokeapi.co/docsv2/#resource-lists).  The Limit and Offset parameters are optional.

```PHP
$api->resourceList('ENDPOINT', 'LIMIT', 'OFFSET');
```

## Berries

##### Berries

You can pass a `name` or an `id` to receive the berry response

```PHP
$api->berry('NAME OR ID');
```

##### Berry Firmnesses

You can pass a `name` or an `id` to receive the berry firmness

```PHP
$api->berryFirmness('NAME OR ID');
```

##### Berry Flavor

You can pass a `name` or an `id` to receive the berry flavor

```PHP
$api->berryFlavor('NAME OR ID');
```

## Contests

##### Contest Types

You can pass a `name` or an `id` to receive the contest type

```PHP
$api->contestType('NAME OR ID');
```

##### Contest Effect

You can pass an `id` to receive the contest effect

```PHP
$api->contestEffect('ID');
```

##### Super Contest Effect

You can pass an `id` to receive the super contest effect

```PHP
$api->superContestEffect('ID');
```

## Encounters

##### Encounter Method

You can pass a `name` or an `id` to receive the encounter method

```PHP
$api->encounterMethod('NAME OR ID');
```

##### Encounter Condition

You can pass a `name` or an `id` to receive the encounter condition

```PHP
$api->encounterCondition('NAME OR ID');
```

##### Encounter Condition Values

You can pass a `name` or an `id` to receive the encounter condition value

```PHP
$api->encounterConditionValue('NAME OR ID');
```

## Evolution

##### Evolution Chain

You can pass an `id` to receive the evolution chain

```PHP
$api->evolutionChain('ID');
```

##### Evolution Trigger

You can pass a `name` or an `id` to receive the evolution trigger

```PHP
$api->evolutionTrigger('NAME OR ID');
```

## Games

##### Game Generation

You can pass a `name` or an `id` to receive the game generation

```PHP
$api->gameGeneration('NAME OR ID');
```

##### Pokedex

You can pass a `name` or an `id` to receive the pokedex

```PHP
$api->pokedex('NAME OR ID');
```

##### Version

You can pass a `name` or an `id` to receive the game version

```PHP
$api->version('NAME OR ID');
```

##### Version Group

You can pass a `name` or an `id` to receive the game version group

```PHP
$api->versionGroup('NAME OR ID');
```

## Items

##### Item

You can pass a `name` or an `id` to receive the item

```PHP
$api->item('NAME OR ID');
```

##### Item Attribute

You can pass a `name` or an `id` to receive the item attribute

```PHP
$api->itemAttribute('NAME OR ID');
```

##### Item Category

You can pass a `name` or an `id` to receive the item category

```PHP
$api->itemCategory('NAME OR ID');
```

##### Item Fling Effect

You can pass a `name` or an `id` to receive the item fling effect

```PHP
$api->itemFlingEffect('NAME OR ID');
```

##### Item Pocket

You can pass a `name` or an `id` to receive the item pocket

```PHP
$api->itemPocket('NAME OR ID');
```

## Moves

##### Move

You can pass a `name` or an `id` to receive the move

```PHP
$api->move('NAME OR ID');
```

##### Move Ailment

You can pass a `name` or an `id` to receive the move ailment

```PHP
$api->moveAilment('NAME OR ID');
```

##### Move Battle Style

You can pass a `name` or an `id` to receive the move battle style

```PHP
$api->moveBattleStyle('NAME OR ID');
```

##### Move Category

You can pass a `name` or an `id` to receive the move category

```PHP
$api->moveCategory('NAME OR ID');
```

##### Move Damage Class

You can pass a `name` or an `id` to receive the move damage class

```PHP
$api->moveDamageClass('NAME OR ID');
```

##### Move Learn Method

You can pass a `name` or an `id` to receive the move learn method

```PHP
$api->moveLearnMethod('NAME OR ID');
```

##### Move Target

You can pass a `name` or an `id` to receive the move target

```PHP
$api->moveTarget('NAME OR ID');
```

## Locations

##### Location

You can pass an `id` to receive the location

```PHP
$api->location('ID');
```

##### Location Area

You can pass an `id` to receive the location area

```PHP
$api->locationArea('ID');
```

##### Pal Park Areas

You can pass a `name` or an `id` to receive the Pal park areas

```PHP
$api->palParkArea('NAME OR ID');
```

##### Reagion

You can pass a `name` or an `id` to receive the region

```PHP
$api->region('NAME OR ID');
```

## Pokemon

##### Abilities

You can pass a `name` or an `id` to receive the ability

```PHP
$api->ability('NAME OR ID');
```

##### Characteristic

You can pass an `id` to receive the characteristic

```PHP
$api->characteristic('ID');
```

##### Egg Group

You can pass a `name` or an `id` to receive the egg group

```PHP
$api->eggGroup('NAME OR ID');
```

##### Gender

You can pass a `name` or an `id` to receive the gender

```PHP
$api->gender('NAME OR ID');
```

##### Growth Rate

You can pass a `name` or an `id` to receive the growth rate

```PHP
$api->growthRate('NAME OR ID');
```

##### Pokeathlon Stats

You can pass a `name` or an `id` to receive the Pokeathlon Stats

```PHP
$api->pokeathlonStat('NAME OR ID');
```

##### Pokemon

You can pass a `name` or an `id` to receive the Pokemon

```PHP
$api->pokemon('NAME OR ID');
```

##### Pokemon Color

You can pass a `name` or an `id` to receive the Pokemon Color

```PHP
$api->pokemonColor('NAME OR ID');
```

##### Pokemon Form

You can pass a `name` or an `id` to receive the Pokemon Form

```PHP
$api->pokemonForm('NAME OR ID');
```

##### Pokemon Habitat

You can pass a `name` or an `id` to receive the Pokemon Habitat

```PHP
$api->pokemonHabitat('NAME OR ID');
```

##### Pokemon Shape

You can pass a `name` or an `id` to receive the Pokemon Shape

```PHP
$api->pokemonShape('NAME OR ID');
```

##### Pokemon Species

You can pass a `name` or an `id` to receive the Pokemon Species

```PHP
$api->pokemonSpecies('NAME OR ID');
```

##### Pokemon Stat

You can pass a `name` or an `id` to receive the Pokemon Stat

```PHP
$api->pokemonStat('NAME OR ID');
```

##### Pokemon Type

You can pass a `name` or an `id` to receive the Pokemon Type

```PHP
$api->pokemonType('NAME OR ID');
```

## Utility

##### Language

You can pass a `name` or an `id` to receive the language

```PHP
$api->language('NAME OR ID');
```

## License

pokephp is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Bug Reporting and Feature Requests

Please add as much detail as possible regarding the submission of issues and feature requests

## Disclaimer

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
