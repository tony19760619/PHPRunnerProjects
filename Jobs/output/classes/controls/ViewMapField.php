<?php
class ViewMapField extends ViewControl
{
	public function showDBValue(&$data, $keylink)
	{
		if( !$this->pageObject)
		{
			return runner_htmlspecialchars($data[$this->field]);
 		}
		elseif($this->pageObject->pageType == PAGE_EXPORT || ($this->pageObject->pageType == PAGE_RPRINT && $this->container->forExport == "excel") ) 
		{
			return runner_htmlspecialchars($data[$this->field]);
 		}
		if($this->pageObject->pageType != PAGE_LIST)
		{
			$mapData = $this->pageObject->addGoogleMapData($this->field, $data);
		}
	
		if($this->pageObject->pageType != PAGE_PRINT && $this->pageObject->pageType != PAGE_RPRINT)
		{	
			return '<div id="littleMap_'.GoodFieldName($this->field).'_'.$this->pageObject->recId.'" style="width: '.
				($this->pageObject->googleMapCfg['fieldsAsMap'] == null ? "100" : $this->pageObject->googleMapCfg['fieldsAsMap'][$this->field]['width'].'px; height: ').
				($this->pageObject->googleMapCfg['fieldsAsMap'] == null ? "100" : $this->pageObject->googleMapCfg['fieldsAsMap'][$this->field]['height'].'px;" ').
				'class="littleMap"></div>';
		}

		if( $mapData['markers'][0]['lat'] == "" && $mapData['markers'][0]['lng'] == "" )
		{
			$location = $mapData['markers'][0]['address'];
		}
		else
		{
			$location = $mapData['markers'][0]['lat'].','.$mapData['markers'][0]['lng'];
		}
		
		$src = 'http://maps.googleapis.com/maps/api/staticmap?center='.$location.'&zoom='.$mapData['zoom'].'&size='.
			($this->pageObject->googleMapCfg['fieldsAsMap'] == null ? "100" : $this->pageObject->googleMapCfg['fieldsAsMap'][$this->field]['width']).'x'.
			($this->pageObject->googleMapCfg['fieldsAsMap'] == null ? "100" : $this->pageObject->googleMapCfg['fieldsAsMap'][$this->field]['height']).'&maptype=mobile&markers='.$location.'&sensor=false';
		
		return '<img border="0" alt="" src="'.$src.'">';
	}
} 
?>