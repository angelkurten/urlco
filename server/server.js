var app = require('express')();
var server = require('http').createServer(app);
var io = require('socket.io')(server);
var redis = require('redis');

server.listen(8890, '192.168.10.10');
io.on('connection', function (socket) {

    console.log("Client connected");
    var redisClient = redis.createClient();
    redisClient.subscribe('live.feed');
    console.log("Redis server running.....");

    redisClient.on("message", function(channel, message) {
        socket.emit(channel, message);
    });

    socket.on('disconnect', function() {
        redisClient.quit();
        console.log("Client disconnect");
    });

});