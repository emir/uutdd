## Code Kata: Calculator

Code kata example for TDD presentation at Uskudar University.

<img src="https://raw.githubusercontent.com/emir/uutdd/master/kata.png">

Installation
------------

Clone repository:

```bash
git clone https://github.com/emir/uutdd.git
```

Install dependencies:

```bash
composer install
```

Usage
------------

Running tests:

```bash
./vendor/bin/phpunit --bootstrap src/Calculator.php --colors="always" tests
```

Generate Code Coverage and Dox:

```bash
./vendor/bin/phpunit --bootstrap src/Calculator.php --colors="always" --testdox tests --coverage-html coverage --whitelist="src"
```

License
-------------

[MIT License](http://emir.mit-license.org/)