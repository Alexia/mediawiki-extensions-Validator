<?php

/**
 * Parameter criterion stating that the value must be an integer.
 * 
 * @since 0.4
 * 
 * @file CriterionIsInteger.php
 * @ingroup Validator
 * @ingroup Criteria
 * 
 * @author Jeroen De Dauw
 */
class CriterionIsInteger extends ItemParameterCriterion {
	
	/**
	 * Constructor.
	 * 
	 * @since 0.4
	 */
	public function __construct(  ) {
		parent::__construct();
	}
	
	/**
	 * @see ItemParameterCriterion::validate
	 */	
	protected function doValidation( $value ) {
		return ctype_digit( (string)$value );
	}
	
	/**
	 * @see ItemParameterCriterion::getItemErrorMessage
	 */	
	protected function getItemErrorMessage( $value ) {
		return wfMsgExt( '', 'parsemag', $value );
	}
	
	/**
	 * @see ItemParameterCriterion::getItemErrorMessage
	 */	
	protected function getListErrorMessage( array $value ) {
		global $wgLang;
		return wfMsgExt( '', 'parsemag', $wgLang->listToText( $value ), count( $value ) );
	}	
	
}