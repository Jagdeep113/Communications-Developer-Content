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

(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD.
    define(['expect.js', process.cwd()+'/src/index'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require(process.cwd()+'/src/index'));
  } else {
    // Browser globals (root is window)
    factory(root.expect, root.SaasPro);
  }
}(this, function(expect, SaasPro) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new SaasPro.CompanyData();
  });

  var getProperty = function(object, getter, property) {
    // Use getter method if present; otherwise, get the property directly.
    if (typeof object[getter] === 'function')
      return object[getter]();
    else
      return object[property];
  }

  var setProperty = function(object, setter, property, value) {
    // Use setter method if present; otherwise, set the property directly.
    if (typeof object[setter] === 'function')
      object[setter](value);
    else
      object[property] = value;
  }

  describe('CompanyData', function() {
    it('should create an instance of CompanyData', function() {
      // uncomment below and update the code to test CompanyData
      //var instane = new SaasPro.CompanyData();
      //expect(instance).to.be.a(SaasPro.CompanyData);
    });

    it('should have the property bscl (base name: "bscl")', function() {
      // uncomment below and update the code to test the property bscl
      //var instane = new SaasPro.CompanyData();
      //expect(instance).to.be();
    });

    it('should have the property svcl (base name: "svcl")', function() {
      // uncomment below and update the code to test the property svcl
      //var instane = new SaasPro.CompanyData();
      //expect(instance).to.be();
    });

    it('should have the property fclt (base name: "fclt")', function() {
      // uncomment below and update the code to test the property fclt
      //var instane = new SaasPro.CompanyData();
      //expect(instance).to.be();
    });

    it('should have the property frch (base name: "frch")', function() {
      // uncomment below and update the code to test the property frch
      //var instane = new SaasPro.CompanyData();
      //expect(instance).to.be();
    });

    it('should have the property reg (base name: "reg")', function() {
      // uncomment below and update the code to test the property reg
      //var instane = new SaasPro.CompanyData();
      //expect(instance).to.be();
    });

    it('should have the property excl (base name: "excl")', function() {
      // uncomment below and update the code to test the property excl
      //var instane = new SaasPro.CompanyData();
      //expect(instance).to.be();
    });

    it('should have the property idnt (base name: "idnt")', function() {
      // uncomment below and update the code to test the property idnt
      //var instane = new SaasPro.CompanyData();
      //expect(instance).to.be();
    });

  });

}));