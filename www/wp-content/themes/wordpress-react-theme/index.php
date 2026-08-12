<!-- Tutorial WP Theme Dev ("Posts Archive Page....") || Time: 1:54:00 -->
<!-- "Screenshot" recommended dimensions: 1200x900 pixels -->
<!-- Command to create a new plugin: npx @wordpress/create-block@latest <Name of Plugin> --variant dynamic --target-dir . -->

<!-- package.json file: "watch": "tailwindcss -i ./src/input.css -o ./css/output.css --content './**/*.php,./**/*.js,./**/*.json' --watch" -->

<!-- "build": "tailwindcss -i ./src/input.css -o ./css/output.css --content './**/*.php,./**/*.js,./**/*.json'",
    "watch": "tailwindcss -i ./src/input.css -o ./css/output.css --content './**/*.php,./**/*.js,./**/*.json' --watch" -->
<!-- % "npm run watch" -->

<!-- Look into making "Custom Post Types", "Custom Fields", "etc." -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="app"></div>
    <?php wp_footer(); ?>
</body>

</html>