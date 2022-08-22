const express = require('express');

const app = express();


const server = require('http').createServer(app);


const io = require('socket.io')(server, {
    cors: { origin: "*"}
});

io.on('connection', (socket) => {
    console.log('connection');
    socket.on('redditionData', (message) => {
        console.log(message);
        // io.sockets.emit('sendChatToClient', message);
        socket.broadcast.emit('redditionData', message);
    });

    socket.on('disconnect', (socket) => {
        console.log('Disconnect');
    });
});

server.listen(4000, () => {
    console.log('Server is running');
});
