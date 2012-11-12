<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Robert Katzki <developer@bildungsweb.net>
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
 * 
 * A view helper for encoding values to JSON. 
 *
 * = Examples =
 *
 * <code title="Normal notation">
 * <bweb:date format="d.M.">{timestamp}</f:jsonEncode>
 * </code>
 * <output>
 * The date, for example 14.03.
 * </output>
 *
 * <code title="Inline notation">
 * {timestamp -> bweb:date(format:'d.M.')}
 * </code>
 * <output>
 * The date, for example 14.03.
 * </output>
 *
 * @package bweb_fe
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
class Tx_BwebVh_ViewHelpers_DateViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * Generates a formatted date of the given timestamp
	 *
	 * @param string $format The wished format of the date
	 * @return string
	 */
	public function render($format) {setlocale(LC_TIME, 'de_DE');
		$timestamp 		= $this->renderChildren();
		$formattedDate 	= date($format, $timestamp);
		
		if($format === 'D') {
			$weekdayAbbr 	= array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
			$wochentageAbk 	= array('Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa', 'So');
			$formattedDate 	= str_replace($weekdayAbbr, $wochentageAbk, $formattedDate);
		}

		$weekdays 		= array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
		$wochentage 	= array('Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag');
		$formattedDate 	= str_replace($weekdays, $wochentage, $formattedDate);

		$monthsShort 	= array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		$monateKurz 	= array('Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');
		$formattedDate 	= str_replace($monthsShort, $monateKurz, $formattedDate);

		return $formattedDate;
	}
}

?>
