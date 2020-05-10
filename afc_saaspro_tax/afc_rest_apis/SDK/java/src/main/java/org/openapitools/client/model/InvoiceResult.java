/*
 * SaasPro
 * APIs to interface with communications tax engine.<br />The API requires Basic authentication.<br />Users with access to multiple clients must also set request header parameter for <code>client_id</code>.<br />Set <code>client_profile_id</code> to specify profile to be used for taxation.
 *
 * The version of the OpenAPI document: v2
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


package org.openapitools.client.model;

import java.util.Objects;
import java.util.Arrays;
import com.google.gson.TypeAdapter;
import com.google.gson.annotations.JsonAdapter;
import com.google.gson.annotations.SerializedName;
import com.google.gson.stream.JsonReader;
import com.google.gson.stream.JsonWriter;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import org.openapitools.client.model.Error;
import org.openapitools.client.model.LineItemResult;
import org.openapitools.client.model.ReportingInformation;
import org.openapitools.client.model.SummarizedTax;

/**
 * Tax calculation results for an invoice.
 */
@ApiModel(description = "Tax calculation results for an invoice.")
@javax.annotation.Generated(value = "org.openapitools.codegen.languages.JavaClientCodegen", date = "2020-05-10T00:57:00.867-04:00[America/New_York]")
public class InvoiceResult {
  public static final String SERIALIZED_NAME_DOC = "doc";
  @SerializedName(SERIALIZED_NAME_DOC)
  private String doc;

  public static final String SERIALIZED_NAME_ITMS = "itms";
  @SerializedName(SERIALIZED_NAME_ITMS)
  private List<LineItemResult> itms = null;

  public static final String SERIALIZED_NAME_SUMM = "summ";
  @SerializedName(SERIALIZED_NAME_SUMM)
  private List<SummarizedTax> summ = null;

  public static final String SERIALIZED_NAME_ERR = "err";
  @SerializedName(SERIALIZED_NAME_ERR)
  private List<Error> err = null;

  public static final String SERIALIZED_NAME_INCRF = "incrf";
  @SerializedName(SERIALIZED_NAME_INCRF)
  private ReportingInformation incrf;


  public InvoiceResult doc(String doc) {
    
    this.doc = doc;
    return this;
  }

   /**
   * Document number for invoice.
   * @return doc
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Document number for invoice.")

  public String getDoc() {
    return doc;
  }


  public void setDoc(String doc) {
    this.doc = doc;
  }


  public InvoiceResult itms(List<LineItemResult> itms) {
    
    this.itms = itms;
    return this;
  }

  public InvoiceResult addItmsItem(LineItemResult itmsItem) {
    if (this.itms == null) {
      this.itms = new ArrayList<LineItemResult>();
    }
    this.itms.add(itmsItem);
    return this;
  }

   /**
   * Individual tax calculation results for each line item.
   * @return itms
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Individual tax calculation results for each line item.")

  public List<LineItemResult> getItms() {
    return itms;
  }


  public void setItms(List<LineItemResult> itms) {
    this.itms = itms;
  }


  public InvoiceResult summ(List<SummarizedTax> summ) {
    
    this.summ = summ;
    return this;
  }

  public InvoiceResult addSummItem(SummarizedTax summItem) {
    if (this.summ == null) {
      this.summ = new ArrayList<SummarizedTax>();
    }
    this.summ.add(summItem);
    return this;
  }

   /**
   * Summarized taxes for invoice.
   * @return summ
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Summarized taxes for invoice.")

  public List<SummarizedTax> getSumm() {
    return summ;
  }


  public void setSumm(List<SummarizedTax> summ) {
    this.summ = summ;
  }


  public InvoiceResult err(List<Error> err) {
    
    this.err = err;
    return this;
  }

  public InvoiceResult addErrItem(Error errItem) {
    if (this.err == null) {
      this.err = new ArrayList<Error>();
    }
    this.err.add(errItem);
    return this;
  }

   /**
   * Error description (as applicable).
   * @return err
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "Error description (as applicable).")

  public List<Error> getErr() {
    return err;
  }


  public void setErr(List<Error> err) {
    this.err = err;
  }


  public InvoiceResult incrf(ReportingInformation incrf) {
    
    this.incrf = incrf;
    return this;
  }

   /**
   * Get incrf
   * @return incrf
  **/
  @javax.annotation.Nullable
  @ApiModelProperty(value = "")

  public ReportingInformation getIncrf() {
    return incrf;
  }


  public void setIncrf(ReportingInformation incrf) {
    this.incrf = incrf;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    InvoiceResult invoiceResult = (InvoiceResult) o;
    return Objects.equals(this.doc, invoiceResult.doc) &&
        Objects.equals(this.itms, invoiceResult.itms) &&
        Objects.equals(this.summ, invoiceResult.summ) &&
        Objects.equals(this.err, invoiceResult.err) &&
        Objects.equals(this.incrf, invoiceResult.incrf);
  }

  @Override
  public int hashCode() {
    return Objects.hash(doc, itms, summ, err, incrf);
  }


  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class InvoiceResult {\n");
    sb.append("    doc: ").append(toIndentedString(doc)).append("\n");
    sb.append("    itms: ").append(toIndentedString(itms)).append("\n");
    sb.append("    summ: ").append(toIndentedString(summ)).append("\n");
    sb.append("    err: ").append(toIndentedString(err)).append("\n");
    sb.append("    incrf: ").append(toIndentedString(incrf)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }

}

