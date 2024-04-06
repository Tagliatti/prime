# Sobre o projeto
Função para verificar se um número é primo.

## Testes
> Requisitos:
> - Docker
>
> ou
> - PHP 8.3
> - Composer 2

Para rodar os testes, uma das opções abaixo:
- Usando docker:
  ```bash
  docker run --rm -v "$PWD:/app" -w "/app" composer bash -c "composer install && vendor/bin/phpunit"
  ```
- Usando PHP 8.3 e composer:
  ```bash
  composer install
  vendor/bin/phpunit
  ``` 
