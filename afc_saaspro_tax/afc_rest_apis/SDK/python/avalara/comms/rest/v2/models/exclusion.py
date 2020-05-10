# coding: utf-8

"""
    SaasPro

    APIs to interface with communications tax engine.<br />The API requires Basic authentication.<br />Users with access to multiple clients must also set request header parameter for <code>client_id</code>.<br />Set <code>client_profile_id</code> to specify profile to be used for taxation.  # noqa: E501

    The version of the OpenAPI document: v2
    Generated by: https://openapi-generator.tech
"""


import pprint
import re  # noqa: F401

import six

from avalara.comms.rest.v2.configuration import Configuration


class Exclusion(object):
    """NOTE: This class is auto generated by OpenAPI Generator.
    Ref: https://openapi-generator.tech

    Do not edit the class manually.
    """

    """
    Attributes:
      openapi_types (dict): The key is attribute name
                            and the value is attribute type.
      attribute_map (dict): The key is attribute name
                            and the value is json key in definition.
    """
    openapi_types = {
        'ctry': 'str',
        'st': 'str',
        'excl': 'bool'
    }

    attribute_map = {
        'ctry': 'ctry',
        'st': 'st',
        'excl': 'excl'
    }

    def __init__(self, ctry=None, st=None, excl=None, local_vars_configuration=None):  # noqa: E501
        """Exclusion - a model defined in OpenAPI"""  # noqa: E501
        if local_vars_configuration is None:
            local_vars_configuration = Configuration()
        self.local_vars_configuration = local_vars_configuration

        self._ctry = None
        self._st = None
        self._excl = None
        self.discriminator = None

        self.ctry = ctry
        self.st = st
        self.excl = excl

    @property
    def ctry(self):
        """Gets the ctry of this Exclusion.  # noqa: E501

        Country ISO code.  # noqa: E501

        :return: The ctry of this Exclusion.  # noqa: E501
        :rtype: str
        """
        return self._ctry

    @ctry.setter
    def ctry(self, ctry):
        """Sets the ctry of this Exclusion.

        Country ISO code.  # noqa: E501

        :param ctry: The ctry of this Exclusion.  # noqa: E501
        :type: str
        """

        self._ctry = ctry

    @property
    def st(self):
        """Gets the st of this Exclusion.  # noqa: E501

        State abbreviation.  # noqa: E501

        :return: The st of this Exclusion.  # noqa: E501
        :rtype: str
        """
        return self._st

    @st.setter
    def st(self, st):
        """Sets the st of this Exclusion.

        State abbreviation.  # noqa: E501

        :param st: The st of this Exclusion.  # noqa: E501
        :type: str
        """

        self._st = st

    @property
    def excl(self):
        """Gets the excl of this Exclusion.  # noqa: E501

        Indicates if exclusion applies to the specified state.  # noqa: E501

        :return: The excl of this Exclusion.  # noqa: E501
        :rtype: bool
        """
        return self._excl

    @excl.setter
    def excl(self, excl):
        """Sets the excl of this Exclusion.

        Indicates if exclusion applies to the specified state.  # noqa: E501

        :param excl: The excl of this Exclusion.  # noqa: E501
        :type: bool
        """

        self._excl = excl

    def to_dict(self):
        """Returns the model properties as a dict"""
        result = {}

        for attr, _ in six.iteritems(self.openapi_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """Returns the string representation of the model"""
        return pprint.pformat(self.to_dict())

    def __repr__(self):
        """For `print` and `pprint`"""
        return self.to_str()

    def __eq__(self, other):
        """Returns true if both objects are equal"""
        if not isinstance(other, Exclusion):
            return False

        return self.to_dict() == other.to_dict()

    def __ne__(self, other):
        """Returns true if both objects are not equal"""
        if not isinstance(other, Exclusion):
            return True

        return self.to_dict() != other.to_dict()