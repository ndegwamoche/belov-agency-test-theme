# Belov Test Task Block Plugin

This WordPress plugin creates a custom block for displaying a featured article alongside a list of related articles. The data is fetched using Advanced Custom Fields (ACF), and the block is rendered on the frontend of the site.

## Description

The Belov Test Task Block Plugin provides a custom block that displays a featured article with its image, title, category, author, and publication date. Below the featured article, it lists related articles using ACF’s relationship field. This plugin is designed to integrate easily with WordPress themes and offers flexibility for content display.

![enter image description here](https://raw.githubusercontent.com/ndegwamoche/belov-agency-test-theme/main/belov-figma.png)

### Features:
- Displays a featured article with its details (title, image, category, author, date).
- Shows a list of related articles fetched using ACF’s relationship field.
- Option to customize article display (e.g., featured image, author, date).
- Fully responsive design and easy to integrate with themes.

## Requirements

- WordPress 5.0 or higher
- Advanced Custom Fields (ACF) plugin installed and activated
- A theme compatible with Gutenberg blocks
- PHP 7.2 or higher

## Installation

1. **Download the plugin** from this repository.
2. **Install the plugin** via the WordPress dashboard:
   - Go to `Plugins > Add New > Upload Plugin`.
   - Upload the plugin `.zip` file and activate the plugin.
3. **Activate the plugin** from the WordPress dashboard.

### Setting up ACF fields:
- **Featured Article:** Create a new ACF field group and add a field of type `Post Object`. Set it to allow selecting a post and name it `featured_article`.
- **Articles List:** Add a `Relationship` field to allow selecting related articles. Name it `articles_list`.

After configuring the ACF fields, the plugin will render the block on your site.

## Usage

Once activated, you can add the custom block to any page or post using the Gutenberg editor:

1. Go to `Posts > Add New` or `Pages > Add New` in the WordPress admin dashboard.
2. Open the Gutenberg editor and click the "+" icon to add a new block.
3. Search for the "Belov Test Block" and add it to your page/post.
4. Select a featured article and related articles using the ACF fields.

The block will render the featured article and related articles dynamically.

## Customization

You can customize the block appearance and functionality by editing the plugin files or overriding its template in your theme.

- **Block Styles:** You can customize the block’s CSS styles by adding styles to your theme’s stylesheet or the plugin’s CSS file.
- **Template Overriding:** Copy the template file `block-template.php` from the plugin to your theme’s `blocks` directory to modify the HTML structure.

## Code Overview

The plugin code includes:

1. **PHP Template**: Handles the rendering of the featured article and related articles.
2. **ACF Fields**: Fetches data using ACF’s `get_field()` function.
3. **HTML Markup**: Outputs HTML for displaying articles, images, and metadata.
4. **CSS Styling**: The plugin’s basic styles are inlined for simplicity, but can be customized.

## License

This plugin is licensed under the [GPL-2.0-or-later License](https://www.gnu.org/licenses/gpl-2.0.html).

## Contributing

Contributions are welcome! If you find any bugs or would like to add new features, feel free to submit an issue or pull request.

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Write tests for your changes.
4. Submit a pull request.

## Author

- **Martin Ndegwa Moche**  
  Email: [ndegwamoche@gmail.com](mailto:ndegwamoche@gmail.com)  
  GitHub: [https://github.com/ndegwamoche](https://github.com/ndegwamoche)

## Acknowledgments

- Thanks to the [Advanced Custom Fields](https://www.advancedcustomfields.com/) plugin for providing an easy way to fetch custom fields.
- Thanks to the [WordPress community](https://wordpress.org) for creating such a powerful platform.
