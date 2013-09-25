<?php
/**
 * Class for storing redirects to old urls
 */

class OldURLRedirect extends DataObject {

        private static $singular_name = 'URL Redirect';
        private static $plural_name = 'URL Redirects';

        private static $db = array(
                'OldURL' => 'Varchar(255)',
        );

        private static $summary_fields = array(
                'OldURL' => 'Old URL',
                'Page.Link' => 'New URL'
        );

        private static $has_one = array(
                'Page' => 'SiteTree'
        );

        public function getCMSFields() {
                $fields = parent::getCMSFields();

                $fields->removeByName('PageID');

                return $fields;
        }

	public function canView($member = null) {
		return true;
	}

	public function canEdit($member = null) {
		return true;
	}

	public function canCreate($member = null) {
		return true;
	}

	public function canDelete($member = null) {
		return true;
	}
}