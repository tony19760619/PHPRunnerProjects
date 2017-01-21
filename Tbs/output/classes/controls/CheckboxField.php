<?php
class CheckboxField extends EditControl
{
	function CheckboxField($field, $pageObject, $id)
	{
		parent::EditControl($field, $pageObject, $id);
		$this->format = EDIT_FORMAT_CHECKBOX;
	}
	
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		if($mode == MODE_ADD || $mode == MODE_INLINE_ADD || $mode == MODE_EDIT || $mode == MODE_INLINE_EDIT) 
		{
			$checked = "";
			if($value && $value != 0)
				$checked=" checked";
			echo '<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="checkbox">';
			echo '<input id="'.$this->cfield.'" type="Checkbox" '
				.(($mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD) && $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '')
				.'name="'.$this->cfield.'" '.$checked.'>';
		}
		else
		{
			echo '<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="checkbox">';
			echo '<select id="'.$this->cfield.'" '.(($mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD) && $this->is508==true ? 'alt="'
				.$this->strLabel.'" ' : '').'name="'.$this->cfield.'">';
				
			$val = array( "" => array(), "True" => array("on", "1"), "False" => array("off", "0") );		
			$optval = array("", "on", "off");
			$show = array("", "True", "False");
			
			foreach($show as $key => $shownValue)
			{	
				$sel = in_array( $value, $val[ $shownValue] ) ? " selected" : "";
				echo '<option value="'.$optval[$key].'"'.$sel.'>'.$shownValue.'</option>';
			}
			
			echo "</select>";
		}
		$this->buildControlEnd($validate);
	}
	
	function SQLWhere($SearchFor, $strSearchOption, $SearchFor2, $etype, $isSuggest)
	{
		$baseResult = $this->baseSQLWhere($strSearchOption);
		if($baseResult === false)
			return "";
		if($baseResult != "")
			return $baseResult;
		
		if($SearchFor == "none" || $SearchFor != "on" && $SearchFor != "off")
			return "";
		
		$fullFieldName = GetFullFieldName($this->field);
		$bNeedQuotes = NeedQuotes($this->type);
		
		return CheckboxField::constructFieldWhere($fullFieldName, $bNeedQuotes, $SearchFor == "on");
	}
	
	/**
	* Get the WHERE clause condition for the checkbox field basing on 
	* the field and the database type.
	* @param String fullFieldName
	* @param Boolean strNeedQuotes
	* @param Boolean checked		The flag indicating if the condition is 
	* designed to search checked values or not
	*/	
	static function constructFieldWhere($fullFieldName, $bNeedQuotes, $checked)
	{
		if($bNeedQuotes)
		{
			if($checked)
			{
				$whereStr = "(".$fullFieldName."<>'0' ";
					$whereStr .= " and ".$fullFieldName."<>'' ";
				$whereStr .= " and ".$fullFieldName." is not null)";
							$whereStr .= " and abs(cast(".$fullFieldName." as signed)) > 0";	
				
				return $whereStr;
			}
			
			$whereStr = "(".$fullFieldName."='0' ";
				$whereStr .= " or ".$fullFieldName."='' "; 
			$whereStr .= " or ".$fullFieldName." is null)";
						$whereStr .= " or cast(".$fullFieldName." as unsigned) = 0";	
			
			return $whereStr;
		}
		
		if($checked)
			return "(".$fullFieldName."<>0 and ".$fullFieldName." is not null)";
			
		return "(".$fullFieldName."=0 or ".$fullFieldName." is null)";		
	}
}
?>