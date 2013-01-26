#CSS Colour Chart Generator
CSS Colour Chart is a PHP script to generate a chart of all your CSS files from an array of directories.

It scans all paths for *.css files, parses each CSS file to find all uses of hexadecimal, RGB, RBGA and color names,
and produces an html colour chart to show you the colours you have used and the files using them.

##What is its purpose?
I wrote it to speed up & simplify website design, whereby projects often end up with a range of similar colours in
a multitude of separate CSS files, rather than sticking to a set array of basic colours.

##Usage
<pre>
require('csscolorchart.php');
$cssPath = array('themes/'); // array (or string) of directories to scan for CSS files
echo '&lt;h1&gt;CSS colors found in: ' . (is_array($cssPath) ? implode($cssPath, ', ') : $cssPath) . '&lt;/h1&gt;';
$themes = new CssColorChart;
$themes-&gt;ignoreFiles = array('themes/thirdparty/'); // optional array of directories or files to exclude
echo $themes-&gt;listColors($cssPath);
</pre>

##Screenshot
![CSS Colour Chart screenshot](https://raw.github.com/axllent/csscolorchart/master/screenshot.png)
