var http = require('http');

var server = http.createServer(function (req, res) {
    if (req.url === '/') {
        res.writeHead(200, {'Content-Type': 'text/plain'});
        res.end('Hello, Welcome to our application!\n');
    }
});

server.listen(3007, 'localhost');
console.log('Server running at http://localhost:3007/');
