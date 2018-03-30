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

  // Listen to the position x events
  socket.on('position x', function(posX){

    // Write the message on the server console
    console.log('Mouvement X : ' + posX);
    // Broadcast the message on all the connected clients
    io.emit('position x', posX);

  });

  // Listen to the position y events
  socket.on('position y', function(posY){

    // Write the message on the server console
    console.log('Mouvement Y : ' + posY);
    // Broadcast the message on all the connected clients
    io.emit('position y', posY);

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