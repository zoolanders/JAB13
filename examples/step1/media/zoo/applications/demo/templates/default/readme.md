# Basic files and folder for a template.

For a template to work, you need the files listed below, and at least a renderer layout for an item
For information on the renderer layouts, look at the renderer/item/readme.md file

### Basic Template Files

- **template.xml**

The only required file. It describes the template and contains the various template parameters

- **frontpage.php**

This file will be used when you link to your App frontpage. You can skip it, but know that if you use the Frontpage link
it will result in a 500 error

- **category.php**

This file will be used when you link to your App category, and whenever you click on a category link.
You can skip it, but know that if you ever visit a category page it will result in a 500 error

- **item.php**

This file will be used when you link to any item in your App, and whenever you click on a item link.
You can skip it, but know that if you ever visit an item page it will result in a 500 error

- **tag.php**

This file will be used when you link to your App tags, and whenever you click on a tag link.
You can skip it, but know that if you ever visit a tag page it will result in a 500 error

### Advanced Template Files

- **submission.php**

This file will be used when you go to a new submission, or edit an existing one.
You can skip it, but know that if you ever go to a submission page, it will result in a 500 error.

- **mysubmissions.php**

This file will be used when you go to the user submissions list.
You can skip it, but know that if you ever go to the submissions page, it will result in a 500 error.

- **alphaindex.php**

This file will be used when you click on an alphaindex letter. You can skip it, but know that if you use the Alphaindex feature in your app,
it will result in a 500 error


### Mail Template Files

- **mail.comment.admin.php**

Mail template for notification to administrators about a new comment. If you can use the following variables in the template
	
	- $item	 			// The item object
	- $comment 			// The comment object
	- $website_name		// The website name
	- $website_link		// The website full link
	- $comment_link		// The comment full link
	- $item_link		// The item full link

- **mail.comment.reply.php**

Mail template for notification for a new reply on a watched topic. If you can use the following variables in the template
	
	- $name	 			// The user name
	- $item	 			// The item object
	- $comment 			// The comment object
	- $website_name		// The website name
	- $website_link		// The website full link
	- $comment_link		// The comment full link
	- $item_link		// The item full link
	- $unsubscribe_link // The usubscribe link

- **mail.submission.new.php**

Mail template for notification to administrators about a new submissions. If you can use the following variables in the template
	
	- $item	 			// The item object
	- $website_name		// The website name
	- $website_link		// The website full link
	- $item_link		// The item full link


