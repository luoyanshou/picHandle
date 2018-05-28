<?php

/**
 * 
 */
class Picture
{
	protect $img_path;
	protect $logo_path;
	protect $logo_txt;

	/**
	 * [__construct description]
	 * @param [type] $img_path  [description]
	 * @param [type] $logo_path [description]
	 * @param [type] $logo_txt  [description]
	 */
	function __construct( $img_path , $logo_path = '', $logo_txt = '')
	{
		$this->img_path = $img_path;
		if( '' != $logo_path &&  !$this->get_img_type($logo_path) )
			$this->logo_path = $logo_path;
		if( $logo_txt !='' )
			$this->logo_txt = $logo_txt;


	}

	/**
	 * [getImgType description]
	 * @param  [type] $img_path [description]
	 * @return [type]           [description]
	 */
	function get_img_type( $img_path )
	{
		if( file_exists($img_path) )
			return exif_imagetype($img_path)) 			 				
		return false;
	}

}