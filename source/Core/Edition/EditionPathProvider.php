<?php
/**
 * This file is part of OXID eShop Community Edition.
 *
 * OXID eShop Community Edition is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eShop Community Edition is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2016
 * @version   OXID eShop CE
 */

namespace OxidEsales\Eshop\Core\Edition;

/**
 * Class is responsible for returning directories paths according edition.
 *
 * @internal Do not make a module extension for this class.
 * @see      http://wiki.oxidforge.org/Tutorials/Core_OXID_eShop_classes:_must_not_be_extended
 */
class EditionPathProvider
{
    const SETUP_DIRECTORY = 'Setup';

    const DATABASE_SQL_DIRECTORY = 'Sql';

    /** @var EditionRootPathProvider */
    private $editionPathSelector;

    /**
     * @param $editionPathSelector
     */
    public function __construct($editionPathSelector)
    {
        $this->editionPathSelector = $editionPathSelector;
    }

    /**
     * Method forms path to corresponding edition setup directory.
     *
     * @return string
     */
    public function getSetupDirectoryPath()
    {
        return $this->getEditionPathSelector()->getDirectoryPath()
        . static::SETUP_DIRECTORY . DIRECTORY_SEPARATOR;
    }

    /**
     * Method forms path to corresponding edition database sql files directory.
     *
     * @return string
     */
    public function getDatabaseSqlDirectoryPath()
    {
        return $this->getSetupDirectoryPath() . static::DATABASE_SQL_DIRECTORY . DIRECTORY_SEPARATOR;
    }

    /**
     * @return EditionRootPathProvider
     */
    protected function getEditionPathSelector()
    {
        return $this->editionPathSelector;
    }
}