<?php
/**
 * TaxCalculationSettingTypes
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * SaasPro
 *
 * APIs to interface with communications tax engine.<br />The API requires Basic authentication.<br />Users with access to multiple clients must also set request header parameter for <code>client_id</code>.<br />Set <code>client_profile_id</code> to specify profile to be used for taxation.
 *
 * The version of the OpenAPI document: v2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TaxCalculationSettingTypes Class Doc Comment
 *
 * @category Class
 * @description Choice of tax calculation setting types.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaxCalculationSettingTypes
{
    /**
     * Possible values of this enum
     */
    const ALL = 'All';
    const CONFIGURATION = 'Configuration';
    const BUNDLE = 'Bundle';
    const EXCLUSION = 'Exclusion';
    const OVERRIDE = 'Override';
    const NEXUS = 'Nexus';
    const EXEMPTION = 'Exemption';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
            self::CONFIGURATION,
            self::BUNDLE,
            self::EXCLUSION,
            self::OVERRIDE,
            self::NEXUS,
            self::EXEMPTION,
        ];
    }
}


