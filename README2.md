Mods by thebrentc

Scripts:
/* 
 *  holger1411 commented on 22 Sep 2016

basePaths.dev + 'js/child-theme-custom.js' loads a file called child-theme-custom.js from the /js/ folder of the /src directory.
So make sure you place your script here:
/src/js/child-theme-custom.js

And NOT in the root /js/ directory
If you want to load it from the root directory /Js folder load it with just:
'js/child-theme-custom.js'
and without the basePath.dev before
* 
* */

Styles:
Add your own CSS styles to /sass/theme/_child_theme.scss or [??] import you own files into /sass/theme/understrap-child.scss [/??]
[Or HACK just add to /css and enqueue in functions.php] 
