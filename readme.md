# Wordpress basic starter theme with gulp and docker
This is a very basic theme development starter.

## Dependencies

### WPGulp
>An advanced & extensively documented Gulp WordPress workflow. Kick-start a build-workflow for your WordPress plugins and themes with Gulp.
[WPGulp Page](https://github.com/ahmadawais/WPGulp)

So if you need to upgrade it just run the command above inside your theme's folder.
`npx install-wpgulp``

## Docker Compose
For quick environment setup we are using Docker and Docker Compose.
[Install Docker](https://www.docker.com/get-started)
[Install Docker Compose](https://docs.docker.com/compose/install/)

### How to access your docker application terminal
Use this command to access the terminal of your docker application, it will be usefull if you need to add some permissions or run any other terminal command.

`docker exec -it name_wordpress_container bash`

## Good to know

### Git Ignore
This project has it's own git ignore, if you are going to use it don't forget to change gitignore line above to your theme's name:

`!themes/my_theme`
