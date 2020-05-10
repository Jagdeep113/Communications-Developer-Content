/**
 * SaasPro
 * APIs to interface with communications tax engine.<br />The API requires Basic authentication.<br />Users with access to multiple clients must also set request header parameter for <code>client_id</code>.<br />Set <code>client_profile_id</code> to specify profile to be used for taxation.
 *
 * The version of the OpenAPI document: v2
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 */

import ApiClient from '../ApiClient';

/**
 * The ReportingInformation model module.
 * @module model/ReportingInformation
 * @version v2
 */
class ReportingInformation {
    /**
     * Constructs a new <code>ReportingInformation</code>.
     * Tax rate override information.
     * @alias module:model/ReportingInformation
     */
    constructor() { 
        
        ReportingInformation.initialize(this);
    }

    /**
     * Initializes the fields of this object.
     * This method is used by the constructors of any subclasses, in order to implement multiple inheritance (mix-ins).
     * Only for internal use.
     */
    static initialize(obj) { 
    }

    /**
     * Constructs a <code>ReportingInformation</code> from a plain JavaScript object, optionally creating a new instance.
     * Copies all relevant properties from <code>data</code> to <code>obj</code> if supplied or a new instance if not.
     * @param {Object} data The plain JavaScript object bearing properties of interest.
     * @param {module:model/ReportingInformation} obj Optional instance to populate.
     * @return {module:model/ReportingInformation} The populated <code>ReportingInformation</code> instance.
     */
    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new ReportingInformation();

            if (data.hasOwnProperty('acct')) {
                obj['acct'] = ApiClient.convertToType(data['acct'], 'String');
            }
            if (data.hasOwnProperty('custref')) {
                obj['custref'] = ApiClient.convertToType(data['custref'], 'String');
            }
            if (data.hasOwnProperty('invn')) {
                obj['invn'] = ApiClient.convertToType(data['invn'], 'String');
            }
            if (data.hasOwnProperty('bcyc')) {
                obj['bcyc'] = ApiClient.convertToType(data['bcyc'], 'String');
            }
            if (data.hasOwnProperty('ccycd')) {
                obj['ccycd'] = ApiClient.convertToType(data['ccycd'], 'String');
            }
            if (data.hasOwnProperty('ccydesc')) {
                obj['ccydesc'] = ApiClient.convertToType(data['ccydesc'], 'String');
            }
        }
        return obj;
    }


}

/**
 * Account id
 * @member {String} acct
 */
ReportingInformation.prototype['acct'] = undefined;

/**
 * Customer reference
 * @member {String} custref
 */
ReportingInformation.prototype['custref'] = undefined;

/**
 * Invoice Number reference
 * @member {String} invn
 */
ReportingInformation.prototype['invn'] = undefined;

/**
 * Bill Cycle reference
 * @member {String} bcyc
 */
ReportingInformation.prototype['bcyc'] = undefined;

/**
 * Currency code for invoice
 * @member {String} ccycd
 */
ReportingInformation.prototype['ccycd'] = undefined;

/**
 * Currency description
 * @member {String} ccydesc
 */
ReportingInformation.prototype['ccydesc'] = undefined;






export default ReportingInformation;
