var content = [
	{
	title: 'Why Broker',
	description: 'Why Broker',
	url: 'why-broker.php'
	},
	{
	title: 'Benefit',
	description: 'Benefit Insurance',
	url: 'benefit.php'
	},
	{
	title: 'Home',
	description: 'Home Page',
	url: 'index.php'
	},
	{
	title: 'Profile',
	description: 'Profile',
	url: 'profile.php'
	},
	{
	title: 'Vision',
	description: 'Vision & Mission',
	url: 'vision.php'
	},
	{
	title: 'Insurance',
	description: 'Insurance Program',
	url: 'insurance-program.php'
	},
	{
	title: 'Career',
	description: 'Career',
	url: 'career.php'
	},
	{
	title: 'Contact',
	description: 'Contact',
	url: 'contact.php'
	},
	{
	title: 'Client',
	description: 'Client Program',
	url: 'client.php'
	},
	{
	title: 'Management',
	description: 'Management ',
	url: 'management.php'
	},
	{
	title: 'Work Philosopy',
	description: 'Work Philosopy Program',
	url: 'work-philosopy.php'
	},
	{
	title: 'Insurance',
	description: 'Insurance',
	url: 'insurance.php'
	},
	{
	title: 'Our Team',
	description: 'Our Team',
	url: 'our-team.php'
	},
	{
	title: 'Legality',
	description: 'Legality',
	url: 'legality.php'
	},
	{
	title: 'Advocacy Claim',
	description: 'Advocacy Claim',
	url: 'claim-advocacy.php'
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