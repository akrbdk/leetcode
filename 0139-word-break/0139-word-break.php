class Solution {

    /**
     * @param String $s
     * @param String[] $wordDict
     * @return Boolean
     */
    function wordBreak($s, $wordDict) {
        $memory = [];
        return $this->helperMemorized($s, $wordDict, 0, $memory);
        //return $this->helper($s, $wordDict);
    }
    
    function helper($s, $wordDict){
        if(!strlen($s)){
            return true;
        }
        
        foreach($wordDict as $word){
            $wordLen = strlen($word);
            if($word == substr($s, 0, $wordLen)){
                if($this->helper(substr($s, $wordLen), $wordDict, $memory)){
                    return true;
                }
            }
        }
        
        return false;
    }
    
    function helperMemorized($s, $wordDict, $start, &$memory)
    {
        if ($start === strlen($s))
        {
            return true;
        }

        if(isset($memory[$start])){
            return $memory[$start];
        }
        
        for ($i = $start + 1; $i <= strlen($s); $i++)
        {
            $input = substr($s, $start, $i - $start);
            if (in_array($input, $wordDict) && $this->helperMemorized($s, $wordDict, $i, $memory))
            {
                $memory[$start] = true;
                return true;
            }
        }

        $memory[$start] = false;
        return false;
    }
}