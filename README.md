# sv-wp-default-settings

## Purpose
This WordPress plugin sets a collection of sensible default configuration options automatically when activated. It is designed for SearchVista WordPress installations, but can be used anywhere you want to quickly apply preferred defaults.

## Features
- Applies a range of default WordPress settings (privacy, comments, permalinks, avatars, etc.)
- Deletes the default "Hello world!" post and comment
- Runs only once, on plugin activation
- No UI, admin menu, or plugin install/activation helpers

## How it works
When activated, the plugin:
- Updates WordPress options for privacy, comments, permalinks, avatars, and more
- Flushes rewrite rules to apply permalink changes
- Deletes the default post and comment (if present)

## Usage
1. Upload the plugin to your WordPress installation
2. Activate it from the Plugins page
3. The settings are applied automatically

## No recommended plugin install or admin page
This plugin does not install or recommend other plugins, nor does it add any admin pages or notices.
