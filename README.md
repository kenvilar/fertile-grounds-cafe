Fertile Grounds Cafe
===

Hi. I'm a starter theme called `fertilegroundscafe`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A custom header implementation in `inc/custom-header.php` just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `assets/js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------
* Run SASS using this command `sass sass/style.scss assets/css/style.css` or 
* Run and watch SASS using this command `sass --watch sass/style.scss:assets/css/style.css` or
* Run, watch, and minify the css files using these commands     
`sass --watch sass/style.scss:assets/css/style.css --style expanded`    
and     
`sass --sourcemap=none --watch assets/css/style.css:assets/css/style.min.css --style compressed --scss`     
(Note that I add --sourcemap=none in minified css for production)
* Run this command to minify the custom js
`NODE_ENV=production webpack --watch`
* If you have a different url in your local just add on it in this line
`return in_array( $server_name, array( 'localhost', '127.0.0.1', 'fertilegrounds.dev' ) );` at wp-content/themes/fertilegroundscafe/inc/ directory


Now you're ready to go! The next step is easy to say, but harder to do: make an awesome Fertile Grounds Cafe WordPress theme. :)

Good luck!
