fs = require('fs');
fs.readFile('./A-content/new/CH4.md', 'utf8',function(err,data){
	if (err) {
		return console.log(err);
	}
	var showdown  = require('showdown'),
	converter = new showdown.Converter(),
	html      = converter.makeHtml(data);

	console.log(html);
});

