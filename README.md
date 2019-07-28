# Block Study
The 5.0 release of WordPress debuted in December 2018, and with it comes
a brand new editor called Gutenberg. The purpose of this project is
to serve as a study on how to register custom blocks with the new editor,
including default methodologies provided by WordPress, and alternate
methodologies provided by third-party plugins such as Advanced Custom
Fields Pro.

## Installation
Ideally, you'll want to install this project using Composer from either
the root directory or wp-content directory of your WordPress install,
making sure to have your extra.installer-paths object properly configured
in your composer.json file, and making sure to include the vendor
directory so that classes are autoloaded.

`composer require jmichaelward/block-study`

Your extra object should look something like this:

```
"extra": {
    "installer-paths": {
        "plugins/{$name}": ["type:wordpress-plugin"]
    }
}
```
This will ensure the plugin winds up in your plugins directory. If
running `composer install` from the WordPress root, the key in that
object should point to "wp-content/plugins/{$name}" or equivalent,
if you have a non-traditional wp-content directory structure.

## Setup
Once installed, you'll need to compile assets for the sample Gutenberg
blocks to load. Change directories to the `block-study` plugin, then
run:

- yarn install
- yarn build

This will generate an `assets/dist/` directory under `/blocks/`. The
individual Gutenberg blocks are set up to look for their respective
`blocks.js` files relative to that path.

Note: this project is also an experimentation with
[Parcel](https://parceljs.org/), an application bundler alternative to
Webpack.

To change the functionality of the individual Gutenberg blocks, run
`yarn dev`, and modify the `block.js` file from within the `assets`
directory of the block you wish to update.
