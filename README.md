# fn-clean
firmennest base template

# Version History

__1.2.2 Mar 27, 2018__<br>
- removed titan-framework in order to use acf-option-pages
- added option-pages calls in lib/system/administration.php
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
