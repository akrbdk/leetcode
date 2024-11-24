class Solution {

    /**
     * @param String[] $emails
     * @return Integer
     */
    function numUniqueEmails($emails) {
        $unique = [];
        
        foreach($emails as $email){
            $base = explode('@', $email);
            $prefix = explode('+', $base[0]);
            $prefix = str_replace('.', '', $prefix[0]);
            $unique[$prefix . '@' . $base[1]] = true;
        }
        
        
        return count($unique);
    }
}