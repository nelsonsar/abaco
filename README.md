# Dojo para TDD

## Desafio

Criar uma forma de fazer as operações de adição e de subtração utilizando o objeto ```Abaco\Matrix```.

### Pra quem faltou nas aulas de matemática...

#### Adição de matrizes

Para adicionarmos duas ou mais matrizes é preciso que todas elas tenham o mesmo número de linhas e de colunas. A soma dessas matrizes irá resultar em outra matriz que também terá o mesmo número de linhas e de colunas. Os termos deverão ser somados com os seus termos correspondentes.
Concluímos que:

Dada duas matrizes, A e B, as duas de ordem m x n. Então, A + B = C, com
C de ordem m x n ↔ a11 + b11 = c11.

#### Subtração de matrizes

Para efetuarmos a subtração de duas matrizes, as matrizes subtraídas devem ter a mesma ordem (mesmo número de linhas e colunas) e a matriz obtida com a subtração (matriz diferença) também deve ter o mesmo número de linhas e colunas que as matrizes subtraídas. Cada elemento de uma matriz deve ser subtraído com o elemento correspondente da outra matriz.

Concluímos que:

Dada duas matrizes, A e B, as duas de ordem m x n. Então A – B = C de
ordem m x n ↔ a11 – b11 = c11.

### Como rodar os testes

Rode o composer install antes:

```$ php composer.phar install```

```$ vendor/bin/phpunit --bootstrap=bootstrap.php tests/```
