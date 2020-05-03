
# CheckPoint

Projeto do Time 9 da 2º Edição do MegaHack oferecido pela Shawee.

## Instalação

Faça o 'git clone' do projeto. Se tiver problemas com o tamanho do nome da pasta execute o comando do git para permitir que complete o clone:

```git
git config --system core.longpaths true
```

Faça download do composer no site https://getcomposer.org/, após instalado execute os seguintes comandos no bash/console na raiz do projeto:

```bash
composer global require laravel/installer
composer install
```

Através do bash/console acesse a raiz do projeto e deixe executando:
```bash
php artisan generate:key
php artisan serve
```
E acesse o link na sua máquina: http://127.0.0.1:8000/
