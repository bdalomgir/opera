# Opera

The Opera theme was inspired by work that Triplo did for the Twin Cities Opera Guild with a design 
by John Seymour Anderson of Triangle Park Creative. Certain elements of that design were carried 
over into this contrib theme. Most importantly, a stacked design of full width panels with 
background colors.

## Status

We just released an alpha version of this theme. We would love for some folks to test it out
and provide feedback and file bug reports. In the alpha stage we may still make 
changes that could effect end users. If you use a alpha version on a production site, you may not 
be able to upgrade without noticing some small changes on your site. 

Once we issue a stabile release, we will avoid any breaking changes within minor releases. At that
stage, all changes in minor releases will be backward compatible.  

## Who is this theme for?

The primary audience of this theme are individuals and organizations interested in any of the 
following:

- A flexible theme that allows for significant customization 
  without the need for any custom css. 
- Anyone interested in a single page website with many stacked
  panels. 
- (Future) Subthemers interested in inheriting any of the 
  previously mentioned features. 

![A screenshot of a site with stacked full width blocks and hero images.](https://simplo.site/files/opera-opera.png)

## Assumptions / Design or Theming Principles

- Trying to use REM as consistently as possible (lots of work to do)
- Minimize the need for ANY custom css, while leaving the possibily or 
  opportunity for users to create their own sub-theme if they choose. 

## Recommended Modules

Some specific modules that we think will improve your experience with this theme. 

- [Configurable Block Style](https://backdropcms.org/project/configurable_block_style)
- [Utility CSS](https://backdropcms.org/project/utlility_css)

## Goals

- Instructions for sub-theming (future)
- Compatible with color module (done)
- Provide default CSS files in simple CSS (done)
- Provide a SASS starter kit for sub-theming (future)
- Provide a straight CSS starter kit for sub-theming (future) 

## Instructions

One of the primary features of the Opera theme is the ability to build a layout using full width blocks 
with backgroud images and/or colors stacked one above the other. full-with layouts on the front page 
with To leverage these features you will need to follow the following instructions:

1) Be sure to use the Boxton layout on front page (for full width blocks with background colors)
2) Any blocks placed in content region of front page will automatically get assigned background colors based upon site color scheme
3) Choose from pre-defined color schemes in theme settings (or use color module to define your own)

If you use the Boxton layout for your front page. The following will be true:
1) The first and last block in the content region will have a white background with black text. 
2) Any blocks in the content region between the first and last, will cycle through a list of three colors schemes set in the themes settings.
3) Any hero blocks will start out with min-height of 450px.

## Features implemented so far

Please, feel free to provide feedback on these features and/or the implementation.

1) This theme has a the following template to override Boxton when it is on the front page. The layout--boxton--front.tpl.php removes the container class from the content region and header allowing blocks to spread out the full width of the screen. An override of block.tpl.php puts the container class into the title and content of any block found on the front page. 
2) We have provided template files for all of the core templates that move the top region above the default locaton for title and tabs. This puts the default position for breadcrumbs above the page title and tabs. We now have the possibility to make other adjustments in all core layouts. 
3) So far, this theme inherits a lot of it's default styling from Basis and Tatsu, but with improvements. That may change over time.
4) We have added a setting to load Bootstrap CSS from CDN. 

Here is a 30 minute video discussion of several members of the Backdrop CMS community talking about how to build a contrib theme like this one. https://youtu.be/BeEzXuwLxo8 

## Utility CSS Classes

Font Styles
- color-inverse
- font-size-xxxxlarge
- font-size-xxxlarge
- font-size-xxlarge
- font-size-xlarge
- font-size-large
- font-size-medium
- font-size-normal
- font-size-small
- font-size-xsmall
- font-weight-bold
- font-weight-normal
- font-weight-light
- font-style-italic
- font-style-normal

Background Colors
- opera-bg1-black
- opera-bg1-blue
- opera-bg1-brown
- opera-bg1-firebrick
- opera-bg1-green
- opera-bg1-indigo
- opera-bg1-khaki
- opera-bg2-lemonchiffon
- opera-bg2-olive
- opera-bg2-orange
- opera-bg2-pink
- opera-bg2-red
- opera-bg2-sienna
- opera-bg3-silver
- opera-bg3-tan
- opera-bg3-teal
- opera-bg3-violet
- opera-bg3-white
- opera-bg3-yellow

Text alignment
- text-align-center
- text-align-right
- text-align-left

## Installation

- Install this module using the official Backdrop CMS instructions at
  https://backdropcms.org/guide/modules.

## Credits

Default hero image = Vienna State Opera, Jiuguang Wang
https://www.flickr.com/photos/jiuguangw/5943433030
Attribution-ShareAlike 2.0 Generic
https://creativecommons.org/licenses/by-sa/2.0/


## Current maintainers

- [Tim Erickson](https://github.com/stpaultim) - [Simplo](https://www.simplo.site) by [Triplo](https://www.triplo.co)

## License   

This project is GPL v2 software. See the LICENSE.txt file in this directory 
for complete text.


