# Projeto Tabuada usando Rotas e arquitetura MVC

Este é um projeto para ensino de uso de Rotas em PHP e de arquitetura MVC (Model-View-Controller). O objetivo deste projeto é aprender a criar uma aplicação de cálculo de tabuada com PHP e utilizar rotas e urls amigáveis, bem como entender como ocorre a comunicação entre as camadas na arquitetura MVC.

## Pré-requisitos

* Apache (https://www.apachefriends.org/). 

* Cliente Git (https://git-scm.com). Verifique a instalação digitando:
```bash
$ git --version
```

## Instalação

Clonar o repositório do GitHub.
```bash
$ git clone https://github.com/anfer86/teaching-php-projeto-tabuada-mvc.git
$ cd teaching-php-projeto-tabuada-mvc
```

Adicionar um Virtual Host para o nosso projeto. Para isso, abrir o arquivo `httpd-vhosts.conf` dentro do diretório de instalação do Apache. Por ex. `c:/xampp/apache/conf/extra/httpd-vhosts.conf`. Vamos adicionar um endereço local para acessar a nossa aplicação no endereço `projeto-tabuada-routes.localhost`.
```bash
<VirtualHost *:80>
DocumentRoot "C:\xampp\htdocs\teaching-php-projeto-tabuada-mvc"
ServerName projeto-tabuada-mvc.localhost
<Directory "C:\xampp\htdocs\teaching-php-projeto-tabuada-mvc">
</Directory>
</VirtualHost>
```

## Utilização

Para rodar a aplicação iniciar o servidor Apache e entrar no endereço `http://projeto-tabuada-mvc.localhost`. 

## Desenvolvimento

O projeto foi desenvolvido com:

* [Sublime Text](https://www.sublimetext.com/) - Editor de texto para programação

Está sendo desenvolvidos um documento de instruções para o desenvolvimento desta aplicação, que ficará disponível no arquivo `instructions/instructions.md`.

## Autores

* **Carlos Andres Ferrero** - [anfer86](https://github.com/anfer86)