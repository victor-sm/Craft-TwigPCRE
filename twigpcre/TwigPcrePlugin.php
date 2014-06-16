<?php
/**
 * @package   Twig Match
 * @author    Victor In.
 * @copyright Copyright 2014
 * @link      https://github.com/victor-in/Craft-TwigMatch
 * @license   MIT
 */
namespace Craft;

class TwigPcrePlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Twig PCRE Filters');
    }

    function getVersion()
    {
        return '0.1';
    }

    function getDeveloper()
    {
        return 'Victor In.';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/victor-in/';
    }

    function addTwigExtension()
    {
        Craft::import('plugins.twigpcre.twigextensions.TwigPcreTwigExtension');
        return new TwigPcreTwigExtension();
    }
}
