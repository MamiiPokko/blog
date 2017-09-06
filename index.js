var users = require('./users');
var app = require('express')();

var bodyPaser = require('body-parser');

/* ใช้ port 7777 หรือจะส่งเข้ามาตอนรัน app ก็ได้ */
var port = process.env.PORT || 7777;

app.use(bodyPaser.json());
app.use(bodyPaser.urlencoded({
	extend: true
}));
 
/* Routing */
app.get('/', function (req, res) {
    res.send('<h1>Hello Node.js</h1>');
});
app.get('/users', function (req, res) {
    res.json(users.findAll());
});

app.get('/users/:id', function (req, res){
	var id = req.params.id;
	res.json(users.findById(id));
});

app.post('/newuser', function (req, res){
	var json = req.body;
	res.send('Add new ' + json.name + json.position + ' Completed!');
});
 
app.listen(port, function() {
    console.log('Starting node.js on port ' + port);
});