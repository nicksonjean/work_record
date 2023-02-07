# Work Record

Work Record (Registro de Trabalho) é um micro sistema de registro de trabalho, muito comum para PJs que precisam ter controle do registro de horas de trabalho prestados.

## Tecnlogias Utilizadas

* PHP 7.4+
  * PHP/DotEnv
  * PHP/I18N
    * Tradução para Inglês e Português do Brasil
* MySQL 8+/MariaDB 10+
* Bootstrap 5+

## Como Instalar

1) Este projeto necessita do Composer Instalado localmente caso não possua faça o Download do [Composer](https://getcomposer.org/download/);

2) Certifique-se de ter o PHP e MySQL/MariaDB instalados localmente, recomendo o [XAMPP](https://www.apachefriends.org/pt_br/download.html);

3) Para clonar este repositório, execute no terminal;

```#!/bin/bash
git clone https://github.com/nicksonjean/work_record.git
```

4) Para instalar todos os pacotes, execute o composer no terminal:

* Para Linux e Mac faça:

```#!/bin/bash
php composer.phar install
```

* Para Windows faça:

```#!/bin/bash
composer.bat install
```

5) Altere as variáveis de ambiente com as informações de conexão com o seu banco de dados MySQL/MariaDB no arquivo .env;

6) Importe o arquivo db.sql através do SGBD de preferência no seu banco de dados;

7) No navegador abrir o localhost do seu servidor php e navegador até a pasta onde clonou;

8) Caso queira visualizar alguns dados de teste, importe o arquivo fixtures.sql na sua instância de banco de dados; (Opcional)

## Como Usar

Por enquanto o controle dos meses e anos é feito através de query string, utilizando a seguinte nomenclatura:

```text
?lang=pt
&month=01 # para o mês de janeiro
&year=2023 # para o ano de 2023

```

Se as query strings forem omitidas então o mês atual do ano atual serão consideradas;
Toda a inteligência se encontra no banco de dados;

* A procedure work_record_report é responsável por calcular automáticamente as horas de trabalho com base nos campos start_time e final time e também realiza um somatório das horas de trabalho agrupadas por mês e ano;
* A view work_record_vw é utilizada para devolver os dados formatados para o front-end, sem a necessidade de outras conversões e formatações;

## ToDo

- [x] Implementar Internacionalização;
- [ ] Implementar Bootstrap DatePicker;
- [ ] Implementar Bootstrap TimePicker;
- [ ] Calcular no Front-end as horas trabalhadas no CRUD (Apenas Create e Update);
