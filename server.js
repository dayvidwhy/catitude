var phpServer = require('node-php-server');
 
// Create a PHP Server
var serverOptions = {
    port: 8000,
    hostname: '127.0.0.1',
    base: '.',
    keepalive: false,
    open: false,
    bin: 'php',
    router: __dirname + '/server.php'
};

console.log("Starting server at.. " + serverOptions.hostname + ':' + serverOptions.port);
phpServer.createServer(serverOptions);
