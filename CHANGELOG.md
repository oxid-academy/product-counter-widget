# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [1.1.1] - 2022-02-14
### Changed
- `composer.json` increased the PHP version to 8.0.

## [1.1.0] - 2020-08-14
### Removed
- `productcounter.tpl` greeting option.

## [1.0.0] - 2020-08-14
### Added
- `ProductCounterController` widget controller, that assigns the number of products to a template variable and renders the template.
- `productcounter.tpl` presentation of the banner added to the eShop header area.
- `layout_header_bottom.tpl` embeds the widget into the existing view.
