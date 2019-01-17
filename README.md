### Extend Laravel Collections


# Methods

/**
 *
 * @param Optional String 
 * @return string
 * 
 */

```
/**
 *
 * @params Optional String
 * @return String
 */

listify($property)
{ 

  return implode(',' $collection->pluck('property')->all());
}

```


*Example Listify Usage*
```

  $categoriesList = App\Post::first()->categories->listify('name');

```
