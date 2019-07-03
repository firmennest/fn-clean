# fn-clean
firmennest base template

# Version History

__1.3.7 Jul 3, 2019__<br>
- added space to custom class attribute (fn_icon) in shortcodes.php

__1.3.6 Jun 24, 2019__<br>
- removed cookie notice in header.less
- added cookie notice in footer.less
- fixed css in assets/theme/less/theme/header.less:
- fontawesome update to 5.9.0 #10

__1.3.5 Apr 26, 2019__<br>
- uk-button-default styles added in base.less
- often used variables added in variables.less
- shortcodes for owner and mobile added, fn-icon shortcode renamed to icon in shortcodes.php
- added option for owner and mobile in administration.php
- post thumbnail fallback added in index.php, archive.php & single.php
- typo fixed + uk-width-1-1 removed in template/footer-center.php
- google+ call removed, uk-width-1-1 removed in template/footer-bottom.php

__1.3.4 Feb 23, 2019__<br>
- removed user-scalable=no for google audit
- added dropdown styles and changed offcanvas styling in assets/theme/less/header.less
- updated logo call in template/header/center.php
- changed fa-phone icon in template/footer/center.php
- added uikit color fix in assets/theme/less/header.less
- updated css & codekit files to match recent changes

__1.3.3 Feb 5, 2019__<br>
- fixed order for js files in lib/theme/assets.php

__1.3.2 Jan 11, 2019__<br>
- Happy New Year!
- fontawesome update to v5.6.3 #10

__1.3.1 Dez 21, 2018__<br>
- added analytics-shortcode to shortcodes.php

__1.3.0 Dez 12, 2018__<br>
- changed cookie- & analytics-script in header.php

__1.2.9 Dez 6, 2018__<br>
- added versioning to main.css & theme.js in lib/theme/assets.php
- button formats updated in lib/theme/editor.php

__1.2.8 Nov 30, 2018__<br>
- multilanguage support was added to the theme #13
- fontawesome update to v5.5.0 #10
- added some shortcodes to match the theme settings in lib/theme/shortcode.php
- added antispambot to the mail-shortcode in lib/theme/shortcode.php
- added a fn-icon shortcode in lib/theme/shortcode.php
- logo changed to shortcode and more advanced favicon code was added in header.php
- changed the value of @global-muted-color to make subnav-items more readable in assets/theme/less/theme/variables.less
- added z-index to the cookie alert in assets/theme/less/theme/content.less #19
- css files were updated to match the recent changes in assets/theme/css
- theme.js was renamed to base.js and a new theme.js was added in assets/theme/js

__1.2.7 Nov 6, 2018__<br>
- added IE render fix in header.php

__1.2.6 Aug 31, 2018__<br>
- added animated burger-menu in template/header/center.php + header.less #14
- added selection color and container variables in assets/theme/less/theme/variables.less #15 + #16
- changed name of singular.less to content.less in assets/theme/less/theme/ #17
- update to fontawesome 5.3.1 #10
- update to uikit 3.0.0 rc 12 #18

__1.2.5 Jul 26, 2018__<br>
- update to fontawesome 5.2

__1.2.4 Apr 27, 2018__<br>
- uikit 3 updates in various files #11 (this also fixes #1 because uikit2 did need fa4)
- uikit 3 icons added in assets/images #11
- removed some files because they're not longer necessary #11 #1
- minor changes in lib/system/medien.php and lib/system/menus.php
- added blog.less in assets/less/theme
- changed acf fields in lib/system/administration.php
- added cookie notice to header.php and acf-fields #7
- update to fontawesome 5.1

__1.2.3 Apr 27, 2018__<br>
- removed content and added acf-field call in 404.php
- added 404 content edit functionality in lib/system/administration.php

__1.2.2 Mar 27, 2018__<br>
- removed titan-framework in order to use acf-option-pages
- added option-pages & -fields calls in lib/system/administration.php
- changed titan-framework-calls to acf option-field-calls in various files
- added image-sizes for the new options-pages in lib/system/medien.php

__1.2.1 Mar 12, 2018__<br>
- added theme-settings output-shortcodes in lib/shortcode.php #2
- changed icons to fa5 in template/footer/center.php #5
- fixed typos in misc. template files #3
- changed css-request in lib/theme/assets.php #4

__1.2.0 Feb 24, 2018__<br>
- added unzip.php to lib to unzip the titan-framework for workflow-speedup
- removed unused php-variables in singular.php
- removed unused custom header function in lib/system/administration.php
- removed span-use for headline-formats in lib/theme/editor.php
- added fallback-menu with create-menu link in lib/system/menus.php
- typo update in lib/system/menus.php
- fixed mobile styles in assets/theme/less/theme/header.less
- fixed offcanvas, added close-button, added fa5, added fallback-menu in template/header/center.php
- changed logo-usage and added fallback-menu in template/footer/center.php
- set overall box-sizing to border-box in assets/theme/less/theme/base.less
- added uikit variables in assets/theme/less/theme/variables.less
- changed focus-background to primary-color in assets/theme/less/theme/forms.less
- added opening footer tag in template/footer/top.php
- added closing footer tag in template/footer/bottom.php
- added support for custom editor styles lib/theme/editor.php
- added assets/theme/less/theme/editor.less
- added assets/theme/css/editor.css and map
- added fa5 fonts in assets/theme/fonts/
- added assets/theme/css/fontawesome-all.min.css
- updated main.css with latest less-changes

__1.0.7 Oct 27, 2017__<br>
- added intro-image call in template/header/bottom.php
- added intro-image styles in assets/theme/less/theme/singular.less
- mobile menu class changes in template/header/center.php
- added hover and mobile menu styles in assets/theme/less/theme/header.less

__1.0.6 Sep 22, 2017__
- added version history in README.md
- fixed option-name id in template/footer/footer-bottom.php
- added fn-footer-top widget call template/footer/footer-top.php
- added fn-header-bottom widget call template/header/header-bottom.php
- added button styling in assets/theme/less/theme/base.less
- fixed ul structure, added li active & hover in template/header/header-center.php

__1.0.5 Sep 18, 2017__
- removed wrong reference in titan/lib/class-admin-page.php

__1.0.4 Aug 25, 2017__
- social variables deleted in template/footer/footer-center.php
- pinterest added in template/footer/footer-bottom.php
- pinterest added & analytics deleted in lib/theme/settings.php
- analytics link to theme settings deleted in header.php

__1.0.2 - Aug 17, 2017__
- offcanvas id fix in header.php

__1.0.1 – Jul 8, 2017__
- analytics issue fixed in header.php

__1.0.0 - Jul 1, 2017__
- initial commit
