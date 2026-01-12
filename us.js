let http = require('http');
let hostname = 'us.example.com';

  if (req.url === '/') {
    res.writeHead(200, { 'Content-Type': 'text/plain' });
    res.end('Hello from the US server!\n');
  }
  else if (req.url === '/status') {
    res.writeHead(200, { 'Content-Type': 'application/json' });
    res.end(JSON.stringify({ status: 'US server is running' }));
  } else {
    res.writeHead(404, { 'Content-Type': 'text/plain' });
    res.end('Not Found\n');
};
server.listen(3009, 'localhost', () => {
  console.log(`US Server running at http://${hostname}:3009/`);
});