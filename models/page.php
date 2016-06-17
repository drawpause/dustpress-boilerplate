<?php
/**
 *  Template name: Default template
 */

class Page extends \DustPress\Model {
	public function Contents() {
		return \DustPress\Query::get_post( get_the_ID() );
	}
}