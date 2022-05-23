# "null" Sage/Tailwind Demo

## Requirements

Make sure all dependencies have been installed before moving on:

- [Acorn](https://docs.roots.io/acorn/2.x/installation/) v2
- [WordPress](https://wordpress.org/) >= 5.9
- [PHP](https://secure.php.net/manual/en/install.php) >= 7.4.0 (with [`php-mbstring`](https://secure.php.net/manual/en/book.mbstring.php) enabled)
- [Composer](https://getcomposer.org/download/)
- [Node.js](http://nodejs.org/) >= 16
- [Yarn](https://yarnpkg.com/en/docs/install)
- (Windows users) [WSL environment](https://docs.microsoft.com/en-us/windows/wsl/)

## Theme installation
- Make sure that you have [Acorn installed](https://docs.roots.io/acorn/2.x/installation/).
- Clone this repository into your WordPress themes directory
- Navigate to the new "null-sage-demo" directory and run:

```sh
$ composer install
```
```sh
$ yarn
```
```sh
$ yarn build
```
- Windows users must run the yarn commands in your [WSL environment](https://docs.microsoft.com/en-us/windows/wsl/)
- Login to the WordPress dashboard and enable the "Sage Starter Theme"
- Your WordPress website should now have the "null" landing page. Congrats!

## ACF Demo
- Make sure [Advanced Custom Fields by "Delicious Brains"](https://www.advancedcustomfields.com/) is installed
- Create a new page, or Edit an existing page, and change its Template to "Landing Page"
- A new field labeled "Headline Text" should be available in the Gutenberg Editor page
- You can use this field to alter the text of the headline element on the Page you are currently editing.