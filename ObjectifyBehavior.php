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
	 * @var boolean Determine if we return
	 * 		the data as an object or an array
	 */
	protected $__isObject = false;



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
    public function afterFind(Model $model, $results, $primary = false) {
        return $this->__isObject ? Set::map($results) : $results;
    }




    /**
     * Method allowing using to switch on/off
     * the return type
     * @param boolean $is If true then will return an object
     */
    public function objectify ( $is ){
    	$this->__isObject = $is;
    }
}