(function() {
	var Realmac = Realmac || {};

	Realmac.meta = {
		
		// Set the browser title
		//
		// @var String text
		setTitle: function(text) {
			return document.title = text;
		},
		
		// Set the content attribute of a meta tag
		//
		// @var String name
		// @var String content
		setTagContent: function(tag, content){
			// If the tag being set is title
			// return the result of setTitle
			if ( tag === 'title' )
			{
				return this.setTitle(content);
			}
			
			// Otherwise try and find the meta tag
			var tag = this.getTag(tag);
			
			// If we have a tag, set the content
			if ( tag !== false )
			{
				return tag.setAttribute('content', content);
			}
			
			return false;
		},
		
		// Find a meta tag
		//
		// @var String name
		getTag: function(name) {
			var meta = document.querySelectorAll('meta');
			
			for ( var i=0; i<meta.length; i++ )
			{
				if (meta[i].name == name){
					return meta[i];
				}
			}
			
			var tag = document.createElement('meta');
			tag.name = name;
			document.getElementsByTagName('head')[0].appendChild(tag);
			
			return tag;
		}
	};
 
	// Object containing all website meta info
	var websiteMeta = {"category-personal.html":"A list of posts in category &ldquo;Personal&rdquo;","tag-quam.html":"Posts tagged &ldquo;Quam&rdquo;","tag-aliquet.html":"Posts tagged &ldquo;Aliquet&rdquo;","tag-non.html":"Posts tagged &ldquo;Non&rdquo;","tag-maecenas.html":"Posts tagged &ldquo;Maecenas&rdquo;","tag-fauibus.html":"Posts tagged &ldquo;Fauibus&rdquo;","tag-pede.html":"Posts tagged &ldquo;Pede&rdquo;","tag-cursus.html":"Posts tagged &ldquo;Cursus&rdquo;","tag-tellus.html":"Posts tagged &ldquo;Tellus&rdquo;","archive-sep-2014.html":"Archives for Sep 2014","tag-ipsum.html":"Posts tagged &ldquo;Ipsum&rdquo;","category-apple.html":"A list of posts in category &ldquo;Apple&rdquo;","tag-lorem.html":"Posts tagged &ldquo;Lorem&rdquo;","tag-quis.html":"Posts tagged &ldquo;Quis&rdquo;","category-work.html":"A list of posts in category &ldquo;Work&rdquo;","category-humor.html":"A list of posts in category &ldquo;Humor&rdquo;","tag-sed.html":"Posts tagged &ldquo;Sed&rdquo;","tag-orci.html":"Posts tagged &ldquo;Orci&rdquo;"};
 
	// pageId must match the key in websiteMeta object
	var url = window.location.pathname;
	var pageId = url.substring(url.lastIndexOf('/')+1);
	if (!pageId || pageId.length == 0){
		pageId = 'index.html';
	}
	pageMeta = websiteMeta[pageId];
 
	// If we have meta for this page
	if (pageMeta){
		Realmac.meta.setTagContent('description', pageMeta);
	}
 
 })();