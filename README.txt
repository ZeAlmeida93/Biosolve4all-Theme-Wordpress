BioSolve4All Custom Theme (converted from HTML)

Install (LocalWP):
1) Open your Local site folder and go to:
   app/public/wp-content/themes/
2) Copy the folder "biosolve4all" there (this folder).
3) WP Admin -> Appearance -> Themes -> Activate "BioSolve4All Custom Theme".

News ("Notícias"):
Option A (recommended, simple):
- Create a Page called "Notícias" with slug "noticias".
- Settings -> Reading:
  - Your homepage displays: A static page
  - Homepage: (set to "Home" page) OR keep front-page.php as the homepage
  - Posts page: choose "Notícias"
Then the nav item "Notícias" points to /noticias/ and WordPress will use index.php/archive templates.

Notes:
- This is a classic theme (PHP templates).
- CSS is loaded from /style/main.css (as in the original repo).
- All assets paths in templates were converted to get_template_directory_uri().
