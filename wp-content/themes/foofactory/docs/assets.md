# Assets
Assets are broken up into some easy to understand folders.

### Fonts
This is where you put any fonts you would like to call. They will be moved into the `dist` folder under the folder `dist/fonts`.

### Img
This will be moved from `img` into `dist/img` and only move the  images called by the scss. (Needs Testing)

### Js
The `main.js` is the main driver of webpack and allows for easy to use require statements to import JavaScript dependencies. This theme does not use Bower. Currently a work in progress but we will be implementing the module design pattern into the included JavaScript files.

`.bootstraprc` is used to control any js included in bootstrap.

### Scss
bundle.scss controls any custom scss you have in your project. It works on includes and will extract any includes into one file final file `dist/bundle.css`. 

`npm.scss`is used to call any scss from npm packages for example bootstrap or owl carousel.

Webpack gets bundle.css from the `main.js` file and you could in theory call multiple css files in main.js and create multiple end points.

### Fields
This is Json fields for each part of the builder, this is included in Crate and is effected by Crate changes.
 