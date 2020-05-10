# coding: utf-8

"""
    SaasPro

    APIs to interface with communications tax engine.<br />The API requires Basic authentication.<br />Users with access to multiple clients must also set request header parameter for <code>client_id</code>.<br />Set <code>client_profile_id</code> to specify profile to be used for taxation.  # noqa: E501

    The version of the OpenAPI document: v2
    Generated by: https://openapi-generator.tech
"""


from __future__ import absolute_import

import unittest
import datetime

import avalara.comms.rest.v2
from avalara.comms.rest.v2.models.line_item import LineItem  # noqa: E501
from avalara.comms.rest.v2.rest import ApiException

class TestLineItem(unittest.TestCase):
    """LineItem unit test stubs"""

    def setUp(self):
        pass

    def tearDown(self):
        pass

    def make_instance(self, include_optional):
        """Test LineItem
            include_option is a boolean, when False only required
            params are included, when True both required and
            optional params are included """
        # model = avalara.comms.rest.v2.models.line_item.LineItem()  # noqa: E501
        if include_optional :
            return LineItem(
                ref = '0', 
                _from = avalara.comms.rest.v2.models.location.Location(
                    cnty = '0', 
                    ctry = '0', 
                    int = True, 
                    geo = True, 
                    pcd = 56, 
                    npa = 56, 
                    fips = '0', 
                    addr = '0', 
                    city = '0', 
                    st = '0', 
                    zip = '0', ), 
                to = avalara.comms.rest.v2.models.location.Location(
                    cnty = '0', 
                    ctry = '0', 
                    int = True, 
                    geo = True, 
                    pcd = 56, 
                    npa = 56, 
                    fips = '0', 
                    addr = '0', 
                    city = '0', 
                    st = '0', 
                    zip = '0', ), 
                chg = 1.337, 
                line = 56, 
                loc = 56, 
                min = 1.337, 
                sale = 56, 
                plsp = 1.337, 
                incl = True, 
                pror = 1.337, 
                proadj = 56, 
                tran = 56, 
                serv = 56, 
                dbt = True, 
                adj = True, 
                adjm = 56, 
                disc = 56, 
                opt = [
                    avalara.comms.rest.v2.models.key_value_pair.KeyValuePair(
                        key = '0', 
                        val = '0', )
                    ], 
                prop = 56, 
                bill = avalara.comms.rest.v2.models.location.Location(
                    cnty = '0', 
                    ctry = '0', 
                    int = True, 
                    geo = True, 
                    pcd = 56, 
                    npa = 56, 
                    fips = '0', 
                    addr = '0', 
                    city = '0', 
                    st = '0', 
                    zip = '0', ), 
                cust = 56, 
                lfln = True, 
                date = datetime.datetime.strptime('2013-10-20 19:20:30.00', '%Y-%m-%d %H:%M:%S.%f'), 
                qty = 56, 
                glref = '0'
            )
        else :
            return LineItem(
        )

    def testLineItem(self):
        """Test LineItem"""
        inst_req_only = self.make_instance(include_optional=False)
        inst_req_and_optional = self.make_instance(include_optional=True)


if __name__ == '__main__':
    unittest.main()
