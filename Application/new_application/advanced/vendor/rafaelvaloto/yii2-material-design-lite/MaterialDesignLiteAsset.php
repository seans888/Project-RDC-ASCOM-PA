<?php 
namespace rafaelvaloto\mdl\material;

use yii\web\AssetBundle;

/**
 * 
 **/
class MaterialDesignLiteAsset extends AssetBundle
{
	public 	$sourcePath = '@bower/material-design-lite';

	public $css = [
		'material.min.css'	
	];
	public $js = [	
		'material.min.js'	
	];	
}

?>
