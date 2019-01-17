## Extend Methods On Laravel Collections


#### Methods
* listify($property)


**Example Usage**
```
  $categories = App\Post::first()->categories;
    
  $categoriesList = $categories->listify('name'); 
```