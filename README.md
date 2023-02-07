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

1) Certifique-se de ter o Composer instalado localmente, caso não possua, faça o download do [Composer](https://getcomposer.org/download/);

2) Certifique-se de ter o PHP e MySQL/MariaDB instalados localmente, sugir o [XAMPP](https://www.apachefriends.org/pt_br/download.html);

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

6) Importe o arquivo db.sql através do SGBD de preferência na sua instância de banco de dados;

7) No navegador abrir o localhost do seu servidor PHP e navegador até a pasta onde clonou este projeto;

8) Caso queira visualizar alguns dados de teste, importe o arquivo fixtures.sql através do SGBD de preferência na sua instância de banco de dados; (Opcional)

## Como Usar

O controle do idioma pode ser feito através de query string, utilizando a seguinte nomenclatura:

```text
?lang=en
```

_Se a query string "lang" for omitida então será considerado como idioma padrão aplicado ao .env;_

O controle dos meses e anos é feito através de query string, utilizando a seguinte nomenclatura:

```text
&month=01 # para o mês de janeiro
&year=2023 # para o ano de 2023
```

_Se as query strings "month" e "year" forem omitidas então o mês e o ano atuais serão consideradas;_

Toda a inteligência se encontra no banco de dados;

* A procedure _work_record_report_ é responsável por realizar um somatório das horas de trabalho agrupadas por mês e ano, passada através dos parâmetros p_month e p_year respectivamente;
* A view _work_record_vw_ é utilizada para devolver os dados formatados para o front-end, sem a necessidade de conversões e formatações;
* A view _work_record_navigator_vw é utilizada para devolver um agrupamento de meses e anos, permitindo navegar entre eles no front-end;
* As triggers _work_record_before_insert_ e _work_record_before_update_ são responsáveis por registar o cálulo no campo elapsed_time a hora trabalhada a partir dos campos start_time e final_time;

## ToDo

- [x] Implementar Internacionalização (Apenas Inglês e Português);
- [x] Implementar DropDown para navegar por meses e anos;
- [ ] Implementar Bootstrap DatePicker;
- [ ] Implementar Bootstrap TimePicker;
- [ ] Calcular no Front-end as horas trabalhadas no CRUD (Apenas Create e Update);
