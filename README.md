# Breadcrumb

## Usage

in Controller

```php
<?php
    class PostsController extends AppController
    {
        public $components = [
            'Breadcrumb.Breadcrumb',
        ];

        public function beforeFilter()
        {
            parent::beforeFilter();
            $this->Breadcrumb->append('Mypage', ['controller' => 'users', 'action' => 'mypage']);
        }

        public function add()
        {
            ...

            $this->Breadcrumb->append('List Post', ['controller' => 'posts', 'action' => 'index']);
            $this->Breadcrumb->append('Add post');
        }

    }

```

in View

```php
<?php echo $this->element('Breadcrumb.breadcrumb'); ?>
```
