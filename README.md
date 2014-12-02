Angel Sitemap
==============
This is a sitemap module for the [Angel CMS](https://github.com/CharlesAV/angel).

The module will create both a search page (/search) which you can send a ?q={search term} to which will then search for results in all linkable models.

Installation
------------
Add the following requirements to your `composer.json` file:
```javascript
"repositories":
[
	{
		"type": "vcs",
		"url": "https://github.com/CharlesAV/angel-search"
	}
],
"require": {
	"angel/search": "dev-master"
},
```

Issue a `composer update` to install the package.

Add the following service provider to your `providers` array in `app/config/app.php`:
```php
'Angel\Search\SearchServiceProvider'
```
