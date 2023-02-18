# PHP Brain Games

### Hexlet tests and linter status:
[![Actions Status](https://github.com/bobrovdimal/php-project-45/workflows/hexlet-check/badge.svg)](https://github.com/bobrovdimal/php-project-45/actions)
[![Maintainability](https://api.codeclimate.com/v1/badges/daf418b5545f96aec86e/maintainability)](https://codeclimate.com/github/bobrovdimal/php-project-45/maintainability)

> «Игры разума» — набор из пяти консольных игр, построенных по принципу популярных мобильных приложений для прокачки мозга. Каждая игра задает вопросы, на которые нужно дать правильные ответы. После трех правильных ответов считается, что игра пройдена.

## Требования для установки

composer
php 7.4 или выше
наличие пути к исполняемым файлам Composer в переменной PATH:

```bash
export PATH="$PATH:$HOME/.config/composer/vendor/bin"
```

## Установка
```sh
$ git clone https://github.com/bobrovdimal/php-project-45.git

$ make install
```
## Процесс устанвоки и первая игра brain-even

Brain-even - пользователю показывается случайное число. И ему нужно ответить yes, если число чётное, или no — если нечётное.

[![asciicast](https://asciinema.org/a/kfMO0x9sM4b9ujNMT5lDMr9hQ.svg)](https://asciinema.org/a/kfMO0x9sM4b9ujNMT5lDMr9hQ)

## Вторая игра brain-calc

Brain-calc - пользователю показывается случайное математическое выражение, например 35 + 16, которое нужно вычислить и записать правильный ответ.

[![asciicast](https://asciinema.org/a/US1iJOcnK4Yyuw6ZZFduyXBnh.svg)](https://asciinema.org/a/US1iJOcnK4Yyuw6ZZFduyXBnh)

## Третья игра brain-gcd

Brain-gcd - пользователю показывается два случайных числа, например, 25 50. Пользователь должен вычислить и ввести наибольший общий делитель этих чисел.

[![asciicast](https://asciinema.org/a/az8fJGioNDlCxqzxF0G9z3BSr.svg)](https://asciinema.org/a/az8fJGioNDlCxqzxF0G9z3BSr)

## Четвертая игра brain-progression

Brain-progression - отображается ряд чисел, образующий арифметическую прогрессию, одно из чисел спрятано. Игрок должен определить это число

[![asciicast](https://asciinema.org/a/qnkfiucwFkIwPttykX6lY6E8T.svg)](https://asciinema.org/a/qnkfiucwFkIwPttykX6lY6E8T)

## Пятая игра brain-prime

Brain-prime - игроку выводится случайно число и нужно пределить является ли оно простым. Простое число - это число, которое делится только на себя и на единицу. Например: 11.

[![asciicast](https://asciinema.org/a/9uH8nQQ0Z73jQl4XI3Oqn9Nv6.svg)](https://asciinema.org/a/9uH8nQQ0Z73jQl4XI3Oqn9Nv6)
