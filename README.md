# PHP Memory Manager
## Instalation

1. Clone the repository.
2. Run `composer install`.

## Test

Run the test by executing `./vendor/bin/phpunit MemoryManagerTest.php` in CLI.

## Usage
Allocate memory:
```
  $buffer = '64987987654654813546846848464554545455';
  $size = 24;
  $manager = new MemoryManager($buffer, $size);
  $manager->alloc($size);
  $memory = $manager->memory;
```
`$memory` represents the memory machine.

Free up memory:
```
  $buffer = '64987987654654813546846848464554545455';
  $size = 24;
  $manager = new MemoryManager($buffer, $size);
  $manager->alloc($size);
  $manager->free($buffer);
```

`$buffer` will be set to `null` in order to represent a behavior like `unset()`.
