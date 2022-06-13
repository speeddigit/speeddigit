const { SerialPort } = require('serialport');

const port = new SerialPort({
    path: 'COM3',
    baudRate: 57600
});

const person = {
    weight: 1
}

port.write(JSON.stringify(person));