var content = [
	{
	title: 'Broker',
	description: 'Kenapa Broker',
	url: 'benefit.php'
	},
	{
	title: 'Home',
	description: 'Home Page',
	url: 'index.php'
	}
];

$('.ui.search')
.search({
	source : content,
	searchFields   : [
	'title'
	],
	searchFullText: false
});