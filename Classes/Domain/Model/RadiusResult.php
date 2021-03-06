<?php
namespace JWeiland\Maps2\Domain\Model;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use JWeiland\Maps2\Domain\Model\RadiusResult\Geometry;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class RadiusResult
 *
 * @category Domain/Model
 * @package  Maps2
 * @author   Stefan Froemken <projects@jweiland.net>
 * @license  http://www.gnu.org/licenses/gpl.html GNU General Public License
 * @link     https://github.com/jweiland-net/maps2
 */
class RadiusResult
{
    /**
     * addressComponents
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\JWeiland\Maps2\Domain\Model\RadiusResult\AddressComponent>
     */
    protected $addressComponents;

    /**
     * formattedAddress
     *
     * @var string
     */
    protected $formattedAddress;

    /**
     * geometry
     *
     * @var \JWeiland\Maps2\Domain\Model\RadiusResult\Geometry
     */
    protected $geometry;

    /**
     * types
     *
     * @var array
     */
    protected $types;

    /**
     * poiCollections
     *
     * @var array
     */
    protected $poiCollections;

    /**
     * Setter for addressComponents
     *
     * @param ObjectStorage $addressComponents
     */
    public function setAddressComponents(ObjectStorage $addressComponents)
    {
        $this->addressComponents = $addressComponents;
    }

    /**
     * Getter for addressComponents
     *
     * @return ObjectStorage
     */
    public function getAddressComponents()
    {
        return $this->addressComponents;
    }

    /**
     * Setter for formattedAddress
     *
     * @param string $formattedAddress
     */
    public function setFormattedAddress($formattedAddress)
    {
        $this->formattedAddress = $formattedAddress;
    }

    /**
     * Getter for formattedAddress
     *
     * @return string
     */
    public function getFormattedAddress()
    {
        return $this->formattedAddress;
    }

    /**
     * Setter for geometry
     *
     * @param Geometry $geometry
     */
    public function setGeometry(Geometry $geometry)
    {
        $this->geometry = $geometry;
    }

    /**
     * Getter for geometry
     *
     * @return Geometry
     */
    public function getGeometry()
    {
        return $this->geometry;
    }

    /**
     * Setter for Types
     *
     * @param array $types
     */
    public function setTypes(array $types)
    {
        $this->types = $types;
    }

    /**
     * Getter for types
     *
     * @return array
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Setter for poiCollections
     *
     * @param array $poiCollections
     */
    public function setPoiCollections(array $poiCollections)
    {
        $this->poiCollections = $poiCollections;
    }

    /**
     * Getter for poiCollections
     *
     * @return array
     */
    public function getPoiCollections()
    {
        return $this->poiCollections;
    }
}
