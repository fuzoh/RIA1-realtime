/**
 * Node.js script (server side)
 * 
 * @author Bastien
 */


/**
 * Library imports and bootstrap
 */
// load express (just for the http router)
var app = require('express')();
// Require node.js default http server
var http = require('http').Server(app);
// Require soket.io to use websokets
var io = require('socket.io')(http);

/**
 * Expose a simple route to load the base html page
 */
app.get('/', function(req, res){
  res.sendFile(__dirname + '/index.html');
});

/**
 * Websockets events
 */
// Wen a client connects
io.on('connection', function(socket){

  console.log('a user connected');

  // When an event is fire on the "chat message" channel
  socket.on('chat message', function(msg){

    // Write the message on the server console
    console.log('message: ' + msg);
    // Broadcast the message on all the connected clients
    io.emit('chat message', msg);

  });

  // Message when a user quit the connexion
  socket.on('disconnect', function(){
    console.log('user disconnected');
  });

});

// Start the node js http server
http.listen(3000, function(){
  console.log('listening on *:3000');
});