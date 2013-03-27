<?php
/**
 * Objectify behavior
 *
 * Enables users to get the dataset result as an object instead of an array
 * using model methods
 *
 * PHP versions 4 and 5
 *
 * Copyright 2013, KARTONO Loïc
 *
 * Licensed under The MIT License
 *
 * @copyright     Copyright 2013, KARTONO Loïc
 * @package       app
 * @subpackage    app.models.behaviors
 * @link          http://github.com/SoftMonkeyJapan/objectify
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
class ObjectifyBehavior extends ModelBehavior {


	/**
	 * After find method. Called after a find
	 *
	 * Turn the array return by default into an object
	 *
	 * @param AppModel $model Model instance
	 * @param array $results Data from database
	 * @param boolean $primary
	 * @return Object
	 */
    function afterFind(Model $model, $results, $primary = false) {
        return Set::map($results);
    }   
}