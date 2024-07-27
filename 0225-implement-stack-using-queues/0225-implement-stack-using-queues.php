class MyStack {
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
        $lastKey = array_key_last($this->stack);
        $lastVal = $this->stack[$lastKey];
        unset($this->stack[$lastKey]);
        return $lastVal;
    }
  
    /**
     * @return Integer
     */
    function top() {
        return $this->stack[array_key_last($this->stack)];
    }
  
    /**
     * @return Boolean
     */
    function empty() {
        return empty($this->stack);
    }
}

/**
 * Your MyStack object will be instantiated and called as such:
 * $obj = MyStack();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->top();
 * $ret_4 = $obj->empty();
 */