<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Christian Hansen <christian@bildungsweb.net>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * <bweb:implode glue="glueString" pieces="piecesArray" />
 *
 * {bweb:implode(glue:'glueString', pieces='piecesArray')}
 *
 * @package bweb_fe
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Tx_BwebVh_ViewHelpers_ImplodeViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * glue array with string to glued string
	 *
	 * @param string $glue string to glue pieces with
	 * @param array $pieces array to be converted in glued string
	 * @return boolean
	 */
	public function render($glue = NULL, $pieces = NULL) {
		if($pieces) {
			$gluedstring = implode($glue, $pieces);
		}
		return $gluedstring;
	}
}

?>
