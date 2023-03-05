<?php

declare(strict_types=1);

namespace PokePHP;

enum Filter: string
{
  public const ABILITY = 'ability';

  public const BERRY = 'berry';

  public const BERRY_FIRMNESS = 'berry-firmness';

  public const CHARACTERISTIC = 'characteristic';

  public const CONTEST_EFFECT = 'contest-effect';

  public const CONTEST_TYPE = 'contest-type';

  public const EGG_GROUP = 'egg-group';

  public const ENCOUNTER_CONDITION = 'encounter-condition';

  public const ENCOUNTER_CONDITION_VALUE = 'encounter-condition-value';

  public const ENCOUNTER_METHOD = 'encounter-method';

  public const EVOLUTION_CHAIN = 'evolution-chain';

  public const EVOLUTION_TRIGGER = 'evolution-trigger';

  public const GENGER = 'gender';

  public const GENERATION = 'generation';

  public const GROWTH_RATE = 'growth-rate';

  public const ITEM = 'item';

  public const ITEM_ATTRIBUTE = 'item-attribute';

  public const ITEM_CATEGORY = 'item-category';

  public const ITEM_FLING_EFFECT = 'item-fling-effect';

  public const ITEM_POCKET = 'item-pocket';

  public const LANGUAGE = 'language';

  public const LOCATION_AREA = 'location-area';

  public const MACHINE = 'machine';

  public const MOVE = 'move';

  public const MOVE_AILMENT = 'move-ailment';

  public const MOVE_BATTLE_STYLE = 'move-battle-style';

  public const MOVE_CATEGORY = 'move-category';

  public const MOVE_DAMAGE_CLASS = 'move-damage-class';

  public const MOVE_LEARN_METHOD = 'move-learn-method';

  public const NATURE = 'nature';

  public const PAL_PARK_AREA = 'pal-park-area';

  public const POKEATHLON_STAT = 'pokeathlon-stat';

  public const POKEDEX = 'pokedex';

  public const POKEMON = 'pokemon';

  public const POKEMON_COLOR = 'pokemon-color';

  public const POKEMON_FORM = 'pokemon-form';

  public const POKEMON_HABITAT = 'pokemon-habitat';

  public const POKEMON_SHAPE = 'pokemon-shape';

  public const POKEMON_SPECIES = 'pokemon-species';

  public const REGION = 'region';

  public const STAT = 'stat';

  public const SUPER_CONTEST_EFFECT = 'super-contest-effect';

  public const TYPE = 'type';

  public const VERSION = 'version';

  public const VERSION_GROUP = 'version-group';
}
