# local_gatsby
building a local wp with gatby, graphql + local nodeJs server from mysql

# local_gatsby
md cheat sheet: https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet

# H1 Hi there...
1st ting first- it all works!
https://youtu.be/90uvE7LgNrQ

<iframe width="560" height="315" src="https://www.youtube.com/embed/90uvE7LgNrQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

# h2 this project is all about wp + gatsby

local installation of wp


https://www.gatsbyjs.com/docs/cheat-sheet/


npm install -g gatsby-cli


gatsby new client

testing git add - this might result int new repo...
git add passed !

0. these are the gitignore commands:
# Ignore everything in the root except the "wp-content" directory.
/*
!.gitignore
!wp-content/
!wp-config.php
!DB 
!client
# Ignore everything in the "wp-content" directory, except the "plugins"
# and "themes" directories.
wp-content/*
!wp-content/plugins/
!wp-content/themes/
# Ignore everything in the "plugins" directory, except the plugins you
# specify (see the commented-out examples for hints on how to do this.)
wp-content/plugins/*
# !wp-content/plugins/my-single-file-plugin.php
# !wp-content/plugins/my-directory-plugin/
# Ignore everything in the "themes" directory, except the themes you
# specify (see the commented-out example for a hint on how to do this.)
wp-content/themes/*
# !wp-content/themes/my-theme/




0. putting it all together:
https://www.gatsbyjs.com/guides/wordpress/

apperently old php version, reinstalled xampp into c: xampp2
restarting...

http://localhost/www/DEV/local_gatsby/ - new site directory - retry gatsby wp

it works! on to gatsby plugin into dev folder:
https://www.gatsbyjs.com/docs/recipes/working-with-plugins#using-a-plugin
npm install gatsby-source-filesystem


deleteing client and adding starter:
https://github.com/gatsbyjs/gatsby/blob/master/packages/gatsby-source-wordpress/docs/getting-started.md


gatsby new Client https://github.com/gatsbyjs/gatsby-starter-wordpress-blog