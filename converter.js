fs = require('fs');
fs.readFile('./Ch7.md', 'utf8',function(err,data){
	if (err) {
		return console.log(err);
	}
	var showdown  = require('showdown'),
	converter = new showdown.Converter(),
	html      = converter.makeHtml(data);

	console.log(html);
});

