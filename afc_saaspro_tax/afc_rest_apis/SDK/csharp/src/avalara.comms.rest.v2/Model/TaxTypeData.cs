/* 
 * SaasPro
 *
 * APIs to interface with communications tax engine.<br />The API requires Basic authentication.<br />Users with access to multiple clients must also set request header parameter for <code>client_id</code>.<br />Set <code>client_profile_id</code> to specify profile to be used for taxation.
 *
 * The version of the OpenAPI document: v2
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using System.ComponentModel.DataAnnotations;
using OpenAPIDateConverter = avalara.comms.rest.v2.Client.OpenAPIDateConverter;

namespace avalara.comms.rest.v2.Model
{
    /// <summary>
    /// TaxTypeData
    /// </summary>
    [DataContract]
    public partial class TaxTypeData :  IEquatable<TaxTypeData>, IValidatableObject
    {
        /// <summary>
        /// Initializes a new instance of the <see cref="TaxTypeData" /> class.
        /// </summary>
        /// <param name="taxType">taxType.</param>
        /// <param name="categoryType">categoryType.</param>
        /// <param name="taxDescription">taxDescription.</param>
        /// <param name="categoryDescription">categoryDescription.</param>
        public TaxTypeData(int taxType = default(int), int categoryType = default(int), string taxDescription = default(string), string categoryDescription = default(string))
        {
            this.TaxDescription = taxDescription;
            this.CategoryDescription = categoryDescription;
            this.TaxType = taxType;
            this.CategoryType = categoryType;
            this.TaxDescription = taxDescription;
            this.CategoryDescription = categoryDescription;
        }
        
        /// <summary>
        /// Gets or Sets TaxType
        /// </summary>
        [DataMember(Name="TaxType", EmitDefaultValue=false)]
        public int TaxType { get; set; }

        /// <summary>
        /// Gets or Sets CategoryType
        /// </summary>
        [DataMember(Name="CategoryType", EmitDefaultValue=false)]
        public int CategoryType { get; set; }

        /// <summary>
        /// Gets or Sets TaxDescription
        /// </summary>
        [DataMember(Name="TaxDescription", EmitDefaultValue=true)]
        public string TaxDescription { get; set; }

        /// <summary>
        /// Gets or Sets CategoryDescription
        /// </summary>
        [DataMember(Name="CategoryDescription", EmitDefaultValue=true)]
        public string CategoryDescription { get; set; }

        /// <summary>
        /// Returns the string presentation of the object
        /// </summary>
        /// <returns>String presentation of the object</returns>
        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.Append("class TaxTypeData {\n");
            sb.Append("  TaxType: ").Append(TaxType).Append("\n");
            sb.Append("  CategoryType: ").Append(CategoryType).Append("\n");
            sb.Append("  TaxDescription: ").Append(TaxDescription).Append("\n");
            sb.Append("  CategoryDescription: ").Append(CategoryDescription).Append("\n");
            sb.Append("}\n");
            return sb.ToString();
        }
  
        /// <summary>
        /// Returns the JSON string presentation of the object
        /// </summary>
        /// <returns>JSON string presentation of the object</returns>
        public virtual string ToJson()
        {
            return JsonConvert.SerializeObject(this, Formatting.Indented);
        }

        /// <summary>
        /// Returns true if objects are equal
        /// </summary>
        /// <param name="input">Object to be compared</param>
        /// <returns>Boolean</returns>
        public override bool Equals(object input)
        {
            return this.Equals(input as TaxTypeData);
        }

        /// <summary>
        /// Returns true if TaxTypeData instances are equal
        /// </summary>
        /// <param name="input">Instance of TaxTypeData to be compared</param>
        /// <returns>Boolean</returns>
        public bool Equals(TaxTypeData input)
        {
            if (input == null)
                return false;

            return 
                (
                    this.TaxType == input.TaxType ||
                    (this.TaxType != null &&
                    this.TaxType.Equals(input.TaxType))
                ) && 
                (
                    this.CategoryType == input.CategoryType ||
                    (this.CategoryType != null &&
                    this.CategoryType.Equals(input.CategoryType))
                ) && 
                (
                    this.TaxDescription == input.TaxDescription ||
                    (this.TaxDescription != null &&
                    this.TaxDescription.Equals(input.TaxDescription))
                ) && 
                (
                    this.CategoryDescription == input.CategoryDescription ||
                    (this.CategoryDescription != null &&
                    this.CategoryDescription.Equals(input.CategoryDescription))
                );
        }

        /// <summary>
        /// Gets the hash code
        /// </summary>
        /// <returns>Hash code</returns>
        public override int GetHashCode()
        {
            unchecked // Overflow is fine, just wrap
            {
                int hashCode = 41;
                if (this.TaxType != null)
                    hashCode = hashCode * 59 + this.TaxType.GetHashCode();
                if (this.CategoryType != null)
                    hashCode = hashCode * 59 + this.CategoryType.GetHashCode();
                if (this.TaxDescription != null)
                    hashCode = hashCode * 59 + this.TaxDescription.GetHashCode();
                if (this.CategoryDescription != null)
                    hashCode = hashCode * 59 + this.CategoryDescription.GetHashCode();
                return hashCode;
            }
        }

        /// <summary>
        /// To validate all properties of the instance
        /// </summary>
        /// <param name="validationContext">Validation context</param>
        /// <returns>Validation Result</returns>
        IEnumerable<System.ComponentModel.DataAnnotations.ValidationResult> IValidatableObject.Validate(ValidationContext validationContext)
        {
            yield break;
        }
    }

}