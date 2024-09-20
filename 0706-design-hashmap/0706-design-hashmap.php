class MyHashMap {
    
    private $hash;
    /**
     */
    function __construct() {
        $this->hash = [];
    }
  
    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        $this->hash[$key] = $value;
    }
  
    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        return $this->hash[$key] ?? -1;
    }
  
    /**
     * @param Integer $key
     * @return NULL
     */
    function remove($key) {
        if(isset($this->hash[$key])){
            unset($this->hash[$key]);
        }
    }
}

/**
 * Your MyHashMap object will be instantiated and called as such:
 * $obj = MyHashMap();
 * $obj->put($key, $value);
 * $ret_2 = $obj->get($key);
 * $obj->remove($key);
 */