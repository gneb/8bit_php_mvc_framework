### Controller Example

```php
if(!defined("8bit")) die("no primarry access!");

class main extends controller {

    public function index() {
        $data['name'] = "stinky";
        $this->view->load("welcome",$data);
    }
}
```
