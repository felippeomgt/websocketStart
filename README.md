#Comandos 

#Para instalar as dependencias do Node
npm install -g node-gyp
npm install websocket
npm install axios

#Para rodar o websocket
node server.js

#Para iniciar o server php para os testes de comunicação
php -S localhost:8081

#Para testar no Browser
cliente = new WebSocket('ws://localhost:8080/', 'echo-protocol');
cliente.send('teste');

