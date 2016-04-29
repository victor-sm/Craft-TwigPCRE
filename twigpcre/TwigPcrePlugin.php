<?php
/**
 * @package   Twig PCRE
 * @author    Victor In.
 * @copyright Copyright 2016
 * @link      https://github.com/victor-in/Craft-TwigPCRE
 * @license   MIT
 */
namespace Craft;

class TwigPcrePlugin extends BasePlugin
{
    public function getName()
    {
        return Craft::t('Twig PCRE Filters');
    }

    public function getVersion()
    {
        return '0.3.1';
    }
    
    public function getSchemaVersion() {
    	return '0.1';
    }

    public function getDeveloper()
    {
        return 'Victor In.';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/victor-in/';
    }
	
    public function getDocumentationUrl()
    {
        return 'https://github.com/victor-in/Craft-TwigPCRE';
    }
    
    public function getReleaseFeedUrl()
    {
        return 'https://raw.githubusercontent.com/victor-in/Craft-TwigPCRE/master/changelog.json';
    }

    public function addTwigExtension()
    {
        Craft::import('plugins.twigpcre.twigextensions.TwigPcreTwigExtension');
        return new TwigPcreTwigExtension();
    }
}
