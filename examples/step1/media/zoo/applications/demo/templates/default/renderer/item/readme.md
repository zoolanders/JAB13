# Item Render Layouts

Here you will store the item render layouts. You need just one of it in the simplest case, but you can add as many as you need

### Structure

Layouts can be stored directly in this folder, or they can be separated by type, using the type alias as the folder name (ie: article/teaser.php)
The ones stored in this folder will be global, while the ones in the type subfolder will be dedicated to that type.

It will be the job of the item.php template file to load the correct ones

### Required Files

In order for the renderer to work you'll need a template file (ie: full.php), the metadata.xml and the positions.xml file

- **metadata.xml**

Used for describing each layout. It's not really needed (zoo works even if you don't add it), but for better backend displaying
it's highly suggested to include it

- **positions.xml**

This files lists the positions available for each layout. Required for zoo to be able to let you assign the elements to the positions