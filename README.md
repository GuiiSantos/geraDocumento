# 📌 Gerador de documento em PDF
### Teste prático para vaga de Analista de desenvolvimento

## Conteúdos

- [Como iniciar o Projeto](#como-iniciar-o-projeto)
- [Como iniciar o Composer](#como-iniciar-o-composer)
- [PHPUnit](#phpunit)
- [Sobre o Projeto](#sobre-o-projeto)


## Como iniciar o Projeto
- utilize esse comando abaixo na raiz do projeto
```
docker-compose up
```
- E será baixado todas as dependências do docker
- Digite localhost:80 no navegador como na imagem abaixo <br/><br/>
![image](https://user-images.githubusercontent.com/72467933/203935583-e2a547c6-7b44-4bdf-8dd1-cdfcdf61da20.png)<br/>
- A porta é o padão


## Como iniciar o Composer
- dentro da pasta public utilize o comando abaixo no terminal
```
composer update
```
- E será criada a pasta vendor com todas as dependências, e o projeto estará funcionando

## PHPUnit
- Para verificar os testes do phpunit ultilize o comando abaixo dentro da pasta public
```
composer test
```
- esse comando é um atalho criado no composer.json <br/><br/>
![image](https://user-images.githubusercontent.com/72467933/203938730-abb59dcc-920c-4518-ab6b-876bcd5d3f3a.png) <br/>
- o teste vai retornar o resultado


## Sobre o projeto

<p>O projeto foi desenvolvido com arquitetura de código limpo, usado programação Orientado a Objetos, com rotas para facilitar o acesso, e foi usado a api do dompdf para gerar documento PDF. </p>
