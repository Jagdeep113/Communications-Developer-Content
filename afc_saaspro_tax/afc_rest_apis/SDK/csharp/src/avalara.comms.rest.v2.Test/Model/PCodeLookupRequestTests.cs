/* 
 * SaasPro
 *
 * APIs to interface with communications tax engine.<br />The API requires Basic authentication.<br />Users with access to multiple clients must also set request header parameter for <code>client_id</code>.<br />Set <code>client_profile_id</code> to specify profile to be used for taxation.
 *
 * The version of the OpenAPI document: v2
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */


using NUnit.Framework;

using System;
using System.Linq;
using System.IO;
using System.Collections.Generic;
using avalara.comms.rest.v2.Api;
using avalara.comms.rest.v2.Model;
using avalara.comms.rest.v2.Client;
using System.Reflection;
using Newtonsoft.Json;

namespace avalara.comms.rest.v2.Test
{
    /// <summary>
    ///  Class for testing PCodeLookupRequest
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by OpenAPI Generator (https://openapi-generator.tech).
    /// Please update the test case below to test the model.
    /// </remarks>
    public class PCodeLookupRequestTests
    {
        // TODO uncomment below to declare an instance variable for PCodeLookupRequest
        //private PCodeLookupRequest instance;

        /// <summary>
        /// Setup before each test
        /// </summary>
        [SetUp]
        public void Init()
        {
            // TODO uncomment below to create an instance of PCodeLookupRequest
            //instance = new PCodeLookupRequest();
        }

        /// <summary>
        /// Clean up after each test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of PCodeLookupRequest
        /// </summary>
        [Test]
        public void PCodeLookupRequestInstanceTest()
        {
            // TODO uncomment below to test "IsInstanceOf" PCodeLookupRequest
            //Assert.IsInstanceOf(typeof(PCodeLookupRequest), instance);
        }


        /// <summary>
        /// Test the property 'CountryIso'
        /// </summary>
        [Test]
        public void CountryIsoTest()
        {
            // TODO unit test for the property 'CountryIso'
        }
        /// <summary>
        /// Test the property 'State'
        /// </summary>
        [Test]
        public void StateTest()
        {
            // TODO unit test for the property 'State'
        }
        /// <summary>
        /// Test the property 'County'
        /// </summary>
        [Test]
        public void CountyTest()
        {
            // TODO unit test for the property 'County'
        }
        /// <summary>
        /// Test the property 'City'
        /// </summary>
        [Test]
        public void CityTest()
        {
            // TODO unit test for the property 'City'
        }
        /// <summary>
        /// Test the property 'ZipCode'
        /// </summary>
        [Test]
        public void ZipCodeTest()
        {
            // TODO unit test for the property 'ZipCode'
        }
        /// <summary>
        /// Test the property 'BestMatch'
        /// </summary>
        [Test]
        public void BestMatchTest()
        {
            // TODO unit test for the property 'BestMatch'
        }
        /// <summary>
        /// Test the property 'LimitResults'
        /// </summary>
        [Test]
        public void LimitResultsTest()
        {
            // TODO unit test for the property 'LimitResults'
        }
        /// <summary>
        /// Test the property 'NpaNxx'
        /// </summary>
        [Test]
        public void NpaNxxTest()
        {
            // TODO unit test for the property 'NpaNxx'
        }
        /// <summary>
        /// Test the property 'Fips'
        /// </summary>
        [Test]
        public void FipsTest()
        {
            // TODO unit test for the property 'Fips'
        }

    }

}
