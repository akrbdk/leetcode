class MyQueue {
    /**
     */
    function __construct(private $stack = []) {
        
    }
  
    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x) {
        $this->stack[] = $x;
    }
  
    /**
     * @return Integer
     */
    function pop() {
        $firstKey = array_key_first($this->stack);
        $firstVal = $this->stack[$firstKey];
        unset($this->stack[$firstKey]);
        return $firstVal;
    }
  
    /**
     * @return Integer
     */
    function peek() {
        return $this->stack[array_key_first($this->stack)];
    }
  
    /**
     * @return Boolean
     */
    function empty() {
        return empty($this->stack);
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */