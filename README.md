# Ativar o idioma pt-BR (português brasileiro) para Laravel 10.x

## Instalação

1.  Instale o pacote

```shell
composer require christianoerick/laravel-pt-br:dev-main
```

2.  Publique as traduções

```shell
php artisan vendor:publish --tag=laravel-pt-br
```

3.  Configure o Framework para utilizar 'pt-BR' como linguagem padrão

```
// Altere o valor de "locale" do arquivo config/app.php para:
'locale' => 'pt-BR',
```

4. Caso deseje, configure o Framework para utilizar 'America/Sao_Paulo' como data hora padrão

```
// Altere o valor de "timezone" do arquivo config/app.php para:
'timezone' => 'America/Sao_Paulo',
```

## Versões do Laravel suportadas

-   10.x