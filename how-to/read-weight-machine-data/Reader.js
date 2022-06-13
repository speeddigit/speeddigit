const { SerialPort } = require('serialport');

const port = new SerialPort({
    path: 'COM5',
    baudRate: 57600
});

port.on('data', line => console.log(line.toString('utf-8')));