# Web socket

Projeto de testes para substituição da tecnologia atual de websockets no CRM

## Comandos para rodar

Para executar esse projeto, seguem instruções:

### Prerequisitos

O que você precisa ter instalado antes de utilizar esse projeto

```
NodeJS
Php 7.1+
cmder (Se estivar usando Windows)
```

### Setup

- Abra um terminal (ou o cmder no windows)
- Navegue até o diretório desse projeto
- Para instalar as dependencias execute os seguintes comandos:

```
npm install -g node-gyp
npm install websocket
npm install axios
```

Para iniciar o server PHP para os testes de comunicação abra outra aba do terminal e execute

```
php -S localhost:8081
```

Por fim execute o arquivo server.js 

```
node server.js
```

## Rodando os testes

No browser, abra o console de desenvolvedor (F12 na maioria dos navegadores) e execute na aba 'console':

```
cliente = new WebSocket('ws://localhost:8080/', 'echo-protocol');
cliente.send('teste');
```

O tamanho da mensagem que passar via parametro no método send será o tempo em segundos que o teste.php vai levar para responder


## Autor

* **Felippe Ribeiro** 

