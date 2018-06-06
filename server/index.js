
const server = require('http').createServer();

const io = require('socket.io')(server, {
  path: '/',
  serveClient: false,
  // below are engine.IO options
  pingInterval: 10000,
  pingTimeout: 5000,
  cookie: false
});


io.on('connect', function(socket) {
	
	socket.emit('s',{s:'juan'});

 	console.log("se conecto");

 	 socket.on('cambio', function (m) {
            socket.broadcast.emit('cambioa',m);
            console.log(m);
         
        });

       socket.on('new', function (m) {

        
            socket.broadcast.emit('nuevo',m);
            
         
        });

   


 	
 	

});






server.listen(3000);