<?php
/**
 * Tags for Craft CMS
 *
 * @link      https://ethercreative.co.uk
 * @copyright Copyright (c) 2018 Ether Creative
 */

namespace onstuimig\tagmanager\web\assets;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * Class TagIndexAsset
 *
 * @author  Ether Creative
 * @package onstuimig\tagmanager\web\assets\index
 */
class TagIndexAsset extends AssetBundle
{

	public function init ()
	{
		$this->sourcePath = __DIR__;

		$this->depends = [
			CpAsset::class,
		];

		$this->js = [
			'TagIndex.js',
		];

		parent::init();
	}

}