<?php
namespace oasis\names\specification\ubl\schema\xsd\CommonAggregateComponents_2;

/**
 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2
 * @xmlType 
 * @xmlName ExchangeRateType
 * @xmlComponentType ABIE
 * @xmlDictionaryEntryName Exchange Rate. Details
 * @xmlDefinition Information about Exchange Rate.
 * @xmlObjectClass Exchange Rate
 */
class ExchangeRateType
	{

	
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Exchange Rate. Source_ Currency Code. Code
	 * @Definition The reference currency for the Exchange Rate; the currency from which the exchange is being made (CC Definition).
	 * @Cardinality 1
	 * @ObjectClass Exchange Rate
	 * @PropertyTermQualifier Source
	 * @PropertyTerm Currency Code
	 * @RepresentationTerm Code
	 * @DataType Currency_ Code. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 1
	 * @xmlMaxOccurs 1
	 * @xmlName SourceCurrencyCode
	 * @var SourceCurrencyCode
	 */
	public $SourceCurrencyCode;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Exchange Rate. Source_ Currency Base Rate. Rate
	 * @Definition The unit base of the source currency for currencies with small denominations.
	 * @Cardinality 0..1
	 * @ObjectClass Exchange Rate
	 * @PropertyTermQualifier Source
	 * @PropertyTerm Currency Base Rate
	 * @RepresentationTerm Rate
	 * @DataType Rate. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName SourceCurrencyBaseRate
	 * @var SourceCurrencyBaseRate
	 */
	public $SourceCurrencyBaseRate;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Exchange Rate. Target_ Currency Code. Code
	 * @Definition The target currency for the Exchange Rate; the currency to which the exchange is being made (CC Definition).
	 * @Cardinality 1
	 * @ObjectClass Exchange Rate
	 * @PropertyTermQualifier Target
	 * @PropertyTerm Currency Code
	 * @RepresentationTerm Code
	 * @DataType Currency_ Code. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 1
	 * @xmlMaxOccurs 1
	 * @xmlName TargetCurrencyCode
	 * @var TargetCurrencyCode
	 */
	public $TargetCurrencyCode;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Exchange Rate. Target_ Currency Base Rate. Rate
	 * @Definition The unit base of the target currency for currencies with small denominations.
	 * @Cardinality 0..1
	 * @ObjectClass Exchange Rate
	 * @PropertyTermQualifier Target
	 * @PropertyTerm Currency Base Rate
	 * @RepresentationTerm Rate
	 * @DataType Rate. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName TargetCurrencyBaseRate
	 * @var TargetCurrencyBaseRate
	 */
	public $TargetCurrencyBaseRate;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Exchange Rate. Exchange Market Identifier. Identifier
	 * @Definition Identifies the currency exchange market used as the source of the Exchange Rate.
	 * @Cardinality 0..1
	 * @ObjectClass Exchange Rate
	 * @PropertyTerm Exchange Market Identifier
	 * @RepresentationTerm Identifier
	 * @DataType Identifier. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName ExchangeMarketID
	 * @var ExchangeMarketID
	 */
	public $ExchangeMarketID;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Exchange Rate. Calculation Rate. Rate
	 * @Definition The factor applied to the source currency to calculate the target currency.
	 * @Cardinality 0..1
	 * @ObjectClass Exchange Rate
	 * @PropertyTerm Calculation Rate
	 * @RepresentationTerm Rate
	 * @DataType Rate. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName CalculationRate
	 * @var CalculationRate
	 */
	public $CalculationRate;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Exchange Rate. Mathematic Operator Code. Code
	 * @Definition An identifier for whether the Calculation Rate should be used to multiply or to divide, expressed as a code.
	 * @Cardinality 0..1
	 * @ObjectClass Exchange Rate
	 * @PropertyTerm Mathematic Operator Code
	 * @RepresentationTerm Code
	 * @DataType Operator_ Code. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName MathematicOperatorCode
	 * @var MathematicOperatorCode
	 */
	public $MathematicOperatorCode;
	/**
	 * @ComponentType BBIE
	 * @DictionaryEntryName Exchange Rate. Date
	 * @Definition The date of the Exchange.
	 * @Cardinality 0..1
	 * @ObjectClass Exchange Rate
	 * @PropertyTerm Date
	 * @RepresentationTerm Date
	 * @DataType Date. Type
	 * @xmlType element
	 * @xmlNamespace urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName Date
	 * @var Date
	 */
	public $Date;
	/**
	 * @ComponentType ASBIE
	 * @DictionaryEntryName Exchange Rate. Foreign Exchange_ Contract. Contract
	 * @Definition An association to Foreign Exchange Contract.
	 * @Cardinality 0..1
	 * @ObjectClass Exchange Rate
	 * @PropertyTermQualifier Foreign Exchange
	 * @PropertyTerm Contract
	 * @AssociatedObjectClass Contract
	 * @xmlType element
	 * @xmlNamespace 
	 * @xmlMinOccurs 0
	 * @xmlMaxOccurs 1
	 * @xmlName ForeignExchangeContract
	 * @var ForeignExchangeContract
	 */
	public $ForeignExchangeContract;


} // end class ExchangeRateType