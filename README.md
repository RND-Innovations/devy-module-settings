# DeVy Settings Module

Centralized settings management module for the **DeVy Framework**.

The Settings module provides a unified interface for managing global application settings provided by active DeVy modules.

## Requirements

* PHP 8.3+
* DeVy Core `^1.0`

## Installation

The Settings module is installed by the **DeVy Installer**.

It is placed in the application's modules directory:

```text
modules/
└── Settings/
```

Manual installation is not recommended unless you are developing or testing the module.

## Module Structure

The module follows the standard DeVy module structure:

```text
Settings/
├── src/
│   ├── Controllers/
│   └── Services/
├── assets/
│   └── ...
├── views/
│   └── ...
├── module.php
├── composer.json
├── README.md
└── LICENSE
```

## Namespace

The module uses the following PHP namespace:

```php
DeVy\Modules\Settings
```

The physical module directory is:

```text
modules/Settings/
```

The directory name and PHP namespace are intentionally separate.

## Features

The Settings module provides functionality for:

* Centralized application settings management
* Administrative settings interface
* Management of settings provided by active modules
* Module-specific configuration management
* Persistent settings storage
* Structured settings organization
* Integration with the DeVy module system
* Integration with the DeVy settings and configuration services

The module is designed to give administrators a centralized location for managing settings exposed by installed and active modules.

## Module Settings

Active DeVy modules can provide their own settings while keeping the implementation within the module itself.

The Settings module provides the administrative layer for exposing and managing these settings.

This keeps module-specific functionality independent while providing administrators with a consistent settings experience.

## Development

Clone the DeVy framework and place this module in:

```text
modules/Settings/
```

After making changes to PHP classes, regenerate Composer's autoloader if necessary:

```bash
composer dump-autoload
```

## Compatibility

| DeVy Core | Settings Module |
| --------- | --------------- |
| 1.x       | 1.x             |

## License

This module is released under the MIT License.

See [LICENSE](LICENSE) for the full license text.

---

**DeVy Framework**
Developed by **RND Innovations**
