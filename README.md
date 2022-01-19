# WP-Shortcode-NameMC-Serverbanner
A Wordpress plugin that adds a shortcode for NameMC's serverbanner

## Previews

### Full width
![](https://i.imgur.com/pPuzmZJ.jpg)

### Responsive downsizing
![](https://i.imgur.com/uCzyNiz.jpg)

## How to use:
If you use Gutenberg (Wordpress' standard editor nowadays) use the shortcode block (`/shortcode`), enter `[mcbanner server="example.com"]` and replace *example.com* with your server's IP/domain.
If you use TinyMCE, you can just paste the shortcode into the editor.

Tip: Standard width and height are 720px and 90px respectively. You can also pass `width=""` and `height=""` parameters to the shortcode to use a static size without auto downsizing, eg: `[mcbanner server="example.com" width="300" height="50"]`

## Installation
1. [Download the plugin](https://github.com/1LiterZinalco/WP-Shortcode-NameMC-Serverbanner/archive/refs/heads/main.zip)
2. Open your Wordpress Dashboard and go to "Plugins" > "Add New" > "Upload Plugin"
3. Select the .zip file you downloaded and click "Install Now"
4. Activate the plugin

## Licensing
This plugin has originally been released to [Wordpress' plugin repository](https://wordpress.org/plugins/domisiding-minecraft-serverbanner-namemc/) by [Domisiding](https://domisiding.de). It is licensed under the GPLv2, which can be found in the LICENSE file. It seems Domisiding has neither updated or uploaded the code anywhere else (like on GitHub) so I figured I'd clean the code up a little bit and release it here.
