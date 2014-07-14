<?php
/*
 * @author xuruiqi
 * @date   2014.06.28
 * @abstract Page's abstract class
 */
abstract class Phpfetcher_Page_Abstract {

    //protected $_arrConf    = array();
    
    protected $_strContent = NULL;

    //TODO
    public function __construct() {

    }

    //TODO
    public function __destruct() {

    }

    public function __get($key) {
        echo $key, 'doesn\'t exist!';
    }

    public function __set($key, $val) {
        echo "Can't assign '$val' to $key!";
    }

    /**
     * @abstract get configurations.
     */
    public function getConf() {
        echo 'Not implemented';
    }

    /**
     * @abstract get page's URL.
     */
    abstract function getUrl();

    /**
     * @abstract initialize this instance with specified or default configuration
     */
    abstract function init();

    /**
     * @abstract get page's content, and save it into member variable $content
     */
    abstract function read();

    /**
     * @abstract set configurations.
     */
    public function setConf($conf = array()) {
        echo 'Not implemented';
    }

    /**
     * @abstract set page's URL.
     */
    abstract function setUrl($url);
}
?>
