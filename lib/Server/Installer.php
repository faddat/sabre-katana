<?php

namespace Sabre\Katana\Server;

/**
 * A set of utilities for the installer.
 *
 * @copyright Copyright (C) 2015 fruux GmbH (https://fruux.com/).
 * @author Ivan Enderlin
 * @license http://sabre.io/license/ Modified BSD License
 */
class Installer
{
    public static function isInstalled()
    {
        return true === file_exists(Server::CONFIGURATION_FILE);
    }
}