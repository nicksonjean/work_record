# work_record
 
Work Record (Registro de Trabalho) é um micro sistema de registro de trabalho, muito comum para PJs que precisam ter controle do registro de horas de trabalho prestados.

## Tecnlogias Utilizadas:

* PHP 7.4+
* MySQL 8+/MariaDB 10+
* Bootstrap 5+

## Como Instalar

* Certifique-se de ter o PHP e MySQL/MariaDB instalados localmente;
* Clone este repositório;
* Altere as variáveis de conexão com o seu banco de dados no arquivo .env;
* Importe o arquivo db.sql na sua instância de banco de dados;
* No navegador abrir o localhost do seu servidor php e navegador até a pasta onde clonou;
* Caso queira visualizar alguns dados de teste, importe o arquivo fixtures.sql na sua instância de banco de dados; (Opcional)

## Como Usar
Por enquanto o controle dos meses e anos é feito através de query string, utilizando a seguinte nomenclatura:
```
?mes=01 # para o mês de janeiro
&ano=2023 # para o ano de 2023
```
Se as query strings forem omitidas então o mês atual do ano atual serão consideradas;
Toda a inteligência se encontra no banco de dados;

* A procedure work_record_report é responsável por calcular automáticamente as horas de trabalho com base nos campos start_time e final time e também realiza um somatório das horas de trabalho agrupadas por mês e ano;
* A view work_record_vw é utilizada para devolver os dados formatados para o front-end, sem a necessidade de outras conversões e formatações;

## ToDo

- [ ] Implementar Bootstrap DatePicker;  
- [ ] Implementar Bootstrap TimePicker;
- [ ] Calcular no Front-end as horas trabalhadas no CRUD (Apenas Create e Update);